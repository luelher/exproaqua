<?php

/**
 * Banmov filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBanmovFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechalibe'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'concepto'   => new sfWidgetFormFilterInput(),
      'proveed'    => new sfWidgetFormFilterInput(),
      'beneficiar' => new sfWidgetFormFilterInput(),
      'conciliad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nroconcil'  => new sfWidgetFormFilterInput(),
      'fconcilia'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuenta'     => new sfWidgetFormFilterInput(),
      'comprob'    => new sfWidgetFormFilterInput(),
      'nmes'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mes'        => new sfWidgetFormFilterInput(),
      'montoplaza' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montobanco' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montofplaz' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechaplaza' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechabanco' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechafplaz' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tarjeta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tarjetadeb' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheque'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'efectivo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'debitoban'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'endosable'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'nodo'       => new sfWidgetFormFilterInput(),
      'fechaini'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'anulado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id'         => new sfWidgetFormFilterInput(),
      'tranferido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impreso'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'referencia' => new sfWidgetFormFilterInput(),
      'compcont'   => new sfWidgetFormFilterInput(),
      'agencia'    => new sfWidgetFormFilterInput(),
      'recibo'     => new sfWidgetFormFilterInput(),
      'idconcilia' => new sfWidgetFormFilterInput(),
      'comision'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentacont' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'fechalibe'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'concepto'   => new sfValidatorPass(array('required' => false)),
      'proveed'    => new sfValidatorPass(array('required' => false)),
      'beneficiar' => new sfValidatorPass(array('required' => false)),
      'conciliad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nroconcil'  => new sfValidatorPass(array('required' => false)),
      'fconcilia'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuenta'     => new sfValidatorPass(array('required' => false)),
      'comprob'    => new sfValidatorPass(array('required' => false)),
      'nmes'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mes'        => new sfValidatorPass(array('required' => false)),
      'montoplaza' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montobanco' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montofplaz' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechaplaza' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechabanco' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechafplaz' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tarjeta'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tarjetadeb' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cheque'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'efectivo'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'debitoban'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'endosable'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'nodo'       => new sfValidatorPass(array('required' => false)),
      'fechaini'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'anulado'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'id'         => new sfValidatorPass(array('required' => false)),
      'tranferido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impreso'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'referencia' => new sfValidatorPass(array('required' => false)),
      'compcont'   => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'recibo'     => new sfValidatorPass(array('required' => false)),
      'idconcilia' => new sfValidatorPass(array('required' => false)),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentacont' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banmov_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banmov';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'codigoban'  => 'Text',
      'fechaban'   => 'Date',
      'fechalibe'  => 'Date',
      'tipomov'    => 'Text',
      'numero'     => 'Text',
      'concepto'   => 'Text',
      'proveed'    => 'Text',
      'beneficiar' => 'Text',
      'conciliad'  => 'Number',
      'nroconcil'  => 'Text',
      'fconcilia'  => 'Date',
      'monto'      => 'Number',
      'cuenta'     => 'Text',
      'comprob'    => 'Text',
      'nmes'       => 'Number',
      'mes'        => 'Text',
      'montoplaza' => 'Number',
      'montobanco' => 'Number',
      'montofplaz' => 'Number',
      'fechaplaza' => 'Date',
      'fechabanco' => 'Date',
      'fechafplaz' => 'Date',
      'tarjeta'    => 'Number',
      'tarjetadeb' => 'Number',
      'cheque'     => 'Number',
      'efectivo'   => 'Number',
      'debitoban'  => 'Number',
      'endosable'  => 'Number',
      'comentario' => 'Text',
      'usuario'    => 'Text',
      'nodo'       => 'Text',
      'fechaini'   => 'Date',
      'anulado'    => 'Number',
      'id'         => 'Text',
      'tranferido' => 'Number',
      'status'     => 'Number',
      'impreso'    => 'Number',
      'referencia' => 'Text',
      'compcont'   => 'Text',
      'agencia'    => 'Text',
      'recibo'     => 'Text',
      'idconcilia' => 'Text',
      'comision'   => 'Number',
      'impuesto'   => 'Number',
      'cuentacont' => 'Text',
    );
  }
}
