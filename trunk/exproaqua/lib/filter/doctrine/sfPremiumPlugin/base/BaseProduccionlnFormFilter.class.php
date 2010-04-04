<?php

/**
 * Produccionln filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProduccionlnFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'grupo'      => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'cantidadu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidadt'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'cantidadu'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidadt'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidad'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('produccionln_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Produccionln';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'codigo'     => 'Text',
      'grupo'      => 'Text',
      'nombre'     => 'Text',
      'cantidadu'  => 'Number',
      'cantidadt'  => 'Number',
      'unidad'     => 'Text',
    );
  }
}
