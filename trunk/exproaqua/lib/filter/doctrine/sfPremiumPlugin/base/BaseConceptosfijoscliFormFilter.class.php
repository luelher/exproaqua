<?php

/**
 * Conceptosfijoscli filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConceptosfijoscliFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'almacen'       => new sfWidgetFormFilterInput(),
      'cantidad'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aplicamora'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultimaemision' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'    => new sfValidatorPass(array('required' => false)),
      'agencia'       => new sfValidatorPass(array('required' => false)),
      'almacen'       => new sfValidatorPass(array('required' => false)),
      'cantidad'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aplicamora'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ultimaemision' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('conceptosfijoscli_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Conceptosfijoscli';
  }

  public function getFields()
  {
    return array(
      'id_empresa'    => 'Text',
      'agencia'       => 'Text',
      'codcliente'    => 'Text',
      'codigoart'     => 'Text',
      'almacen'       => 'Text',
      'cantidad'      => 'Number',
      'aplicamora'    => 'Number',
      'ultimaemision' => 'Number',
    );
  }
}
