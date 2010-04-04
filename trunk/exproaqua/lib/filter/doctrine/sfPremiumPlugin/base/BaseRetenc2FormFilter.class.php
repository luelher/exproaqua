<?php

/**
 * Retenc2 filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRetenc2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desde_d'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desde_bs'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desde_sus'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desde_por'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraend2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porcent2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'masde_d'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'masde_bs'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'masde_sus'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'masde_por'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'desde_d'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'desde_bs'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'desde_sus'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'desde_por'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sustraend2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porcent2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'masde_d'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'masde_bs'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'masde_sus'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'masde_por'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('retenc2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Retenc2';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'desde_d'    => 'Number',
      'desde_bs'   => 'Number',
      'desde_sus'  => 'Number',
      'desde_por'  => 'Number',
      'sustraend2' => 'Number',
      'porcent2'   => 'Number',
      'masde_d'    => 'Number',
      'masde_bs'   => 'Number',
      'masde_sus'  => 'Number',
      'masde_por'  => 'Number',
    );
  }
}
