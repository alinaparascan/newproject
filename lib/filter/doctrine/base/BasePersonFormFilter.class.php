<?php

/**
 * Person filter form base class.
 *
 * @package    newproject
 * @subpackage filter
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pass'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tip'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user'      => new sfValidatorPass(array('required' => false)),
      'pass'      => new sfValidatorPass(array('required' => false)),
      'tip'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function getFields()
  {
    return array(
      'id_person' => 'Number',
      'user'      => 'Text',
      'pass'      => 'Text',
      'tip'       => 'Text',
    );
  }
}
