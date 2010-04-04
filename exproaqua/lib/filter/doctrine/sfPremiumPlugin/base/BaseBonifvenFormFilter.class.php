<?php

/**
 * Bonifven filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBonifvenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relacion'   => new sfWidgetFormFilterInput(),
      'agencia'    => new sfWidgetFormFilterInput(),
      'codcli'     => new sfWidgetFormFilterInput(),
      'cliente'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'grupo'      => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prccomi'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fpago'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'mtopagado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(),
      'tipoprecio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seleccion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'relacion'   => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codcli'     => new sfValidatorPass(array('required' => false)),
      'cliente'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prccomi'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fpago'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'mtopagado'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorPass(array('required' => false)),
      'tipoprecio' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seleccion'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('bonifven_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bonifven';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'relacion'   => 'Text',
      'vendedor'   => 'Text',
      'agencia'    => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'codcli'     => 'Text',
      'cliente'    => 'Text',
      'fecha'      => 'Date',
      'grupo'      => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'monto'      => 'Number',
      'prccomi'    => 'Number',
      'comision'   => 'Number',
      'fpago'      => 'Date',
      'mtopagado'  => 'Number',
      'status'     => 'Text',
      'tipoprecio' => 'Number',
      'seleccion'  => 'Number',
      'id'         => 'Text',
    );
  }
}
