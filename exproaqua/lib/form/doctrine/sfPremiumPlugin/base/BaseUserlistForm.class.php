<?php

/**
 * Userlist form base class.
 *
 * @method Userlist getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserlistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario'    => new sfWidgetFormInputText(),
      'node_name'  => new sfWidgetFormInputText(),
      'node_id'    => new sfWidgetFormInputText(),
      'fechayhora' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'node_name'  => new sfValidatorString(array('max_length' => 60)),
      'node_id'    => new sfValidatorString(array('max_length' => 3)),
      'fechayhora' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('userlist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Userlist';
  }

}
