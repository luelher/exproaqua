<?php

/**
 * Deptarjeta filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDeptarjetaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorPass(array('required' => false)),
      'agencia'     => new sfValidatorPass(array('required' => false)),
      'monto'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('deptarjeta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deptarjeta';
  }

  public function getFields()
  {
    return array(
      'id_empresa'  => 'Text',
      'agencia'     => 'Text',
      'id_enlace'   => 'Text',
      'tipotarjeta' => 'Text',
      'codtarjeta'  => 'Text',
      'monto'       => 'Number',
      'comision'    => 'Number',
      'impuesto'    => 'Number',
      'saldo'       => 'Number',
      'id_interno'  => 'Text',
    );
  }
}
