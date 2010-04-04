<?php

/**
 * Banmov form base class.
 *
 * @method Banmov getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBanmovForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'codigoban'  => new sfWidgetFormInputHidden(),
      'fechaban'   => new sfWidgetFormInputHidden(),
      'fechalibe'  => new sfWidgetFormDate(),
      'tipomov'    => new sfWidgetFormInputHidden(),
      'numero'     => new sfWidgetFormInputHidden(),
      'concepto'   => new sfWidgetFormTextarea(),
      'proveed'    => new sfWidgetFormInputText(),
      'beneficiar' => new sfWidgetFormInputText(),
      'conciliad'  => new sfWidgetFormInputText(),
      'nroconcil'  => new sfWidgetFormInputText(),
      'fconcilia'  => new sfWidgetFormDate(),
      'monto'      => new sfWidgetFormInputText(),
      'cuenta'     => new sfWidgetFormInputText(),
      'comprob'    => new sfWidgetFormInputText(),
      'nmes'       => new sfWidgetFormInputText(),
      'mes'        => new sfWidgetFormInputText(),
      'montoplaza' => new sfWidgetFormInputText(),
      'montobanco' => new sfWidgetFormInputText(),
      'montofplaz' => new sfWidgetFormInputText(),
      'fechaplaza' => new sfWidgetFormDate(),
      'fechabanco' => new sfWidgetFormDate(),
      'fechafplaz' => new sfWidgetFormDate(),
      'tarjeta'    => new sfWidgetFormInputText(),
      'tarjetadeb' => new sfWidgetFormInputText(),
      'cheque'     => new sfWidgetFormInputText(),
      'efectivo'   => new sfWidgetFormInputText(),
      'debitoban'  => new sfWidgetFormInputText(),
      'endosable'  => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'usuario'    => new sfWidgetFormInputText(),
      'nodo'       => new sfWidgetFormInputText(),
      'fechaini'   => new sfWidgetFormDate(),
      'anulado'    => new sfWidgetFormInputText(),
      'id'         => new sfWidgetFormInputText(),
      'tranferido' => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'impreso'    => new sfWidgetFormInputText(),
      'referencia' => new sfWidgetFormInputText(),
      'compcont'   => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'recibo'     => new sfWidgetFormInputText(),
      'idconcilia' => new sfWidgetFormInputText(),
      'comision'   => new sfWidgetFormInputText(),
      'impuesto'   => new sfWidgetFormInputText(),
      'cuentacont' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'codigoban'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoban', 'required' => false)),
      'fechaban'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'fechaban', 'required' => false)),
      'fechalibe'  => new sfValidatorDate(array('required' => false)),
      'tipomov'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipomov', 'required' => false)),
      'numero'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numero', 'required' => false)),
      'concepto'   => new sfValidatorString(array('required' => false)),
      'proveed'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'beneficiar' => new sfValidatorString(array('max_length' => 69, 'required' => false)),
      'conciliad'  => new sfValidatorNumber(array('required' => false)),
      'nroconcil'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'fconcilia'  => new sfValidatorDate(array('required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'cuenta'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'comprob'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nmes'       => new sfValidatorNumber(array('required' => false)),
      'mes'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'montoplaza' => new sfValidatorNumber(array('required' => false)),
      'montobanco' => new sfValidatorNumber(array('required' => false)),
      'montofplaz' => new sfValidatorNumber(array('required' => false)),
      'fechaplaza' => new sfValidatorDate(array('required' => false)),
      'fechabanco' => new sfValidatorDate(array('required' => false)),
      'fechafplaz' => new sfValidatorDate(array('required' => false)),
      'tarjeta'    => new sfValidatorNumber(array('required' => false)),
      'tarjetadeb' => new sfValidatorNumber(array('required' => false)),
      'cheque'     => new sfValidatorNumber(array('required' => false)),
      'efectivo'   => new sfValidatorNumber(array('required' => false)),
      'debitoban'  => new sfValidatorNumber(array('required' => false)),
      'endosable'  => new sfValidatorNumber(array('required' => false)),
      'comentario' => new sfValidatorString(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nodo'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fechaini'   => new sfValidatorDate(array('required' => false)),
      'anulado'    => new sfValidatorNumber(array('required' => false)),
      'id'         => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'tranferido' => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'impreso'    => new sfValidatorNumber(array('required' => false)),
      'referencia' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'compcont'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'recibo'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'idconcilia' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
      'impuesto'   => new sfValidatorNumber(array('required' => false)),
      'cuentacont' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banmov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banmov';
  }

}
