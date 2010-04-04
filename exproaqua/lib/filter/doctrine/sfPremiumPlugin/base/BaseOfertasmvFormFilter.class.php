<?php

/**
 * Ofertasmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOfertasmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'            => new sfWidgetFormFilterInput(),
      'subgrupo'           => new sfWidgetFormFilterInput(),
      'tipoprecio'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precioneto_normal'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio_oferta_neto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidadminima'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'canitdadmaxima'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empaque'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grp_precio_normal'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grp_precio_oferta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'         => new sfValidatorPass(array('required' => false)),
      'agencia'            => new sfValidatorPass(array('required' => false)),
      'subgrupo'           => new sfValidatorPass(array('required' => false)),
      'tipoprecio'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precioneto_normal'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio_oferta_neto' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidadminima'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'canitdadmaxima'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'empaque'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'grp_precio_normal'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'grp_precio_oferta'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ofertasmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ofertasmv';
  }

  public function getFields()
  {
    return array(
      'id_empresa'         => 'Text',
      'agencia'            => 'Text',
      'idoferta'           => 'Text',
      'grupo'              => 'Text',
      'subgrupo'           => 'Text',
      'codigoart'          => 'Text',
      'tipoprecio'         => 'Number',
      'precioneto_normal'  => 'Number',
      'precio_oferta_neto' => 'Number',
      'cantidadminima'     => 'Number',
      'canitdadmaxima'     => 'Number',
      'empaque'            => 'Number',
      'grp_precio_normal'  => 'Number',
      'grp_precio_oferta'  => 'Number',
    );
  }
}
