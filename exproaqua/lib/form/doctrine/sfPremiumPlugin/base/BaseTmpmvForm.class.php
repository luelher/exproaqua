<?php

/**
 * Tmpmv form base class.
 *
 * @method Tmpmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'grupo'      => new sfWidgetFormInputText(),
      'subgrupo'   => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'codhijo'    => new sfWidgetFormInputText(),
      'pid'        => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'costounit'  => new sfWidgetFormInputText(),
      'preciounit' => new sfWidgetFormInputText(),
      'diferencia' => new sfWidgetFormInputText(),
      'dsctounit'  => new sfWidgetFormInputText(),
      'dsctoprc'   => new sfWidgetFormInputText(),
      'dsctoendm'  => new sfWidgetFormInputText(),
      'dsctoendp'  => new sfWidgetFormInputText(),
      'preciofin'  => new sfWidgetFormInputText(),
      'prcrecargo' => new sfWidgetFormInputText(),
      'recargouni' => new sfWidgetFormInputText(),
      'precioorig' => new sfWidgetFormInputText(),
      'cantidad'   => new sfWidgetFormInputText(),
      'cntdevuelt' => new sfWidgetFormInputText(),
      'cntentrega' => new sfWidgetFormInputText(),
      'tallas'     => new sfWidgetFormInputText(),
      'colores'    => new sfWidgetFormInputText(),
      'montoneto'  => new sfWidgetFormInputText(),
      'montototal' => new sfWidgetFormInputText(),
      'almacen'    => new sfWidgetFormInputText(),
      'proveedor'  => new sfWidgetFormInputText(),
      'fechadoc'   => new sfWidgetFormDate(),
      'impuesto1'  => new sfWidgetFormInputText(),
      'impuesto2'  => new sfWidgetFormInputText(),
      'impuesto3'  => new sfWidgetFormInputText(),
      'impuesto4'  => new sfWidgetFormInputText(),
      'impuesto5'  => new sfWidgetFormInputText(),
      'impuesto6'  => new sfWidgetFormInputText(),
      'timpueprc'  => new sfWidgetFormInputText(),
      'impu_mto'   => new sfWidgetFormInputText(),
      'comision'   => new sfWidgetFormInputText(),
      'comisprc'   => new sfWidgetFormInputText(),
      'vendedor'   => new sfWidgetFormInputText(),
      'emisor'     => new sfWidgetFormInputText(),
      'usaserial'  => new sfWidgetFormInputText(),
      'tipoprecio' => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
      'agrupado'   => new sfWidgetFormInputText(),
      'cntagrupad' => new sfWidgetFormInputText(),
      'seimporto'  => new sfWidgetFormInputText(),
      'desdeimpor' => new sfWidgetFormInputText(),
      'notas'      => new sfWidgetFormTextarea(),
      'oferta'     => new sfWidgetFormInputText(),
      'compuesto'  => new sfWidgetFormInputText(),
      'usaexist'   => new sfWidgetFormInputText(),
      'marca'      => new sfWidgetFormInputText(),
      'aux1'       => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'clasifica'  => new sfWidgetFormInputText(),
      'cuentacont' => new sfWidgetFormInputText(),
      'placa'      => new sfWidgetFormInputText(),
      'udinamica'  => new sfWidgetFormInputText(),
      'cantref'    => new sfWidgetFormInputText(),
      'unidadref'  => new sfWidgetFormInputText(),
      'baseimpo1'  => new sfWidgetFormInputText(),
      'baseimpo2'  => new sfWidgetFormInputText(),
      'baseimpo3'  => new sfWidgetFormInputText(),
      'lote'       => new sfWidgetFormInputText(),
      'imp_nacion' => new sfWidgetFormInputText(),
      'imp_produc' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'subgrupo'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'origen'     => new sfValidatorNumber(array('required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'codhijo'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'pid'        => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'costounit'  => new sfValidatorNumber(array('required' => false)),
      'preciounit' => new sfValidatorNumber(array('required' => false)),
      'diferencia' => new sfValidatorNumber(array('required' => false)),
      'dsctounit'  => new sfValidatorNumber(array('required' => false)),
      'dsctoprc'   => new sfValidatorNumber(array('required' => false)),
      'dsctoendm'  => new sfValidatorNumber(array('required' => false)),
      'dsctoendp'  => new sfValidatorNumber(array('required' => false)),
      'preciofin'  => new sfValidatorNumber(array('required' => false)),
      'prcrecargo' => new sfValidatorNumber(array('required' => false)),
      'recargouni' => new sfValidatorNumber(array('required' => false)),
      'precioorig' => new sfValidatorNumber(array('required' => false)),
      'cantidad'   => new sfValidatorNumber(array('required' => false)),
      'cntdevuelt' => new sfValidatorNumber(array('required' => false)),
      'cntentrega' => new sfValidatorNumber(array('required' => false)),
      'tallas'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'colores'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'montoneto'  => new sfValidatorNumber(array('required' => false)),
      'montototal' => new sfValidatorNumber(array('required' => false)),
      'almacen'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'proveedor'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'fechadoc'   => new sfValidatorDate(array('required' => false)),
      'impuesto1'  => new sfValidatorNumber(array('required' => false)),
      'impuesto2'  => new sfValidatorNumber(array('required' => false)),
      'impuesto3'  => new sfValidatorNumber(array('required' => false)),
      'impuesto4'  => new sfValidatorNumber(array('required' => false)),
      'impuesto5'  => new sfValidatorNumber(array('required' => false)),
      'impuesto6'  => new sfValidatorNumber(array('required' => false)),
      'timpueprc'  => new sfValidatorNumber(array('required' => false)),
      'impu_mto'   => new sfValidatorNumber(array('required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
      'comisprc'   => new sfValidatorNumber(array('required' => false)),
      'vendedor'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'emisor'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'usaserial'  => new sfValidatorNumber(array('required' => false)),
      'tipoprecio' => new sfValidatorNumber(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'agrupado'   => new sfValidatorNumber(array('required' => false)),
      'cntagrupad' => new sfValidatorNumber(array('required' => false)),
      'seimporto'  => new sfValidatorNumber(array('required' => false)),
      'desdeimpor' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
      'oferta'     => new sfValidatorNumber(array('required' => false)),
      'compuesto'  => new sfValidatorNumber(array('required' => false)),
      'usaexist'   => new sfValidatorNumber(array('required' => false)),
      'marca'      => new sfValidatorNumber(array('required' => false)),
      'aux1'       => new sfValidatorNumber(array('required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'clasifica'  => new sfValidatorNumber(array('required' => false)),
      'cuentacont' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'placa'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'udinamica'  => new sfValidatorNumber(array('required' => false)),
      'cantref'    => new sfValidatorNumber(array('required' => false)),
      'unidadref'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'baseimpo1'  => new sfValidatorNumber(array('required' => false)),
      'baseimpo2'  => new sfValidatorNumber(array('required' => false)),
      'baseimpo3'  => new sfValidatorNumber(array('required' => false)),
      'lote'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'imp_nacion' => new sfValidatorNumber(array('required' => false)),
      'imp_produc' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmpmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tmpmv';
  }

}
