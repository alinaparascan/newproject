<?php

/**
 * Cv form base class.
 *
 * @method Cv getObject() Returns the current form's model object
 *
 * @package    newproject
 * @subpackage form
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cv'                  => new sfWidgetFormInputHidden(),
      'id_person'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => false)),
      'name'                   => new sfWidgetFormInputText(),
      'surname'                => new sfWidgetFormInputText(),
      'city'                   => new sfWidgetFormInputText(),
      'email'                  => new sfWidgetFormInputText(),
      'phone'                  => new sfWidgetFormInputText(),
      'title'                  => new sfWidgetFormInputText(),
      'years_experience'       => new sfWidgetFormInputText(),
      'description_experience' => new sfWidgetFormTextarea(),
      'education'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_cv'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_cv', 'required' => false)),
      'id_person'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'))),
      'name'                   => new sfValidatorString(array('max_length' => 30)),
      'surname'                => new sfValidatorString(array('max_length' => 30)),
      'city'                   => new sfValidatorString(array('max_length' => 30)),
      'email'                  => new sfValidatorString(array('max_length' => 60)),
      'phone'                  => new sfValidatorInteger(),
      'title'                  => new sfValidatorString(array('max_length' => 50)),
      'years_experience'       => new sfValidatorString(array('max_length' => 50)),
      'description_experience' => new sfValidatorString(array('max_length' => 500)),
      'education'              => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('cv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cv';
  }

}
