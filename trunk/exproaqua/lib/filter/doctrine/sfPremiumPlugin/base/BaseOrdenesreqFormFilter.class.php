<?php

/**
 * Ordenesreq filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesreqFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'despachado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codalmacen' => new sfWidgetFormFilterInput(),
      'nomalmacen' => new sfWidgetFormFilterInput(),
      'codtecnico' => new sfWidgetFormFilterInput(),
      'nomtecnico' => new sfWidgetFormFilterInput(),
      'fechaemis'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'horaemis'   => new sfWidgetFormFilterInput(),
      'fechaentr'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'notas'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'despachado' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codalmacen' => new sfValidatorPass(array('required' => false)),
      'nomalmacen' => new sfValidatorPass(array('required' => false)),
      'codtecnico' => new sfValidatorPass(array('required' => false)),
      'nomtecnico' => new sfValidatorPass(array('required' => false)),
      'fechaemis'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'horaemis'   => new sfValidatorPass(array('required' => false)),
      'fechaentr'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'notas'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenesreq_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesreq';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'orden'      => 'Text',
      'status'     => 'Number',
      'despachado' => 'Number',
      'codalmacen' => 'Text',
      'nomalmacen' => 'Text',
      'codtecnico' => 'Text',
      'nomtecnico' => 'Text',
      'fechaemis'  => 'Date',
      'horaemis'   => 'Text',
      'fechaentr'  => 'Date',
      'notas'      => 'Text',
    );
  }
}
