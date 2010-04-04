<?php

/**
 * Ordenesreqmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesreqmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'      => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'unidad'     => new sfWidgetFormFilterInput(),
      'cantidad'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cargado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechanul'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'useranul'   => new sfWidgetFormFilterInput(),
      'motivoanul' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'orden'      => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'unidad'     => new sfValidatorPass(array('required' => false)),
      'cantidad'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cargado'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechanul'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'useranul'   => new sfValidatorPass(array('required' => false)),
      'motivoanul' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenesreqmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesreqmv';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'orden'      => 'Text',
      'codigo'     => 'Text',
      'pid'        => 'Text',
      'nombre'     => 'Text',
      'unidad'     => 'Text',
      'cantidad'   => 'Number',
      'cargado'    => 'Number',
      'status'     => 'Number',
      'fechanul'   => 'Date',
      'useranul'   => 'Text',
      'motivoanul' => 'Text',
    );
  }
}
