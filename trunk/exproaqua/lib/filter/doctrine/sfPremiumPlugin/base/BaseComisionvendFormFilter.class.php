<?php

/**
 * Comisionvend filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComisionvendFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(),
      'descrip'    => new sfWidgetFormFilterInput(),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('comisionvend_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comisionvend';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tipo'       => 'Text',
      'descrip'    => 'Text',
      'monto'      => 'Number',
    );
  }
}
