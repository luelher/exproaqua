<?php

/**
 * OrdProPro filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdProProFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'), 'add_empty' => true)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticuloCompuesto'), 'add_empty' => true)),
      'cantidad'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'resultado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'ordpro_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('OrdPro'), 'column' => 'id')),
      'artcomp'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ArticuloCompuesto'), 'column' => 'codigo')),
      'cantidad'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'resultado'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_pro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdProPro';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'ordpro_id'  => 'ForeignKey',
      'artcomp'    => 'ForeignKey',
      'cantidad'   => 'Number',
      'resultado'  => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
