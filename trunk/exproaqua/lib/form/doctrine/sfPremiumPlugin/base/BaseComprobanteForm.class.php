<?php

/**
 * Comprobante form base class.
 *
 * @method Comprobante getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComprobanteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'descr'      => new sfWidgetFormInputText(),
      'debe'       => new sfWidgetFormInputText(),
      'haber'      => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'cuadra'     => new sfWidgetFormInputText(),
      'mes'        => new sfWidgetFormInputText(),
      'nmes'       => new sfWidgetFormInputText(),
      'ano'        => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormInputText(),
      'tasa'       => new sfWidgetFormInputText(),
      'contab'     => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'hora'       => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'cusuario'   => new sfWidgetFormInputText(),
      'chora'      => new sfWidgetFormInputText(),
      'cestacion'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descr'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'debe'       => new sfValidatorNumber(array('required' => false)),
      'haber'      => new sfValidatorNumber(array('required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'cuadra'     => new sfValidatorNumber(array('required' => false)),
      'mes'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nmes'       => new sfValidatorNumber(array('required' => false)),
      'ano'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'contab'     => new sfValidatorNumber(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cusuario'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'chora'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cestacion'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comprobante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comprobante';
  }

}
