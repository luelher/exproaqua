<?php

/**
 * Plancob filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePlancobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'cobrador'   => new sfWidgetFormFilterInput(),
      'sector'     => new sfWidgetFormFilterInput(),
      'desde'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hasta'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(),
      'fechacrea'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estacion'   => new sfWidgetFormFilterInput(),
      'montoacob'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totaldocum' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'filtrado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'cobrador'   => new sfValidatorPass(array('required' => false)),
      'sector'     => new sfValidatorPass(array('required' => false)),
      'desde'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hasta'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'fechacrea'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'montoacob'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totaldocum' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'filtrado'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('plancob_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Plancob';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'planilla'   => 'Text',
      'cobrador'   => 'Text',
      'sector'     => 'Text',
      'desde'      => 'Date',
      'hasta'      => 'Date',
      'usuario'    => 'Text',
      'fechacrea'  => 'Date',
      'estacion'   => 'Text',
      'montoacob'  => 'Number',
      'totaldocum' => 'Number',
      'filtrado'   => 'Number',
    );
  }
}
