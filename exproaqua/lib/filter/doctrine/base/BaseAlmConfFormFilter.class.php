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
      'almmatpri'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MatPri'), 'add_empty' => true)),
      'almpropro'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProPro'), 'add_empty' => true)),
      'almproter'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProTer'), 'add_empty' => true)),
      'usuario'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'condoc'     => new sfWidgetFormFilterInput(),
      'tipent'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEntrada'), 'add_empty' => true)),
      'tipsal'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoSalida'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'almmatpri'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MatPri'), 'column' => 'id_empresa')),
      'almpropro'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProPro'), 'column' => 'id_empresa')),
      'almproter'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProTer'), 'column' => 'id_empresa')),
      'usuario'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'username')),
      'condoc'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipent'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoEntrada'), 'column' => 'codigo')),
      'tipsal'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoSalida'), 'column' => 'codigo')),
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
      'usuario'    => 'ForeignKey',
      'condoc'     => 'Number',
      'tipent'     => 'ForeignKey',
      'tipsal'     => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
