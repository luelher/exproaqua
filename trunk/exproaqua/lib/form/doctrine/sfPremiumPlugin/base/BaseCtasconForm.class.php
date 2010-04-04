<?php

/**
 * Ctascon form base class.
 *
 * @method Ctascon getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtasconForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'descrip'    => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'cuentacont' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tipo'       => new sfValidatorNumber(array('required' => false)),
      'cuentacont' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctascon[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ctascon';
  }

}
