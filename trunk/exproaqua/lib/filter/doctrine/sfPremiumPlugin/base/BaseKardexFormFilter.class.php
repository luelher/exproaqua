<?php

/**
 * Kardex filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseKardexFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'      => new sfWidgetFormFilterInput(),
      'documento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hora'         => new sfWidgetFormFilterInput(),
      'grupo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concepto'     => new sfWidgetFormFilterInput(),
      'cantidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estacion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'almacen'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sumaresta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emisor'       => new sfWidgetFormFilterInput(),
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'aux1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux3'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_resta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idvalidacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'documento'    => new sfValidatorPass(array('required' => false)),
      'codigo'       => new sfValidatorPass(array('required' => false)),
      'hora'         => new sfValidatorPass(array('required' => false)),
      'grupo'        => new sfValidatorPass(array('required' => false)),
      'origen'       => new sfValidatorPass(array('required' => false)),
      'concepto'     => new sfValidatorPass(array('required' => false)),
      'cantidad'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estacion'     => new sfValidatorPass(array('required' => false)),
      'almacen'      => new sfValidatorPass(array('required' => false)),
      'sumaresta'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'emisor'       => new sfValidatorPass(array('required' => false)),
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'aux1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux3'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_resta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'idvalidacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kardex_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kardex';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'documento'    => 'Text',
      'codigo'       => 'Text',
      'hora'         => 'Text',
      'grupo'        => 'Text',
      'origen'       => 'Text',
      'concepto'     => 'Text',
      'cantidad'     => 'Number',
      'estacion'     => 'Text',
      'almacen'      => 'Text',
      'sumaresta'    => 'Number',
      'emisor'       => 'Text',
      'fecha'        => 'Date',
      'aux1'         => 'Number',
      'aux2'         => 'Number',
      'aux3'         => 'Number',
      'tipo_resta'   => 'Number',
      'idvalidacion' => 'Text',
    );
  }
}
