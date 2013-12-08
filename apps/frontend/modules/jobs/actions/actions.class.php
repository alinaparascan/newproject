<?php

/**
 * jobs actions.
 *
 * @package    newproject
 * @subpackage jobs
 * @author     Alina Parascan
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobss = Doctrine::getTable('Jobs')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jobs = Doctrine::getTable('Jobs')->find(array($request->getParameter('id_jobs')));
    $this->forward404Unless($this->jobs);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobs = Doctrine::getTable('Jobs')->find(array($request->getParameter('id_jobs'))), sprintf('Object jobs does not exist (%s).', $request->getParameter('id_jobs')));
    $this->form = new JobsForm($jobs);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobs = Doctrine::getTable('Jobs')->find(array($request->getParameter('id_jobs'))), sprintf('Object jobs does not exist (%s).', $request->getParameter('id_jobs')));
    $this->form = new JobsForm($jobs);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobs = Doctrine::getTable('Jobs')->find(array($request->getParameter('id_jobs'))), sprintf('Object jobs does not exist (%s).', $request->getParameter('id_jobs')));
    $jobs->delete();

    $this->redirect('jobs/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobs = $form->save();

      $this->redirect('jobs/edit?id_jobs='.$jobs->getIdJobs());
    }
  }
}
