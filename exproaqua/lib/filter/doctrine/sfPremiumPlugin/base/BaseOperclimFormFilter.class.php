<?php

/**
 * Operclim filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOperclimFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tiporec'    => new sfWidgetFormFilterInput(),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tranferido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'procedecre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'integrado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_emi'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'reci_emi'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'almacen'    => new sfWidgetFormFilterInput(),
      'vendedor'   => new sfWidgetFormFilterInput(),
      'cliente'    => new sfWidgetFormFilterInput(),
      'sector'     => new sfWidgetFormFilterInput(),
      'horadocum'  => new sfWidgetFormFilterInput(),
      'ampm'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'caja'       => new sfWidgetFormFilterInput(),
      'statusrec'  => new sfWidgetFormFilterInput(),
      'turno'      => new sfWidgetFormFilterInput(),
      'fechayhora' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'tiporec'    => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tranferido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'procedecre' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'integrado'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_emi'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'reci_emi'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'almacen'    => new sfValidatorPass(array('required' => false)),
      'vendedor'   => new sfValidatorPass(array('required' => false)),
      'cliente'    => new sfValidatorPass(array('required' => false)),
      'sector'     => new sfValidatorPass(array('required' => false)),
      'horadocum'  => new sfValidatorPass(array('required' => false)),
      'ampm'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'caja'       => new sfValidatorPass(array('required' => false)),
      'statusrec'  => new sfValidatorPass(array('required' => false)),
      'turno'      => new sfValidatorPass(array('required' => false)),
      'fechayhora' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('operclim_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Operclim';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tiporec'    => 'Text',
      'recibo'     => 'Text',
      'monto'      => 'Number',
      'tipodoc'    => 'Text',
      'saldo'      => 'Number',
      'documento'  => 'Text',
      'tranferido' => 'Number',
      'procedecre' => 'Number',
      'integrado'  => 'Number',
      'fac_emi'    => 'Date',
      'reci_emi'   => 'Date',
      'almacen'    => 'Text',
      'vendedor'   => 'Text',
      'cliente'    => 'Text',
      'sector'     => 'Text',
      'horadocum'  => 'Text',
      'ampm'       => 'Number',
      'caja'       => 'Text',
      'statusrec'  => 'Text',
      'turno'      => 'Text',
      'fechayhora' => 'Date',
    );
  }
}
