<?php

/**
 * AlmConf filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlmConfFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'almmatpri'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_1'), 'add_empty' => true)),
      'almpropro'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_2'), 'add_empty' => true)),
      'almproter'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_3'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'almmatpri'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacene_1'), 'column' => 'id_empresa')),
      'almpropro'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacene_2'), 'column' => 'id_empresa')),
      'almproter'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacene_3'), 'column' => 'id_empresa')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('alm_conf_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlmConf';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'almmatpri'  => 'ForeignKey',
      'almpropro'  => 'ForeignKey',
      'almproter'  => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
