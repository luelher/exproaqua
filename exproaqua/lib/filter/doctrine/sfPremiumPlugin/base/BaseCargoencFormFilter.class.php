<?php

/**
 * Cargoenc filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCargoencFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'           => new sfWidgetFormFilterInput(),
      'ordentrab'         => new sfWidgetFormFilterInput(),
      'requisicio'        => new sfWidgetFormFilterInput(),
      'cargado'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'realizador'        => new sfWidgetFormFilterInput(),
      'emisor'            => new sfWidgetFormFilterInput(),
      'motivo'            => new sfWidgetFormFilterInput(),
      'fecha'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estacion'          => new sfWidgetFormFilterInput(),
      'tipoentradasalida' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorPass(array('required' => false)),
      'agencia'           => new sfValidatorPass(array('required' => false)),
      'ordentrab'         => new sfValidatorPass(array('required' => false)),
      'requisicio'        => new sfValidatorPass(array('required' => false)),
      'cargado'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'realizador'        => new sfValidatorPass(array('required' => false)),
      'emisor'            => new sfValidatorPass(array('required' => false)),
      'motivo'            => new sfValidatorPass(array('required' => false)),
      'fecha'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'estacion'          => new sfValidatorPass(array('required' => false)),
      'tipoentradasalida' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cargoenc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cargoenc';
  }

  public function getFields()
  {
    return array(
      'id_empresa'        => 'Text',
      'agencia'           => 'Text',
      'documento'         => 'Text',
      'ordentrab'         => 'Text',
      'requisicio'        => 'Text',
      'cargado'           => 'Number',
      'status'            => 'Number',
      'realizador'        => 'Text',
      'emisor'            => 'Text',
      'motivo'            => 'Text',
      'fecha'             => 'Date',
      'estacion'          => 'Text',
      'tipoentradasalida' => 'Text',
    );
  }
}
