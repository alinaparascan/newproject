<?php

/**
 * Jobs filter form base class.
 *
 * @package    newproject
 * @subpackage filter
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'job_title'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'posting_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'job_description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'job_location'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'job_title'       => new sfValidatorPass(array('required' => false)),
      'posting_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'job_description' => new sfValidatorPass(array('required' => false)),
      'job_location'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jobs';
  }

  public function getFields()
  {
    return array(
      'id_jobs'         => 'Number',
      'job_title'       => 'Text',
      'posting_date'    => 'Date',
      'job_description' => 'Text',
      'job_location'    => 'Text',
    );
  }
}
