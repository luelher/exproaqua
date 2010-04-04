<?php

/**
 * Finanmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFinanmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vendedor'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vendedor'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('finanmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Finanmv';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'finan'      => 'Text',
      'cuota'      => 'Text',
      'cliente'    => 'Text',
      'fecha'      => 'Date',
      'monto'      => 'Number',
      'status'     => 'Number',
      'vendedor'   => 'Text',
    );
  }
}
