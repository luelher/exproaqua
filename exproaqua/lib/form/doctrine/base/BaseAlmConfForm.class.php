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
      'almmatpri'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MatPri'), 'add_empty' => false)),
      'almpropro'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProPro'), 'add_empty' => false)),
      'almproter'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProTer'), 'add_empty' => false)),
      'usuario'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => false)),
      'condoc'     => new sfWidgetFormInputText(),
      'tipent'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEntrada'), 'add_empty' => false)),
      'tipsal'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoSalida'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'almmatpri'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MatPri'))),
      'almpropro'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProPro'))),
      'almproter'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProTer'))),
      'usuario'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'))),
      'condoc'     => new sfValidatorInteger(array('required' => false)),
      'tipent'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEntrada'))),
      'tipsal'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoSalida'))),
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
