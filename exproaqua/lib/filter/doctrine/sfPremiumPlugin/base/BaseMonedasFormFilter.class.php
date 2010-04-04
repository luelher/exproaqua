<?php

/**
 * Monedas filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMonedasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'           => new sfWidgetFormFilterInput(),
      'sigular'          => new sfWidgetFormFilterInput(),
      'plural'           => new sfWidgetFormFilterInput(),
      'simbolo'          => new sfWidgetFormFilterInput(),
      'tipo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multi_div'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultimacotizacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutaicono'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'       => new sfValidatorPass(array('required' => false)),
      'agencia'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'sigular'          => new sfValidatorPass(array('required' => false)),
      'plural'           => new sfValidatorPass(array('required' => false)),
      'simbolo'          => new sfValidatorPass(array('required' => false)),
      'tipo'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'multi_div'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ultimacotizacion' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rutaicono'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('monedas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Monedas';
  }

  public function getFields()
  {
    return array(
      'id_empresa'       => 'Text',
      'agencia'          => 'Text',
      'codigo'           => 'Text',
      'nombre'           => 'Text',
      'sigular'          => 'Text',
      'plural'           => 'Text',
      'simbolo'          => 'Text',
      'tipo'             => 'Number',
      'multi_div'        => 'Number',
      'ultimacotizacion' => 'Number',
      'rutaicono'        => 'Text',
    );
  }
}
