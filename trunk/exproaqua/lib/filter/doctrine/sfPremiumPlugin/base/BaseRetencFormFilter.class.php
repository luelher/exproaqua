<?php

/**
 * Retenc filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRetencFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(),
      'beneficiar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'base'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ret'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraend'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pago'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tabla'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentacon'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'beneficiar' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'base'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ret'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sustraend'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pago'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tabla'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentacon'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('retenc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Retenc';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'descrip'    => 'Text',
      'beneficiar' => 'Number',
      'base'       => 'Number',
      'ret'        => 'Number',
      'sustraend'  => 'Number',
      'pago'       => 'Number',
      'tabla'      => 'Number',
      'cuentacon'  => 'Text',
    );
  }
}
