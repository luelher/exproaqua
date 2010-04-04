<?php

/**
 * Opergasm filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOpergasmFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'tiporec'    => new sfWidgetFormFilterInput(),
      'proveedor'  => new sfWidgetFormFilterInput(),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tranferido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentacon'  => new sfWidgetFormFilterInput(),
      'integrado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tiporec'    => new sfValidatorPass(array('required' => false)),
      'proveedor'  => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tranferido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentacon'  => new sfValidatorPass(array('required' => false)),
      'integrado'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('opergasm_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opergasm';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tiporec'    => 'Text',
      'recibo'     => 'Text',
      'proveedor'  => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'monto'      => 'Number',
      'saldo'      => 'Number',
      'tranferido' => 'Number',
      'cuentacon'  => 'Text',
      'integrado'  => 'Number',
    );
  }
}
