<?php

/**
 * Ctascon filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtasconFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(),
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentacont' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'tipo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentacont' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctascon_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ctascon';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'descrip'    => 'Text',
      'tipo'       => 'Number',
      'cuentacont' => 'Text',
    );
  }
}
