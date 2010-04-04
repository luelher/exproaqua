<?php

/**
 * Cargodet filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCargodetFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'        => new sfWidgetFormFilterInput(),
      'status'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ordentrab'      => new sfWidgetFormFilterInput(),
      'nombre'         => new sfWidgetFormFilterInput(),
      'grupo'          => new sfWidgetFormFilterInput(),
      'subgrupo'       => new sfWidgetFormFilterInput(),
      'proceso'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tallas'         => new sfWidgetFormFilterInput(),
      'colores'        => new sfWidgetFormFilterInput(),
      'fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'almacen'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emisor'         => new sfWidgetFormFilterInput(),
      'estacion'       => new sfWidgetFormFilterInput(),
      'usaserial'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seriales'       => new sfWidgetFormFilterInput(),
      'ubicacion'      => new sfWidgetFormFilterInput(),
      'almacenhas'     => new sfWidgetFormFilterInput(),
      'precio'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechanul'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'useranul'       => new sfWidgetFormFilterInput(),
      'motivoanul'     => new sfWidgetFormFilterInput(),
      'lote'           => new sfWidgetFormFilterInput(),
      'costo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costopromfecha' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factor'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorPass(array('required' => false)),
      'agencia'        => new sfValidatorPass(array('required' => false)),
      'status'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ordentrab'      => new sfValidatorPass(array('required' => false)),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'grupo'          => new sfValidatorPass(array('required' => false)),
      'subgrupo'       => new sfValidatorPass(array('required' => false)),
      'proceso'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidad'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tallas'         => new sfValidatorPass(array('required' => false)),
      'colores'        => new sfValidatorPass(array('required' => false)),
      'fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'almacen'        => new sfValidatorPass(array('required' => false)),
      'emisor'         => new sfValidatorPass(array('required' => false)),
      'estacion'       => new sfValidatorPass(array('required' => false)),
      'usaserial'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seriales'       => new sfValidatorPass(array('required' => false)),
      'ubicacion'      => new sfValidatorPass(array('required' => false)),
      'almacenhas'     => new sfValidatorPass(array('required' => false)),
      'precio'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechanul'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'useranul'       => new sfValidatorPass(array('required' => false)),
      'motivoanul'     => new sfValidatorPass(array('required' => false)),
      'lote'           => new sfValidatorPass(array('required' => false)),
      'costo'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costopromfecha' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'factor'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cargodet_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cargodet';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'documento'      => 'Text',
      'status'         => 'Number',
      'ordentrab'      => 'Text',
      'codigo'         => 'Text',
      'idcampo'        => 'Text',
      'nombre'         => 'Text',
      'grupo'          => 'Text',
      'subgrupo'       => 'Text',
      'proceso'        => 'Number',
      'cantidad'       => 'Number',
      'tallas'         => 'Text',
      'colores'        => 'Text',
      'fecha'          => 'Date',
      'almacen'        => 'Text',
      'emisor'         => 'Text',
      'estacion'       => 'Text',
      'usaserial'      => 'Number',
      'seriales'       => 'Text',
      'ubicacion'      => 'Text',
      'almacenhas'     => 'Text',
      'precio'         => 'Number',
      'fechanul'       => 'Date',
      'useranul'       => 'Text',
      'motivoanul'     => 'Text',
      'lote'           => 'Text',
      'costo'          => 'Number',
      'costopromfecha' => 'Number',
      'factor'         => 'Number',
      'tipo'           => 'Number',
    );
  }
}
