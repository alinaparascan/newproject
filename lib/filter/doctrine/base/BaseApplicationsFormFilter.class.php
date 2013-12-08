<?php

/**
 * Applications filter form base class.
 *
 * @package    newproject
 * @subpackage filter
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApplicationsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('applications_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Applications';
  }

  public function getFields()
  {
    return array(
      'id_person' => 'Number',
      'id_jobs'   => 'Number',
    );
  }
}
