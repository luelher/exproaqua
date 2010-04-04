<?php

/**
 * Ofertasmv form base class.
 *
 * @method Ofertasmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOfertasmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'         => new sfWidgetFormInputText(),
      'agencia'            => new sfWidgetFormInputText(),
      'idoferta'           => new sfWidgetFormInputHidden(),
      'grupo'              => new sfWidgetFormInputHidden(),
      'subgrupo'           => new sfWidgetFormInputText(),
      'codigoart'          => new sfWidgetFormInputHidden(),
      'tipoprecio'         => new sfWidgetFormInputText(),
      'precioneto_normal'  => new sfWidgetFormInputText(),
      'precio_oferta_neto' => new sfWidgetFormInputText(),
      'cantidadminima'     => new sfWidgetFormInputText(),
      'canitdadmaxima'     => new sfWidgetFormInputText(),
      'empaque'            => new sfWidgetFormInputText(),
      'grp_precio_normal'  => new sfWidgetFormInputText(),
      'grp_precio_oferta'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'         => new sfValidatorString(array('max_length' => 6)),
      'agencia'            => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'idoferta'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'idoferta', 'required' => false)),
      'grupo'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grupo', 'required' => false)),
      'subgrupo'           => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'codigoart'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoart', 'required' => false)),
      'tipoprecio'         => new sfValidatorNumber(array('required' => false)),
      'precioneto_normal'  => new sfValidatorNumber(array('required' => false)),
      'precio_oferta_neto' => new sfValidatorNumber(array('required' => false)),
      'cantidadminima'     => new sfValidatorNumber(array('required' => false)),
      'canitdadmaxima'     => new sfValidatorNumber(array('required' => false)),
      'empaque'            => new sfValidatorNumber(array('required' => false)),
      'grp_precio_normal'  => new sfValidatorNumber(array('required' => false)),
      'grp_precio_oferta'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ofertasmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ofertasmv';
  }

}
