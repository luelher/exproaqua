<?php

/**
 * Estimaciones filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEstimacionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_ene'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_feb'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_mar'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_abr'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_may'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_jun'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_jul'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_ago'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_sep'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_oct'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_nov'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_dic'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'fac_ene'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_feb'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_mar'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_abr'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_may'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_jun'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_jul'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_ago'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_sep'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_oct'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_nov'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_dic'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('estimaciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estimaciones';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'origen'     => 'Text',
      'codigo'     => 'Text',
      'ano'        => 'Text',
      'fac_ene'    => 'Number',
      'fac_feb'    => 'Number',
      'fac_mar'    => 'Number',
      'fac_abr'    => 'Number',
      'fac_may'    => 'Number',
      'fac_jun'    => 'Number',
      'fac_jul'    => 'Number',
      'fac_ago'    => 'Number',
      'fac_sep'    => 'Number',
      'fac_oct'    => 'Number',
      'fac_nov'    => 'Number',
      'fac_dic'    => 'Number',
    );
  }
}
