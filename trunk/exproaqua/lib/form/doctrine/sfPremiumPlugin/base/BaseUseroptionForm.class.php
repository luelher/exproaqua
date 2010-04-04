<?php

/**
 * Useroption form base class.
 *
 * @method Useroption getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUseroptionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'username'   => new sfWidgetFormInputText(),
      'modulo'     => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'asignada'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'username'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'modulo'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'asignada'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('useroption[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Useroption';
  }

}
