<?php

/**
 * Cv filter form base class.
 *
 * @package    newproject
 * @subpackage filter
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_person'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'surname'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'years_experience'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description_experience' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'education'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_person'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id_person')),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'surname'                => new sfValidatorPass(array('required' => false)),
      'city'                   => new sfValidatorPass(array('required' => false)),
      'email'                  => new sfValidatorPass(array('required' => false)),
      'phone'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'                  => new sfValidatorPass(array('required' => false)),
      'years_experience'       => new sfValidatorPass(array('required' => false)),
      'description_experience' => new sfValidatorPass(array('required' => false)),
      'education'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cv';
  }

  public function getFields()
  {
    return array(
      'id_cv'                  => 'Number',
      'id_person'              => 'ForeignKey',
      'name'                   => 'Text',
      'surname'                => 'Text',
      'city'                   => 'Text',
      'email'                  => 'Text',
      'phone'                  => 'Number',
      'title'                  => 'Text',
      'years_experience'       => 'Text',
      'description_experience' => 'Text',
      'education'              => 'Text',
    );
  }
}
