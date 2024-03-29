<?php

/**
 * person actions.
 *
 * @package    newproject
 * @subpackage person
 * @author     Alina Parascan
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->persons = Doctrine::getTable('Person')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->person = Doctrine::getTable('Person')->find(array($request->getParameter('id_person')));
    $this->forward404Unless($this->person);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id_person'))), sprintf('Object person does not exist (%s).', $request->getParameter('id_person')));
    $this->form = new PersonForm($person);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id_person'))), sprintf('Object person does not exist (%s).', $request->getParameter('id_person')));
    $this->form = new PersonForm($person);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id_person'))), sprintf('Object person does not exist (%s).', $request->getParameter('id_person')));
    $person->delete();

    $this->redirect('person/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $person = $form->save();

      $this->redirect('person/edit?id_person='.$person->getIdPerson());
    }
  }
}
