<?php

/**
 * Otrostipocob filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOtrostipocobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'         => new sfWidgetFormFilterInput(),
      'importeunitario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'importetotal'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'      => new sfValidatorPass(array('required' => false)),
      'agencia'         => new sfValidatorPass(array('required' => false)),
      'importeunitario' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidad'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'importetotal'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('otrostipocob_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Otrostipocob';
  }

  public function getFields()
  {
    return array(
      'id_empresa'      => 'Text',
      'agencia'         => 'Text',
      'tipo'            => 'Text',
      'recibo'          => 'Text',
      'pid'             => 'Text',
      'importeunitario' => 'Number',
      'cantidad'        => 'Number',
      'importetotal'    => 'Number',
    );
  }
}
