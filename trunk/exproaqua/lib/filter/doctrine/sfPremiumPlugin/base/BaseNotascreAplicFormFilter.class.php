<?php

/**
 * NotascreAplic filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNotascreAplicFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipodoc'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_aplic'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'monto_aplic'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_empresa_h' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia_h'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipodoc_h'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento_h'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'recibo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'tipodoc'      => new sfValidatorPass(array('required' => false)),
      'documento'    => new sfValidatorPass(array('required' => false)),
      'fecha_aplic'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'monto_aplic'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'id_empresa_h' => new sfValidatorPass(array('required' => false)),
      'agencia_h'    => new sfValidatorPass(array('required' => false)),
      'tipodoc_h'    => new sfValidatorPass(array('required' => false)),
      'documento_h'  => new sfValidatorPass(array('required' => false)),
      'recibo'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notascre_aplic_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotascreAplic';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'tipodoc'      => 'Text',
      'documento'    => 'Text',
      'fecha_aplic'  => 'Date',
      'monto_aplic'  => 'Number',
      'id_empresa_h' => 'Text',
      'agencia_h'    => 'Text',
      'tipodoc_h'    => 'Text',
      'documento_h'  => 'Text',
      'recibo'       => 'Text',
    );
  }
}
