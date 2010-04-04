<?php

/**
 * Articomp filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArticompFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'       => new sfWidgetFormFilterInput(),
      'preciounit'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costounit'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'       => new sfWidgetFormFilterInput(),
      'semodifica'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factor'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notas'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipodotacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'preciounit'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costounit'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidad'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidad'       => new sfValidatorPass(array('required' => false)),
      'semodifica'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'factor'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notas'        => new sfValidatorPass(array('required' => false)),
      'tipodotacion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('articomp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articomp';
  }

  public function getFields()
  {
    return array(
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'compuesto'    => 'Text',
      'grupo'        => 'Text',
      'codigo'       => 'Text',
      'nombre'       => 'Text',
      'preciounit'   => 'Number',
      'costounit'    => 'Number',
      'cantidad'     => 'Number',
      'unidad'       => 'Text',
      'semodifica'   => 'Number',
      'factor'       => 'Number',
      'notas'        => 'Text',
      'tipodotacion' => 'Number',
    );
  }
}
