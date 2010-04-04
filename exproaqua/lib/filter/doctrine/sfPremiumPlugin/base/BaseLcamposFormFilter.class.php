<?php

/**
 * Lcampos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLcamposFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'respuesta1' => new sfWidgetFormFilterInput(),
      'respuesta2' => new sfWidgetFormFilterInput(),
      'respuesta3' => new sfWidgetFormFilterInput(),
      'respuesta4' => new sfWidgetFormFilterInput(),
      'respuesta5' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'respuesta1' => new sfValidatorPass(array('required' => false)),
      'respuesta2' => new sfValidatorPass(array('required' => false)),
      'respuesta3' => new sfValidatorPass(array('required' => false)),
      'respuesta4' => new sfValidatorPass(array('required' => false)),
      'respuesta5' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lcampos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lcampos';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'codigo'     => 'Text',
      'pid'        => 'Text',
      'respuesta1' => 'Text',
      'respuesta2' => 'Text',
      'respuesta3' => 'Text',
      'respuesta4' => 'Text',
      'respuesta5' => 'Text',
    );
  }
}
