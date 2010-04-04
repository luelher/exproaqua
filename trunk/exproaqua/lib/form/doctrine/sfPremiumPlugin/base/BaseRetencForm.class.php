<?php

/**
 * Retenc form base class.
 *
 * @method Retenc getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRetencForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'descrip'    => new sfWidgetFormInputText(),
      'beneficiar' => new sfWidgetFormInputText(),
      'base'       => new sfWidgetFormInputText(),
      'ret'        => new sfWidgetFormInputText(),
      'sustraend'  => new sfWidgetFormInputText(),
      'pago'       => new sfWidgetFormInputText(),
      'tabla'      => new sfWidgetFormInputText(),
      'cuentacon'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'beneficiar' => new sfValidatorNumber(array('required' => false)),
      'base'       => new sfValidatorNumber(array('required' => false)),
      'ret'        => new sfValidatorNumber(array('required' => false)),
      'sustraend'  => new sfValidatorNumber(array('required' => false)),
      'pago'       => new sfValidatorNumber(array('required' => false)),
      'tabla'      => new sfValidatorNumber(array('required' => false)),
      'cuentacon'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('retenc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Retenc';
  }

}
