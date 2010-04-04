<?php

/**
 * Retenc2 form base class.
 *
 * @method Retenc2 getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRetenc2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'desde_d'    => new sfWidgetFormInputText(),
      'desde_bs'   => new sfWidgetFormInputText(),
      'desde_sus'  => new sfWidgetFormInputText(),
      'desde_por'  => new sfWidgetFormInputText(),
      'sustraend2' => new sfWidgetFormInputText(),
      'porcent2'   => new sfWidgetFormInputText(),
      'masde_d'    => new sfWidgetFormInputText(),
      'masde_bs'   => new sfWidgetFormInputText(),
      'masde_sus'  => new sfWidgetFormInputText(),
      'masde_por'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'desde_d'    => new sfValidatorNumber(array('required' => false)),
      'desde_bs'   => new sfValidatorNumber(array('required' => false)),
      'desde_sus'  => new sfValidatorNumber(array('required' => false)),
      'desde_por'  => new sfValidatorNumber(array('required' => false)),
      'sustraend2' => new sfValidatorNumber(array('required' => false)),
      'porcent2'   => new sfValidatorNumber(array('required' => false)),
      'masde_d'    => new sfValidatorNumber(array('required' => false)),
      'masde_bs'   => new sfValidatorNumber(array('required' => false)),
      'masde_sus'  => new sfValidatorNumber(array('required' => false)),
      'masde_por'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('retenc2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Retenc2';
  }

}
