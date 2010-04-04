<?php

/**
 * Opergast form base class.
 *
 * @method Opergast getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOpergastForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'    => new sfWidgetFormInputHidden(),
      'agencia'       => new sfWidgetFormInputHidden(),
      'caja'          => new sfWidgetFormInputText(),
      'tiporec'       => new sfWidgetFormInputText(),
      'tipodoc'       => new sfWidgetFormInputHidden(),
      'documento'     => new sfWidgetFormInputHidden(),
      'recibo'        => new sfWidgetFormInputHidden(),
      'fecha'         => new sfWidgetFormDate(),
      'monto'         => new sfWidgetFormInputText(),
      'concepto'      => new sfWidgetFormTextarea(),
      'bcocheqcod'    => new sfWidgetFormInputText(),
      'bcocheqnom'    => new sfWidgetFormInputText(),
      'bcocheqmto'    => new sfWidgetFormInputText(),
      'bcocheqnro'    => new sfWidgetFormInputText(),
      'codigotar'     => new sfWidgetFormInputText(),
      'bancotar'      => new sfWidgetFormInputText(),
      'mtotarjeta'    => new sfWidgetFormInputText(),
      'nrotarjeta'    => new sfWidgetFormInputText(),
      'efectivo'      => new sfWidgetFormInputText(),
      'tardebcod'     => new sfWidgetFormInputText(),
      'tardebnom'     => new sfWidgetFormInputText(),
      'tardebnum'     => new sfWidgetFormInputText(),
      'tardebmto'     => new sfWidgetFormInputText(),
      'codcli'        => new sfWidgetFormInputText(),
      'nomcliente'    => new sfWidgetFormInputText(),
      'cobrador'      => new sfWidgetFormInputText(),
      'fechaanul'     => new sfWidgetFormDate(),
      'user_anul'     => new sfWidgetFormInputText(),
      'prc_comi'      => new sfWidgetFormInputText(),
      'mto_comi'      => new sfWidgetFormInputText(),
      'estatusrec'    => new sfWidgetFormInputText(),
      'operac'        => new sfWidgetFormInputText(),
      'motanul'       => new sfWidgetFormTextarea(),
      'user_emi'      => new sfWidgetFormInputText(),
      'procedecre'    => new sfWidgetFormInputText(),
      'integrado'     => new sfWidgetFormInputText(),
      'horadocum'     => new sfWidgetFormInputText(),
      'ampm'          => new sfWidgetFormInputText(),
      'turno'         => new sfWidgetFormInputText(),
      'otraforma'     => new sfWidgetFormInputText(),
      'mto_otraforma' => new sfWidgetFormInputText(),
      'notadeb'       => new sfWidgetFormInputText(),
      'mtonotadeb'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'caja'          => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tiporec'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tipodoc'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'recibo'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'fecha'         => new sfValidatorDate(array('required' => false)),
      'monto'         => new sfValidatorNumber(array('required' => false)),
      'concepto'      => new sfValidatorString(array('required' => false)),
      'bcocheqcod'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'bcocheqnom'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'bcocheqmto'    => new sfValidatorNumber(array('required' => false)),
      'bcocheqnro'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'codigotar'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'bancotar'      => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'mtotarjeta'    => new sfValidatorNumber(array('required' => false)),
      'nrotarjeta'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'efectivo'      => new sfValidatorNumber(array('required' => false)),
      'tardebcod'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tardebnom'     => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'tardebnum'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tardebmto'     => new sfValidatorNumber(array('required' => false)),
      'codcli'        => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomcliente'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cobrador'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'fechaanul'     => new sfValidatorDate(array('required' => false)),
      'user_anul'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'prc_comi'      => new sfValidatorNumber(array('required' => false)),
      'mto_comi'      => new sfValidatorNumber(array('required' => false)),
      'estatusrec'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'operac'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'motanul'       => new sfValidatorString(array('required' => false)),
      'user_emi'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'procedecre'    => new sfValidatorNumber(array('required' => false)),
      'integrado'     => new sfValidatorNumber(array('required' => false)),
      'horadocum'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'ampm'          => new sfValidatorNumber(array('required' => false)),
      'turno'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'otraforma'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'mto_otraforma' => new sfValidatorNumber(array('required' => false)),
      'notadeb'       => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'mtonotadeb'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('opergast[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opergast';
  }

}
