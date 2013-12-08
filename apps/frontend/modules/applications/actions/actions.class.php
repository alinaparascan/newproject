<?php

/**
 * applications actions.
 *
 * @package    newproject
 * @subpackage applications
 * @author     Alina Parascan
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class applicationsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->applicationss = Doctrine::getTable('Applications')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->applications = Doctrine::getTable('Applications')->find(array($request->getParameter('id_person'),
                                         $request->getParameter('id_jobs')));
    $this->forward404Unless($this->applications);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ApplicationsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ApplicationsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($applications = Doctrine::getTable('Applications')->find(array($request->getParameter('id_person'),
                   $request->getParameter('id_jobs'))), sprintf('Object applications does not exist (%s).', $request->getParameter('id_person'),
                   $request->getParameter('id_jobs')));
    $this->form = new ApplicationsForm($applications);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($applications = Doctrine::getTable('Applications')->find(array($request->getParameter('id_person'),
                   $request->getParameter('id_jobs'))), sprintf('Object applications does not exist (%s).', $request->getParameter('id_person'),
                   $request->getParameter('id_jobs')));
    $this->form = new ApplicationsForm($applications);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($applications = Doctrine::getTable('Applications')->find(array($request->getParameter('id_person'),
                   $request->getParameter('id_jobs'))), sprintf('Object applications does not exist (%s).', $request->getParameter('id_person'),
                   $request->getParameter('id_jobs')));
    $applications->delete();

    $this->redirect('applications/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $applications = $form->save();

      $this->redirect('applications/edit?id_person='.$applications->getIdPerson().'&id_jobs='.$applications->getIdJobs());
    }
  }
}
