<?php

/**
 * Operclit filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOperclitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'caja'           => new sfWidgetFormFilterInput(),
      'tiporec'        => new sfWidgetFormFilterInput(),
      'referencia'     => new sfWidgetFormFilterInput(),
      'nomcliente'     => new sfWidgetFormFilterInput(),
      'codcli'         => new sfWidgetFormFilterInput(),
      'fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'emifac'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ncredito'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concepto'       => new sfWidgetFormFilterInput(),
      'bcocheqcod'     => new sfWidgetFormFilterInput(),
      'bcocheqnom'     => new sfWidgetFormFilterInput(),
      'bcocheqmto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bcocheqnro'     => new sfWidgetFormFilterInput(),
      'codigotar'      => new sfWidgetFormFilterInput(),
      'bancotar'       => new sfWidgetFormFilterInput(),
      'mtotarjeta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nrotarjeta'     => new sfWidgetFormFilterInput(),
      'efectivo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tardebcod'      => new sfWidgetFormFilterInput(),
      'tardebnom'      => new sfWidgetFormFilterInput(),
      'tardebnum'      => new sfWidgetFormFilterInput(),
      'tardebmto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otrotipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otroreferencia' => new sfWidgetFormFilterInput(),
      'cobrador'       => new sfWidgetFormFilterInput(),
      'prc_comi'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'procedecre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mto_comi'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatusrec'     => new sfWidgetFormFilterInput(),
      'operac'         => new sfWidgetFormFilterInput(),
      'motanul'        => new sfWidgetFormFilterInput(),
      'user_emi'       => new sfWidgetFormFilterInput(),
      'user_anul'      => new sfWidgetFormFilterInput(),
      'fechaanul'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'horadocum'      => new sfWidgetFormFilterInput(),
      'ampm'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porcredito'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno'          => new sfWidgetFormFilterInput(),
      'cortecaja'      => new sfWidgetFormFilterInput(),
      'fechayhora'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'idvalidacion'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'caja'           => new sfValidatorPass(array('required' => false)),
      'tiporec'        => new sfValidatorPass(array('required' => false)),
      'referencia'     => new sfValidatorPass(array('required' => false)),
      'nomcliente'     => new sfValidatorPass(array('required' => false)),
      'codcli'         => new sfValidatorPass(array('required' => false)),
      'fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'emifac'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ncredito'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concepto'       => new sfValidatorPass(array('required' => false)),
      'bcocheqcod'     => new sfValidatorPass(array('required' => false)),
      'bcocheqnom'     => new sfValidatorPass(array('required' => false)),
      'bcocheqmto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bcocheqnro'     => new sfValidatorPass(array('required' => false)),
      'codigotar'      => new sfValidatorPass(array('required' => false)),
      'bancotar'       => new sfValidatorPass(array('required' => false)),
      'mtotarjeta'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nrotarjeta'     => new sfValidatorPass(array('required' => false)),
      'efectivo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tardebcod'      => new sfValidatorPass(array('required' => false)),
      'tardebnom'      => new sfValidatorPass(array('required' => false)),
      'tardebnum'      => new sfValidatorPass(array('required' => false)),
      'tardebmto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'otrotipo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'otroreferencia' => new sfValidatorPass(array('required' => false)),
      'cobrador'       => new sfValidatorPass(array('required' => false)),
      'prc_comi'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'procedecre'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mto_comi'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estatusrec'     => new sfValidatorPass(array('required' => false)),
      'operac'         => new sfValidatorPass(array('required' => false)),
      'motanul'        => new sfValidatorPass(array('required' => false)),
      'user_emi'       => new sfValidatorPass(array('required' => false)),
      'user_anul'      => new sfValidatorPass(array('required' => false)),
      'fechaanul'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'horadocum'      => new sfValidatorPass(array('required' => false)),
      'ampm'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porcredito'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'turno'          => new sfValidatorPass(array('required' => false)),
      'cortecaja'      => new sfValidatorPass(array('required' => false)),
      'fechayhora'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'idvalidacion'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('operclit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Operclit';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'caja'           => 'Text',
      'tiporec'        => 'Text',
      'tipodoc'        => 'Text',
      'documento'      => 'Text',
      'referencia'     => 'Text',
      'nomcliente'     => 'Text',
      'codcli'         => 'Text',
      'recibo'         => 'Text',
      'fecha'          => 'Date',
      'emifac'         => 'Date',
      'ncredito'       => 'Number',
      'monto'          => 'Number',
      'concepto'       => 'Text',
      'bcocheqcod'     => 'Text',
      'bcocheqnom'     => 'Text',
      'bcocheqmto'     => 'Number',
      'bcocheqnro'     => 'Text',
      'codigotar'      => 'Text',
      'bancotar'       => 'Text',
      'mtotarjeta'     => 'Number',
      'nrotarjeta'     => 'Text',
      'efectivo'       => 'Number',
      'tardebcod'      => 'Text',
      'tardebnom'      => 'Text',
      'tardebnum'      => 'Text',
      'tardebmto'      => 'Number',
      'otrotipo'       => 'Number',
      'otroreferencia' => 'Text',
      'cobrador'       => 'Text',
      'prc_comi'       => 'Number',
      'procedecre'     => 'Number',
      'mto_comi'       => 'Number',
      'estatusrec'     => 'Text',
      'operac'         => 'Text',
      'motanul'        => 'Text',
      'user_emi'       => 'Text',
      'user_anul'      => 'Text',
      'fechaanul'      => 'Date',
      'horadocum'      => 'Text',
      'ampm'           => 'Number',
      'porcredito'     => 'Number',
      'turno'          => 'Text',
      'cortecaja'      => 'Text',
      'fechayhora'     => 'Date',
      'idvalidacion'   => 'Text',
    );
  }
}
