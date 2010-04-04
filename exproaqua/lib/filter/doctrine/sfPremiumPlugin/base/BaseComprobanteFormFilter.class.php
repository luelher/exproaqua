<?php

/**
 * Comprobante filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComprobanteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo'     => new sfWidgetFormFilterInput(),
      'descr'      => new sfWidgetFormFilterInput(),
      'debe'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'haber'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuadra'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mes'        => new sfWidgetFormFilterInput(),
      'nmes'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ano'        => new sfWidgetFormFilterInput(),
      'moneda'     => new sfWidgetFormFilterInput(),
      'tasa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contab'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(),
      'hora'       => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'cusuario'   => new sfWidgetFormFilterInput(),
      'chora'      => new sfWidgetFormFilterInput(),
      'cestacion'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'descr'      => new sfValidatorPass(array('required' => false)),
      'debe'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'haber'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuadra'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mes'        => new sfValidatorPass(array('required' => false)),
      'nmes'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ano'        => new sfValidatorPass(array('required' => false)),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'contab'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'hora'       => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'cusuario'   => new sfValidatorPass(array('required' => false)),
      'chora'      => new sfValidatorPass(array('required' => false)),
      'cestacion'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comprobante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comprobante';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'descr'      => 'Text',
      'debe'       => 'Number',
      'haber'      => 'Number',
      'saldo'      => 'Number',
      'cuadra'     => 'Number',
      'mes'        => 'Text',
      'nmes'       => 'Number',
      'ano'        => 'Text',
      'moneda'     => 'Text',
      'tasa'       => 'Number',
      'contab'     => 'Number',
      'usuario'    => 'Text',
      'hora'       => 'Text',
      'estacion'   => 'Text',
      'cusuario'   => 'Text',
      'chora'      => 'Text',
      'cestacion'  => 'Text',
    );
  }
}
