<?php

/**
 * Ecampos form base class.
 *
 * @method Ecampos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEcamposForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'documento'  => new sfWidgetFormInputHidden(),
      'respuesta1' => new sfWidgetFormInputText(),
      'respuesta2' => new sfWidgetFormInputText(),
      'respuesta3' => new sfWidgetFormInputText(),
      'respuesta4' => new sfWidgetFormInputText(),
      'respuesta5' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'respuesta1' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'respuesta2' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'respuesta3' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'respuesta4' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'respuesta5' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ecampos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ecampos';
  }

}
