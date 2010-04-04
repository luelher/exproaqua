<?php

/**
 * Ordenesmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codclien'   => new sfWidgetFormFilterInput(),
      'nomclien'   => new sfWidgetFormFilterInput(),
      'almacen'    => new sfWidgetFormFilterInput(),
      'grupo'      => new sfWidgetFormFilterInput(),
      'subgrupo'   => new sfWidgetFormFilterInput(),
      'usaexist'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'escompuest' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'esagrupado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'eshijo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codhijo'    => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'notas'      => new sfWidgetFormFilterInput(),
      'unidad'     => new sfWidgetFormFilterInput(),
      'costo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipoprecio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciounit' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descunit'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descprc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantsoli'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantpedi'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numreq'     => new sfWidgetFormFilterInput(),
      'cantdesp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantentr'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numdes'     => new sfWidgetFormFilterInput(),
      'montoneto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montoimpu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montototal' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codtecnico' => new sfWidgetFormFilterInput(),
      'nomtecnico' => new sfWidgetFormFilterInput(),
      'impuesto1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto4'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto5'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto6'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uemisor'    => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'clasifica'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codclien'   => new sfValidatorPass(array('required' => false)),
      'nomclien'   => new sfValidatorPass(array('required' => false)),
      'almacen'    => new sfValidatorPass(array('required' => false)),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'subgrupo'   => new sfValidatorPass(array('required' => false)),
      'usaexist'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'escompuest' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'esagrupado' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'eshijo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codhijo'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'notas'      => new sfValidatorPass(array('required' => false)),
      'unidad'     => new sfValidatorPass(array('required' => false)),
      'costo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipoprecio' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciounit' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descunit'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descprc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantsoli'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantpedi'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numreq'     => new sfValidatorPass(array('required' => false)),
      'cantdesp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantentr'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numdes'     => new sfValidatorPass(array('required' => false)),
      'montoneto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montoimpu'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montototal' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codtecnico' => new sfValidatorPass(array('required' => false)),
      'nomtecnico' => new sfValidatorPass(array('required' => false)),
      'impuesto1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto6'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uemisor'    => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'clasifica'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ordenesmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesmv';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'placa'      => 'Text',
      'pid'        => 'Text',
      'codclien'   => 'Text',
      'nomclien'   => 'Text',
      'almacen'    => 'Text',
      'grupo'      => 'Text',
      'subgrupo'   => 'Text',
      'usaexist'   => 'Number',
      'escompuest' => 'Number',
      'esagrupado' => 'Number',
      'eshijo'     => 'Number',
      'codhijo'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'notas'      => 'Text',
      'unidad'     => 'Text',
      'costo'      => 'Number',
      'tipoprecio' => 'Number',
      'preciounit' => 'Number',
      'descunit'   => 'Number',
      'descprc'    => 'Number',
      'cantsoli'   => 'Number',
      'cantpedi'   => 'Number',
      'numreq'     => 'Text',
      'cantdesp'   => 'Number',
      'cantentr'   => 'Number',
      'numdes'     => 'Text',
      'montoneto'  => 'Number',
      'montoimpu'  => 'Number',
      'montototal' => 'Number',
      'codtecnico' => 'Text',
      'nomtecnico' => 'Text',
      'impuesto1'  => 'Number',
      'impuesto2'  => 'Number',
      'impuesto3'  => 'Number',
      'impuesto4'  => 'Number',
      'impuesto5'  => 'Number',
      'impuesto6'  => 'Number',
      'uemisor'    => 'Text',
      'estacion'   => 'Text',
      'clasifica'  => 'Number',
      'preciofin'  => 'Number',
    );
  }
}
