<?php

/**
 * Devolti form base class.
 *
 * @method Devolti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDevoltiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormInputText(),
      'agencia'           => new sfWidgetFormInputText(),
      'tipodoc'           => new sfWidgetFormInputHidden(),
      'moneda'            => new sfWidgetFormInputText(),
      'documento'         => new sfWidgetFormInputHidden(),
      'codcliente'        => new sfWidgetFormInputHidden(),
      'nombrecli'         => new sfWidgetFormInputText(),
      'contacto'          => new sfWidgetFormInputText(),
      'comprador'         => new sfWidgetFormInputText(),
      'rif'               => new sfWidgetFormInputText(),
      'nit'               => new sfWidgetFormInputText(),
      'direccion'         => new sfWidgetFormInputText(),
      'telefonos'         => new sfWidgetFormInputText(),
      'tipoprecio'        => new sfWidgetFormInputText(),
      'orden'             => new sfWidgetFormInputText(),
      'emision'           => new sfWidgetFormDate(),
      'recepcion'         => new sfWidgetFormDate(),
      'vence'             => new sfWidgetFormDate(),
      'ult_intere'        => new sfWidgetFormDate(),
      'fechacrea'         => new sfWidgetFormDate(),
      'totcosto'          => new sfWidgetFormInputText(),
      'totcomi'           => new sfWidgetFormInputText(),
      'totbruto'          => new sfWidgetFormInputText(),
      'totneto'           => new sfWidgetFormInputText(),
      'totpagos'          => new sfWidgetFormInputText(),
      'totalfinal'        => new sfWidgetFormInputText(),
      'totimpuest'        => new sfWidgetFormInputText(),
      'totdescuen'        => new sfWidgetFormInputText(),
      'impuesto1'         => new sfWidgetFormInputText(),
      'impuesto2'         => new sfWidgetFormInputText(),
      'impuesto3'         => new sfWidgetFormInputText(),
      'impuesto4'         => new sfWidgetFormInputText(),
      'impuesto5'         => new sfWidgetFormInputText(),
      'impuesto6'         => new sfWidgetFormInputText(),
      'recargos'          => new sfWidgetFormInputText(),
      'dsctoend1'         => new sfWidgetFormInputText(),
      'dsctoend2'         => new sfWidgetFormInputText(),
      'dsctolinea'        => new sfWidgetFormInputText(),
      'notas'             => new sfWidgetFormTextarea(),
      'estatusdoc'        => new sfWidgetFormInputText(),
      'ultimopag'         => new sfWidgetFormDate(),
      'diascred'          => new sfWidgetFormInputText(),
      'vendedor'          => new sfWidgetFormInputText(),
      'factorcamb'        => new sfWidgetFormInputText(),
      'multi_div'         => new sfWidgetFormInputText(),
      'factorreferencial' => new sfWidgetFormInputText(),
      'fechanul'          => new sfWidgetFormDate(),
      'uanulador'         => new sfWidgetFormInputText(),
      'uemisor'           => new sfWidgetFormInputText(),
      'estacion'          => new sfWidgetFormInputText(),
      'sinimpuest'        => new sfWidgetFormInputText(),
      'almacen'           => new sfWidgetFormInputText(),
      'sector'            => new sfWidgetFormInputText(),
      'formafis'          => new sfWidgetFormInputText(),
      'al_libro'          => new sfWidgetFormInputText(),
      'codigoret'         => new sfWidgetFormInputText(),
      'retencion'         => new sfWidgetFormInputText(),
      'aux1'              => new sfWidgetFormInputText(),
      'aux2'              => new sfWidgetFormInputText(),
      'aplicadoa'         => new sfWidgetFormInputText(),
      'referencia'        => new sfWidgetFormInputText(),
      'operac'            => new sfWidgetFormInputText(),
      'motanul'           => new sfWidgetFormTextarea(),
      'seimporto'         => new sfWidgetFormInputText(),
      'dbcr'              => new sfWidgetFormInputText(),
      'horadocum'         => new sfWidgetFormInputText(),
      'ampm'              => new sfWidgetFormInputText(),
      'tranferido'        => new sfWidgetFormInputText(),
      'procedecre'        => new sfWidgetFormInputText(),
      'entregado'         => new sfWidgetFormInputText(),
      'vuelto'            => new sfWidgetFormInputText(),
      'integrado'         => new sfWidgetFormInputText(),
      'escredito'         => new sfWidgetFormInputText(),
      'seq_nodo'          => new sfWidgetFormInputText(),
      'tipo_nc'           => new sfWidgetFormInputText(),
      'porbackord'        => new sfWidgetFormInputText(),
      'chequedev'         => new sfWidgetFormInputText(),
      'ordentrab'         => new sfWidgetFormInputText(),
      'compcont'          => new sfWidgetFormInputText(),
      'planillaco'        => new sfWidgetFormInputText(),
      'nodoremoto'        => new sfWidgetFormInputText(),
      'turno'             => new sfWidgetFormInputText(),
      'baseimpo1'         => new sfWidgetFormInputText(),
      'baseimpo2'         => new sfWidgetFormInputText(),
      'baseimpo3'         => new sfWidgetFormInputText(),
      'imp_nacional'      => new sfWidgetFormInputText(),
      'imp_producc'       => new sfWidgetFormInputText(),
      'fechayhora'        => new sfWidgetFormDateTime(),
      'idvalidacion'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'agencia'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'moneda'            => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'codcliente'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codcliente', 'required' => false)),
      'nombrecli'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'contacto'          => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'comprador'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rif'               => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'nit'               => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'direccion'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefonos'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tipoprecio'        => new sfValidatorNumber(array('required' => false)),
      'orden'             => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'emision'           => new sfValidatorDate(array('required' => false)),
      'recepcion'         => new sfValidatorDate(array('required' => false)),
      'vence'             => new sfValidatorDate(array('required' => false)),
      'ult_intere'        => new sfValidatorDate(array('required' => false)),
      'fechacrea'         => new sfValidatorDate(array('required' => false)),
      'totcosto'          => new sfValidatorNumber(array('required' => false)),
      'totcomi'           => new sfValidatorNumber(array('required' => false)),
      'totbruto'          => new sfValidatorNumber(array('required' => false)),
      'totneto'           => new sfValidatorNumber(array('required' => false)),
      'totpagos'          => new sfValidatorNumber(array('required' => false)),
      'totalfinal'        => new sfValidatorNumber(array('required' => false)),
      'totimpuest'        => new sfValidatorNumber(array('required' => false)),
      'totdescuen'        => new sfValidatorNumber(array('required' => false)),
      'impuesto1'         => new sfValidatorNumber(array('required' => false)),
      'impuesto2'         => new sfValidatorNumber(array('required' => false)),
      'impuesto3'         => new sfValidatorNumber(array('required' => false)),
      'impuesto4'         => new sfValidatorNumber(array('required' => false)),
      'impuesto5'         => new sfValidatorNumber(array('required' => false)),
      'impuesto6'         => new sfValidatorNumber(array('required' => false)),
      'recargos'          => new sfValidatorNumber(array('required' => false)),
      'dsctoend1'         => new sfValidatorNumber(array('required' => false)),
      'dsctoend2'         => new sfValidatorNumber(array('required' => false)),
      'dsctolinea'        => new sfValidatorNumber(array('required' => false)),
      'notas'             => new sfValidatorString(array('required' => false)),
      'estatusdoc'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'ultimopag'         => new sfValidatorDate(array('required' => false)),
      'diascred'          => new sfValidatorNumber(array('required' => false)),
      'vendedor'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'factorcamb'        => new sfValidatorNumber(array('required' => false)),
      'multi_div'         => new sfValidatorNumber(array('required' => false)),
      'factorreferencial' => new sfValidatorNumber(array('required' => false)),
      'fechanul'          => new sfValidatorDate(array('required' => false)),
      'uanulador'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'uemisor'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'estacion'          => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'sinimpuest'        => new sfValidatorNumber(array('required' => false)),
      'almacen'           => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'sector'            => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'formafis'          => new sfValidatorNumber(array('required' => false)),
      'al_libro'          => new sfValidatorNumber(array('required' => false)),
      'codigoret'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'retencion'         => new sfValidatorNumber(array('required' => false)),
      'aux1'              => new sfValidatorNumber(array('required' => false)),
      'aux2'              => new sfValidatorNumber(array('required' => false)),
      'aplicadoa'         => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'referencia'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'operac'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'motanul'           => new sfValidatorString(array('required' => false)),
      'seimporto'         => new sfValidatorNumber(array('required' => false)),
      'dbcr'              => new sfValidatorNumber(array('required' => false)),
      'horadocum'         => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ampm'              => new sfValidatorNumber(array('required' => false)),
      'tranferido'        => new sfValidatorNumber(array('required' => false)),
      'procedecre'        => new sfValidatorNumber(array('required' => false)),
      'entregado'         => new sfValidatorNumber(array('required' => false)),
      'vuelto'            => new sfValidatorNumber(array('required' => false)),
      'integrado'         => new sfValidatorNumber(array('required' => false)),
      'escredito'         => new sfValidatorNumber(array('required' => false)),
      'seq_nodo'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tipo_nc'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'porbackord'        => new sfValidatorNumber(array('required' => false)),
      'chequedev'         => new sfValidatorNumber(array('required' => false)),
      'ordentrab'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'compcont'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'planillaco'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nodoremoto'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'turno'             => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'baseimpo1'         => new sfValidatorNumber(array('required' => false)),
      'baseimpo2'         => new sfValidatorNumber(array('required' => false)),
      'baseimpo3'         => new sfValidatorNumber(array('required' => false)),
      'imp_nacional'      => new sfValidatorNumber(array('required' => false)),
      'imp_producc'       => new sfValidatorNumber(array('required' => false)),
      'fechayhora'        => new sfValidatorDateTime(array('required' => false)),
      'idvalidacion'      => new sfValidatorString(array('max_length' => 12, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('devolti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Devolti';
  }

}
