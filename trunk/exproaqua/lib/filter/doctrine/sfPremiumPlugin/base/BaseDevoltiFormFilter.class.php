<?php

/**
 * Devolti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDevoltiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'           => new sfWidgetFormFilterInput(),
      'moneda'            => new sfWidgetFormFilterInput(),
      'nombrecli'         => new sfWidgetFormFilterInput(),
      'contacto'          => new sfWidgetFormFilterInput(),
      'comprador'         => new sfWidgetFormFilterInput(),
      'rif'               => new sfWidgetFormFilterInput(),
      'nit'               => new sfWidgetFormFilterInput(),
      'direccion'         => new sfWidgetFormFilterInput(),
      'telefonos'         => new sfWidgetFormFilterInput(),
      'tipoprecio'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'             => new sfWidgetFormFilterInput(),
      'emision'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'recepcion'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'vence'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ult_intere'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechacrea'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'totcosto'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totcomi'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totbruto'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totneto'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totpagos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totalfinal'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totimpuest'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totdescuen'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto3'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto4'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto5'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto6'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'recargos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dsctoend1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dsctoend2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dsctolinea'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notas'             => new sfWidgetFormFilterInput(),
      'estatusdoc'        => new sfWidgetFormFilterInput(),
      'ultimopag'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'diascred'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vendedor'          => new sfWidgetFormFilterInput(),
      'factorcamb'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multi_div'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factorreferencial' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechanul'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'uanulador'         => new sfWidgetFormFilterInput(),
      'uemisor'           => new sfWidgetFormFilterInput(),
      'estacion'          => new sfWidgetFormFilterInput(),
      'sinimpuest'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'almacen'           => new sfWidgetFormFilterInput(),
      'sector'            => new sfWidgetFormFilterInput(),
      'formafis'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'al_libro'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigoret'         => new sfWidgetFormFilterInput(),
      'retencion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux1'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux2'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aplicadoa'         => new sfWidgetFormFilterInput(),
      'referencia'        => new sfWidgetFormFilterInput(),
      'operac'            => new sfWidgetFormFilterInput(),
      'motanul'           => new sfWidgetFormFilterInput(),
      'seimporto'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dbcr'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horadocum'         => new sfWidgetFormFilterInput(),
      'ampm'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tranferido'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'procedecre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'entregado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vuelto'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'integrado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'escredito'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seq_nodo'          => new sfWidgetFormFilterInput(),
      'tipo_nc'           => new sfWidgetFormFilterInput(),
      'porbackord'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chequedev'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ordentrab'         => new sfWidgetFormFilterInput(),
      'compcont'          => new sfWidgetFormFilterInput(),
      'planillaco'        => new sfWidgetFormFilterInput(),
      'nodoremoto'        => new sfWidgetFormFilterInput(),
      'turno'             => new sfWidgetFormFilterInput(),
      'baseimpo1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'baseimpo2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'baseimpo3'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imp_nacional'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imp_producc'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechayhora'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'idvalidacion'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorPass(array('required' => false)),
      'agencia'           => new sfValidatorPass(array('required' => false)),
      'moneda'            => new sfValidatorPass(array('required' => false)),
      'nombrecli'         => new sfValidatorPass(array('required' => false)),
      'contacto'          => new sfValidatorPass(array('required' => false)),
      'comprador'         => new sfValidatorPass(array('required' => false)),
      'rif'               => new sfValidatorPass(array('required' => false)),
      'nit'               => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
      'telefonos'         => new sfValidatorPass(array('required' => false)),
      'tipoprecio'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'orden'             => new sfValidatorPass(array('required' => false)),
      'emision'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'recepcion'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vence'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ult_intere'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechacrea'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'totcosto'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totcomi'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totbruto'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totneto'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totpagos'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totalfinal'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totimpuest'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totdescuen'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto3'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto4'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto5'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto6'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'recargos'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dsctoend1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dsctoend2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dsctolinea'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notas'             => new sfValidatorPass(array('required' => false)),
      'estatusdoc'        => new sfValidatorPass(array('required' => false)),
      'ultimopag'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'diascred'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vendedor'          => new sfValidatorPass(array('required' => false)),
      'factorcamb'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'multi_div'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'factorreferencial' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechanul'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'uanulador'         => new sfValidatorPass(array('required' => false)),
      'uemisor'           => new sfValidatorPass(array('required' => false)),
      'estacion'          => new sfValidatorPass(array('required' => false)),
      'sinimpuest'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'almacen'           => new sfValidatorPass(array('required' => false)),
      'sector'            => new sfValidatorPass(array('required' => false)),
      'formafis'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'al_libro'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codigoret'         => new sfValidatorPass(array('required' => false)),
      'retencion'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux1'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux2'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aplicadoa'         => new sfValidatorPass(array('required' => false)),
      'referencia'        => new sfValidatorPass(array('required' => false)),
      'operac'            => new sfValidatorPass(array('required' => false)),
      'motanul'           => new sfValidatorPass(array('required' => false)),
      'seimporto'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dbcr'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'horadocum'         => new sfValidatorPass(array('required' => false)),
      'ampm'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tranferido'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'procedecre'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'entregado'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vuelto'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'integrado'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'escredito'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seq_nodo'          => new sfValidatorPass(array('required' => false)),
      'tipo_nc'           => new sfValidatorPass(array('required' => false)),
      'porbackord'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'chequedev'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ordentrab'         => new sfValidatorPass(array('required' => false)),
      'compcont'          => new sfValidatorPass(array('required' => false)),
      'planillaco'        => new sfValidatorPass(array('required' => false)),
      'nodoremoto'        => new sfValidatorPass(array('required' => false)),
      'turno'             => new sfValidatorPass(array('required' => false)),
      'baseimpo1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'baseimpo2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'baseimpo3'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_nacional'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_producc'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechayhora'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'idvalidacion'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('devolti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Devolti';
  }

  public function getFields()
  {
    return array(
      'id_empresa'        => 'Text',
      'agencia'           => 'Text',
      'tipodoc'           => 'Text',
      'moneda'            => 'Text',
      'documento'         => 'Text',
      'codcliente'        => 'Text',
      'nombrecli'         => 'Text',
      'contacto'          => 'Text',
      'comprador'         => 'Text',
      'rif'               => 'Text',
      'nit'               => 'Text',
      'direccion'         => 'Text',
      'telefonos'         => 'Text',
      'tipoprecio'        => 'Number',
      'orden'             => 'Text',
      'emision'           => 'Date',
      'recepcion'         => 'Date',
      'vence'             => 'Date',
      'ult_intere'        => 'Date',
      'fechacrea'         => 'Date',
      'totcosto'          => 'Number',
      'totcomi'           => 'Number',
      'totbruto'          => 'Number',
      'totneto'           => 'Number',
      'totpagos'          => 'Number',
      'totalfinal'        => 'Number',
      'totimpuest'        => 'Number',
      'totdescuen'        => 'Number',
      'impuesto1'         => 'Number',
      'impuesto2'         => 'Number',
      'impuesto3'         => 'Number',
      'impuesto4'         => 'Number',
      'impuesto5'         => 'Number',
      'impuesto6'         => 'Number',
      'recargos'          => 'Number',
      'dsctoend1'         => 'Number',
      'dsctoend2'         => 'Number',
      'dsctolinea'        => 'Number',
      'notas'             => 'Text',
      'estatusdoc'        => 'Text',
      'ultimopag'         => 'Date',
      'diascred'          => 'Number',
      'vendedor'          => 'Text',
      'factorcamb'        => 'Number',
      'multi_div'         => 'Number',
      'factorreferencial' => 'Number',
      'fechanul'          => 'Date',
      'uanulador'         => 'Text',
      'uemisor'           => 'Text',
      'estacion'          => 'Text',
      'sinimpuest'        => 'Number',
      'almacen'           => 'Text',
      'sector'            => 'Text',
      'formafis'          => 'Number',
      'al_libro'          => 'Number',
      'codigoret'         => 'Text',
      'retencion'         => 'Number',
      'aux1'              => 'Number',
      'aux2'              => 'Number',
      'aplicadoa'         => 'Text',
      'referencia'        => 'Text',
      'operac'            => 'Text',
      'motanul'           => 'Text',
      'seimporto'         => 'Number',
      'dbcr'              => 'Number',
      'horadocum'         => 'Text',
      'ampm'              => 'Number',
      'tranferido'        => 'Number',
      'procedecre'        => 'Number',
      'entregado'         => 'Number',
      'vuelto'            => 'Number',
      'integrado'         => 'Number',
      'escredito'         => 'Number',
      'seq_nodo'          => 'Text',
      'tipo_nc'           => 'Text',
      'porbackord'        => 'Number',
      'chequedev'         => 'Number',
      'ordentrab'         => 'Text',
      'compcont'          => 'Text',
      'planillaco'        => 'Text',
      'nodoremoto'        => 'Text',
      'turno'             => 'Text',
      'baseimpo1'         => 'Number',
      'baseimpo2'         => 'Number',
      'baseimpo3'         => 'Number',
      'imp_nacional'      => 'Number',
      'imp_producc'       => 'Number',
      'fechayhora'        => 'Date',
      'idvalidacion'      => 'Text',
    );
  }
}
