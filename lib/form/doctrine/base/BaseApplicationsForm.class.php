<?php

/**
 * Applications form base class.
 *
 * @method Applications getObject() Returns the current form's model object
 *
 * @package    newproject
 * @subpackage form
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_person' => new sfWidgetFormInputHidden(),
      'id_jobs'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_person' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_person', 'required' => false)),
      'id_jobs'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_jobs', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('applications[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Applications';
  }

}
