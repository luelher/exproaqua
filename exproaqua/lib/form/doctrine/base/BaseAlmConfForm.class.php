<?php

/**
 * AlmConf form base class.
 *
 * @method AlmConf getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlmConfForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'almmatpri'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_1'), 'add_empty' => false)),
      'almpropro'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_2'), 'add_empty' => false)),
      'almproter'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_3'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'almmatpri'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_1'))),
      'almpropro'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_2'))),
      'almproter'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacene_3'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('alm_conf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlmConf';
  }

}
