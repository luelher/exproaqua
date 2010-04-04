<?php

/**
 * Devolmvc form base class.
 *
 * @method Devolmvc getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDevolmvcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputText(),
      'agencia'        => new sfWidgetFormInputText(),
      'tipodoc'        => new sfWidgetFormInputHidden(),
      'documento'      => new sfWidgetFormInputHidden(),
      'ordentrab'      => new sfWidgetFormInputText(),
      'grupo'          => new sfWidgetFormInputText(),
      'subgrupo'       => new sfWidgetFormInputText(),
      'origen'         => new sfWidgetFormInputText(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'codhijo'        => new sfWidgetFormInputText(),
      'pid'            => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'costopromfecha' => new sfWidgetFormInputText(),
      'costounit'      => new sfWidgetFormInputText(),
      'preciounit'     => new sfWidgetFormInputText(),
      'dsctounit'      => new sfWidgetFormInputText(),
      'dsctoprc'       => new sfWidgetFormInputText(),
      'cantidad'       => new sfWidgetFormInputText(),
      'cntdevuelt'     => new sfWidgetFormInputText(),
      'tallas'         => new sfWidgetFormInputText(),
      'colores'        => new sfWidgetFormInputText(),
      'montoneto'      => new sfWidgetFormInputText(),
      'montototal'     => new sfWidgetFormInputText(),
      'almacen'        => new sfWidgetFormInputText(),
      'proveedor'      => new sfWidgetFormInputText(),
      'fechadoc'       => new sfWidgetFormDate(),
      'impuesto1'      => new sfWidgetFormInputText(),
      'impuesto2'      => new sfWidgetFormInputText(),
      'impuesto3'      => new sfWidgetFormInputText(),
      'impuesto4'      => new sfWidgetFormInputText(),
      'impuesto5'      => new sfWidgetFormInputText(),
      'impuesto6'      => new sfWidgetFormInputText(),
      'timpueprc'      => new sfWidgetFormInputText(),
      'impu_mto'       => new sfWidgetFormInputText(),
      'unidad'         => new sfWidgetFormInputText(),
      'cuentacont'     => new sfWidgetFormInputText(),
      'comision'       => new sfWidgetFormInputText(),
      'comisprc'       => new sfWidgetFormInputText(),
      'vendedor'       => new sfWidgetFormInputText(),
      'emisor'         => new sfWidgetFormInputText(),
      'usaserial'      => new sfWidgetFormInputText(),
      'tipoprecio'     => new sfWidgetFormInputText(),
      'agrupado'       => new sfWidgetFormInputText(),
      'seimporto'      => new sfWidgetFormInputText(),
      'desdeimpor'     => new sfWidgetFormInputText(),
      'notas'          => new sfWidgetFormTextarea(),
      'oferta'         => new sfWidgetFormInputText(),
      'compuesto'      => new sfWidgetFormInputText(),
      'usaexist'       => new sfWidgetFormInputText(),
      'marca'          => new sfWidgetFormInputText(),
      'aux1'           => new sfWidgetFormInputText(),
      'estacion'       => new sfWidgetFormInputText(),
      'integrado'      => new sfWidgetFormInputText(),
      'referencia'     => new sfWidgetFormInputText(),
      'factor'         => new sfWidgetFormInputText(),
      'baseimpo1'      => new sfWidgetFormInputText(),
      'baseimpo2'      => new sfWidgetFormInputText(),
      'baseimpo3'      => new sfWidgetFormInputText(),
      'lote'           => new sfWidgetFormInputText(),
      'imp_nacional'   => new sfWidgetFormInputText(),
      'imp_producc'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorString(array('max_length' => 6)),
      'agencia'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'ordentrab'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'grupo'          => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'subgrupo'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'origen'         => new sfValidatorNumber(array('required' => false)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'codhijo'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'pid'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'costopromfecha' => new sfValidatorNumber(array('required' => false)),
      'costounit'      => new sfValidatorNumber(array('required' => false)),
      'preciounit'     => new sfValidatorNumber(array('required' => false)),
      'dsctounit'      => new sfValidatorNumber(array('required' => false)),
      'dsctoprc'       => new sfValidatorNumber(array('required' => false)),
      'cantidad'       => new sfValidatorNumber(array('required' => false)),
      'cntdevuelt'     => new sfValidatorNumber(array('required' => false)),
      'tallas'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'colores'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'montoneto'      => new sfValidatorNumber(array('required' => false)),
      'montototal'     => new sfValidatorNumber(array('required' => false)),
      'almacen'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'proveedor'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'fechadoc'       => new sfValidatorDate(array('required' => false)),
      'impuesto1'      => new sfValidatorNumber(array('required' => false)),
      'impuesto2'      => new sfValidatorNumber(array('required' => false)),
      'impuesto3'      => new sfValidatorNumber(array('required' => false)),
      'impuesto4'      => new sfValidatorNumber(array('required' => false)),
      'impuesto5'      => new sfValidatorNumber(array('required' => false)),
      'impuesto6'      => new sfValidatorNumber(array('required' => false)),
      'timpueprc'      => new sfValidatorNumber(array('required' => false)),
      'impu_mto'       => new sfValidatorNumber(array('required' => false)),
      'unidad'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cuentacont'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'comision'       => new sfValidatorNumber(array('required' => false)),
      'comisprc'       => new sfValidatorNumber(array('required' => false)),
      'vendedor'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'emisor'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'usaserial'      => new sfValidatorNumber(array('required' => false)),
      'tipoprecio'     => new sfValidatorNumber(array('required' => false)),
      'agrupado'       => new sfValidatorNumber(array('required' => false)),
      'seimporto'      => new sfValidatorNumber(array('required' => false)),
      'desdeimpor'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'notas'          => new sfValidatorString(array('required' => false)),
      'oferta'         => new sfValidatorNumber(array('required' => false)),
      'compuesto'      => new sfValidatorNumber(array('required' => false)),
      'usaexist'       => new sfValidatorNumber(array('required' => false)),
      'marca'          => new sfValidatorNumber(array('required' => false)),
      'aux1'           => new sfValidatorNumber(array('required' => false)),
      'estacion'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'integrado'      => new sfValidatorNumber(array('required' => false)),
      'referencia'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'factor'         => new sfValidatorNumber(array('required' => false)),
      'baseimpo1'      => new sfValidatorNumber(array('required' => false)),
      'baseimpo2'      => new sfValidatorNumber(array('required' => false)),
      'baseimpo3'      => new sfValidatorNumber(array('required' => false)),
      'lote'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'imp_nacional'   => new sfValidatorNumber(array('required' => false)),
      'imp_producc'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('devolmvc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Devolmvc';
  }

}
