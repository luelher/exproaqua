<?php

/**
 * Almacene filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlmaceneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(),
      'activo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'encargado'  => new sfWidgetFormFilterInput(),
      'location'   => new sfWidgetFormFilterInput(),
      'aux1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'servicio'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rma'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'activo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'encargado'  => new sfValidatorPass(array('required' => false)),
      'location'   => new sfValidatorPass(array('required' => false)),
      'aux1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'servicio'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rma'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('almacene_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Almacene';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'activo'     => 'Number',
      'encargado'  => 'Text',
      'location'   => 'Text',
      'aux1'       => 'Number',
      'servicio'   => 'Number',
      'rma'        => 'Number',
    );
  }
}
