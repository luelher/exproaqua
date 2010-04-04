<?php

/**
 * Colores filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseColoresFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupo'      => new sfWidgetFormFilterInput(),
      'colores'    => new sfWidgetFormFilterInput(),
      'nomcolor'   => new sfWidgetFormFilterInput(),
      'marca'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'colores'    => new sfValidatorPass(array('required' => false)),
      'nomcolor'   => new sfValidatorPass(array('required' => false)),
      'marca'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('colores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Colores';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'grupo'      => 'Text',
      'colores'    => 'Text',
      'nomcolor'   => 'Text',
      'marca'      => 'Number',
    );
  }
}
