<?php

/**
 * Formascobros filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFormascobrosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipodoc'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_recibo'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipo_cobro'        => new sfWidgetFormFilterInput(),
      'monto'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codmoneda'         => new sfWidgetFormFilterInput(),
      'muti_div'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cotizacion_moneda' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banco'             => new sfWidgetFormFilterInput(),
      'codigotarjeta'     => new sfWidgetFormFilterInput(),
      'referencia'        => new sfWidgetFormFilterInput(),
      'procedecre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idvalidacion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipodoc'           => new sfValidatorPass(array('required' => false)),
      'documento'         => new sfValidatorPass(array('required' => false)),
      'fecha_recibo'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipo_cobro'        => new sfValidatorPass(array('required' => false)),
      'monto'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codmoneda'         => new sfValidatorPass(array('required' => false)),
      'muti_div'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cotizacion_moneda' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'banco'             => new sfValidatorPass(array('required' => false)),
      'codigotarjeta'     => new sfValidatorPass(array('required' => false)),
      'referencia'        => new sfValidatorPass(array('required' => false)),
      'procedecre'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'idvalidacion'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formascobros_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formascobros';
  }

  public function getFields()
  {
    return array(
      'id_empresa'        => 'Text',
      'agencia'           => 'Text',
      'tipodoc'           => 'Text',
      'documento'         => 'Text',
      'fecha_recibo'      => 'Date',
      'recibo'            => 'Text',
      'tipo_cobro'        => 'Text',
      'monto'             => 'Number',
      'codmoneda'         => 'Text',
      'muti_div'          => 'Number',
      'cotizacion_moneda' => 'Number',
      'banco'             => 'Text',
      'codigotarjeta'     => 'Text',
      'referencia'        => 'Text',
      'procedecre'        => 'Number',
      'idvalidacion'      => 'Text',
    );
  }
}
