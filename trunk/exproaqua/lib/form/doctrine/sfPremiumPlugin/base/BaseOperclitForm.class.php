<?php

/**
 * Operclit form base class.
 *
 * @method Operclit getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOperclitForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'caja'           => new sfWidgetFormInputText(),
      'tiporec'        => new sfWidgetFormInputText(),
      'tipodoc'        => new sfWidgetFormInputHidden(),
      'documento'      => new sfWidgetFormInputHidden(),
      'referencia'     => new sfWidgetFormInputText(),
      'nomcliente'     => new sfWidgetFormInputText(),
      'codcli'         => new sfWidgetFormInputText(),
      'recibo'         => new sfWidgetFormInputHidden(),
      'fecha'          => new sfWidgetFormDate(),
      'emifac'         => new sfWidgetFormDate(),
      'ncredito'       => new sfWidgetFormInputText(),
      'monto'          => new sfWidgetFormInputText(),
      'concepto'       => new sfWidgetFormInputText(),
      'bcocheqcod'     => new sfWidgetFormInputText(),
      'bcocheqnom'     => new sfWidgetFormInputText(),
      'bcocheqmto'     => new sfWidgetFormInputText(),
      'bcocheqnro'     => new sfWidgetFormInputText(),
      'codigotar'      => new sfWidgetFormInputText(),
      'bancotar'       => new sfWidgetFormInputText(),
      'mtotarjeta'     => new sfWidgetFormInputText(),
      'nrotarjeta'     => new sfWidgetFormInputText(),
      'efectivo'       => new sfWidgetFormInputText(),
      'tardebcod'      => new sfWidgetFormInputText(),
      'tardebnom'      => new sfWidgetFormInputText(),
      'tardebnum'      => new sfWidgetFormInputText(),
      'tardebmto'      => new sfWidgetFormInputText(),
      'otrotipo'       => new sfWidgetFormInputText(),
      'otroreferencia' => new sfWidgetFormInputText(),
      'cobrador'       => new sfWidgetFormInputText(),
      'prc_comi'       => new sfWidgetFormInputText(),
      'procedecre'     => new sfWidgetFormInputText(),
      'mto_comi'       => new sfWidgetFormInputText(),
      'estatusrec'     => new sfWidgetFormInputText(),
      'operac'         => new sfWidgetFormInputText(),
      'motanul'        => new sfWidgetFormInputText(),
      'user_emi'       => new sfWidgetFormInputText(),
      'user_anul'      => new sfWidgetFormInputText(),
      'fechaanul'      => new sfWidgetFormDate(),
      'horadocum'      => new sfWidgetFormInputText(),
      'ampm'           => new sfWidgetFormInputText(),
      'porcredito'     => new sfWidgetFormInputText(),
      'turno'          => new sfWidgetFormInputText(),
      'cortecaja'      => new sfWidgetFormInputText(),
      'fechayhora'     => new sfWidgetFormDateTime(),
      'idvalidacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'caja'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tiporec'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tipodoc'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'referencia'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nomcliente'     => new sfValidatorString(array('max_length' => 44, 'required' => false)),
      'codcli'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'recibo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'fecha'          => new sfValidatorDate(array('required' => false)),
      'emifac'         => new sfValidatorDate(array('required' => false)),
      'ncredito'       => new sfValidatorNumber(array('required' => false)),
      'monto'          => new sfValidatorNumber(array('required' => false)),
      'concepto'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'bcocheqcod'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'bcocheqnom'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'bcocheqmto'     => new sfValidatorNumber(array('required' => false)),
      'bcocheqnro'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'codigotar'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'bancotar'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'mtotarjeta'     => new sfValidatorNumber(array('required' => false)),
      'nrotarjeta'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'efectivo'       => new sfValidatorNumber(array('required' => false)),
      'tardebcod'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tardebnom'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'tardebnum'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tardebmto'      => new sfValidatorNumber(array('required' => false)),
      'otrotipo'       => new sfValidatorNumber(array('required' => false)),
      'otroreferencia' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cobrador'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'prc_comi'       => new sfValidatorNumber(array('required' => false)),
      'procedecre'     => new sfValidatorNumber(array('required' => false)),
      'mto_comi'       => new sfValidatorNumber(array('required' => false)),
      'estatusrec'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'operac'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'motanul'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_emi'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'user_anul'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fechaanul'      => new sfValidatorDate(array('required' => false)),
      'horadocum'      => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ampm'           => new sfValidatorNumber(array('required' => false)),
      'porcredito'     => new sfValidatorNumber(array('required' => false)),
      'turno'          => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cortecaja'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'fechayhora'     => new sfValidatorDateTime(array('required' => false)),
      'idvalidacion'   => new sfValidatorString(array('max_length' => 12, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('operclit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Operclit';
  }

}
