<?php

/**
 * Planpago filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePlanpagoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'plan'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipodoc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codprov'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'emision'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'vence'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaplan'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'totaldoc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totpagos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totalret'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'plan'       => new sfValidatorPass(array('required' => false)),
      'tipodoc'    => new sfValidatorPass(array('required' => false)),
      'documento'  => new sfValidatorPass(array('required' => false)),
      'codprov'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'emision'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vence'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechaplan'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'totaldoc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totpagos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totalret'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('planpago_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Planpago';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'plan'       => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'codprov'    => 'Text',
      'nombre'     => 'Text',
      'emision'    => 'Date',
      'vence'      => 'Date',
      'fechaplan'  => 'Date',
      'totaldoc'   => 'Number',
      'totpagos'   => 'Number',
      'totalret'   => 'Number',
    );
  }
}
