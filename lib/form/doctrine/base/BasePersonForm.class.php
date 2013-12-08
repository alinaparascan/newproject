<?php

/**
 * Person form base class.
 *
 * @method Person getObject() Returns the current form's model object
 *
 * @package    newproject
 * @subpackage form
 * @author     Alina Parascan
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_person' => new sfWidgetFormInputHidden(),
      'user'      => new sfWidgetFormInputText(),
      'pass'      => new sfWidgetFormInputText(),
      'tip'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_person' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_person', 'required' => false)),
      'user'      => new sfValidatorString(array('max_length' => 30)),
      'pass'      => new sfValidatorString(array('max_length' => 30)),
      'tip'       => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

}
