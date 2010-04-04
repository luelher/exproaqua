<?php

/**
 * Ordenesmv form base class.
 *
 * @method Ordenesmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'placa'      => new sfWidgetFormInputHidden(),
      'pid'        => new sfWidgetFormInputHidden(),
      'codclien'   => new sfWidgetFormInputText(),
      'nomclien'   => new sfWidgetFormInputText(),
      'almacen'    => new sfWidgetFormInputText(),
      'grupo'      => new sfWidgetFormInputText(),
      'subgrupo'   => new sfWidgetFormInputText(),
      'usaexist'   => new sfWidgetFormInputText(),
      'escompuest' => new sfWidgetFormInputText(),
      'esagrupado' => new sfWidgetFormInputText(),
      'eshijo'     => new sfWidgetFormInputText(),
      'codhijo'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'notas'      => new sfWidgetFormTextarea(),
      'unidad'     => new sfWidgetFormInputText(),
      'costo'      => new sfWidgetFormInputText(),
      'tipoprecio' => new sfWidgetFormInputText(),
      'preciounit' => new sfWidgetFormInputText(),
      'descunit'   => new sfWidgetFormInputText(),
      'descprc'    => new sfWidgetFormInputText(),
      'cantsoli'   => new sfWidgetFormInputText(),
      'cantpedi'   => new sfWidgetFormInputText(),
      'numreq'     => new sfWidgetFormInputText(),
      'cantdesp'   => new sfWidgetFormInputText(),
      'cantentr'   => new sfWidgetFormInputText(),
      'numdes'     => new sfWidgetFormInputText(),
      'montoneto'  => new sfWidgetFormInputText(),
      'montoimpu'  => new sfWidgetFormInputText(),
      'montototal' => new sfWidgetFormInputText(),
      'codtecnico' => new sfWidgetFormInputText(),
      'nomtecnico' => new sfWidgetFormInputText(),
      'impuesto1'  => new sfWidgetFormInputText(),
      'impuesto2'  => new sfWidgetFormInputText(),
      'impuesto3'  => new sfWidgetFormInputText(),
      'impuesto4'  => new sfWidgetFormInputText(),
      'impuesto5'  => new sfWidgetFormInputText(),
      'impuesto6'  => new sfWidgetFormInputText(),
      'uemisor'    => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'clasifica'  => new sfWidgetFormInputText(),
      'preciofin'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'placa'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'placa', 'required' => false)),
      'pid'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'codclien'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomclien'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'almacen'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'subgrupo'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'usaexist'   => new sfValidatorNumber(array('required' => false)),
      'escompuest' => new sfValidatorNumber(array('required' => false)),
      'esagrupado' => new sfValidatorNumber(array('required' => false)),
      'eshijo'     => new sfValidatorNumber(array('required' => false)),
      'codhijo'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'costo'      => new sfValidatorNumber(array('required' => false)),
      'tipoprecio' => new sfValidatorNumber(array('required' => false)),
      'preciounit' => new sfValidatorNumber(array('required' => false)),
      'descunit'   => new sfValidatorNumber(array('required' => false)),
      'descprc'    => new sfValidatorNumber(array('required' => false)),
      'cantsoli'   => new sfValidatorNumber(array('required' => false)),
      'cantpedi'   => new sfValidatorNumber(array('required' => false)),
      'numreq'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cantdesp'   => new sfValidatorNumber(array('required' => false)),
      'cantentr'   => new sfValidatorNumber(array('required' => false)),
      'numdes'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'montoneto'  => new sfValidatorNumber(array('required' => false)),
      'montoimpu'  => new sfValidatorNumber(array('required' => false)),
      'montototal' => new sfValidatorNumber(array('required' => false)),
      'codtecnico' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomtecnico' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'impuesto1'  => new sfValidatorNumber(array('required' => false)),
      'impuesto2'  => new sfValidatorNumber(array('required' => false)),
      'impuesto3'  => new sfValidatorNumber(array('required' => false)),
      'impuesto4'  => new sfValidatorNumber(array('required' => false)),
      'impuesto5'  => new sfValidatorNumber(array('required' => false)),
      'impuesto6'  => new sfValidatorNumber(array('required' => false)),
      'uemisor'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'clasifica'  => new sfValidatorNumber(array('required' => false)),
      'preciofin'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenesmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesmv';
  }

}
