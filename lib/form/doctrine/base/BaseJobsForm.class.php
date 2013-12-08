<?php

/**
 * Jobs form base class.
 *
 * @method Jobs getObject() Returns the current form's model object
 *
 * @package    newproject
 * @subpackage form
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_jobs'         => new sfWidgetFormInputHidden(),
      'job_title'       => new sfWidgetFormInputText(),
      'posting_date'    => new sfWidgetFormDate(),
      'job_description' => new sfWidgetFormTextarea(),
      'job_location'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_jobs'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_jobs', 'required' => false)),
      'job_title'       => new sfValidatorString(array('max_length' => 30)),
      'posting_date'    => new sfValidatorDate(),
      'job_description' => new sfValidatorString(),
      'job_location'    => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('jobs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jobs';
  }

}
