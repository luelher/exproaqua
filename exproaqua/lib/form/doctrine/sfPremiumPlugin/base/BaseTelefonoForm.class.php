<?php

/**
 * Telefono form base class.
 *
 * @method Telefono getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTelefonoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'empresa'    => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormTextarea(),
      'telefono'   => new sfWidgetFormInputText(),
      'fax'        => new sfWidgetFormInputText(),
      'website'    => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'notas'      => new sfWidgetFormTextarea(),
      'confiden'   => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'nombre'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'apellido'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'empresa'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'direccion'  => new sfValidatorString(array('required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fax'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'website'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
      'confiden'   => new sfValidatorNumber(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('telefono[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Telefono';
  }

}
