<?php

/**
 * Tipoprov filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipoprovFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'prcretenc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigocont' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'prcretenc'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codigocont' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipoprov_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipoprov';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'prcretenc'  => 'Number',
      'codigocont' => 'Text',
    );
  }
}