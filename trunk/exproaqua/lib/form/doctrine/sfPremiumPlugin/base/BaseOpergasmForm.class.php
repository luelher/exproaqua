<?php

/**
 * Opergasm form base class.
 *
 * @method Opergasm getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOpergasmForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tiporec'    => new sfWidgetFormInputText(),
      'recibo'     => new sfWidgetFormInputHidden(),
      'proveedor'  => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'documento'  => new sfWidgetFormInputHidden(),
      'monto'      => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'tranferido' => new sfWidgetFormInputText(),
      'cuentacon'  => new sfWidgetFormInputText(),
      'integrado'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tiporec'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'recibo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'proveedor'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'tranferido' => new sfValidatorNumber(array('required' => false)),
      'cuentacon'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'integrado'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('opergasm[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opergasm';
  }

}
