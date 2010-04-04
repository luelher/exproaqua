<?php

/**
 * Produccionln form base class.
 *
 * @method Produccionln getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProduccionlnForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'grupo'      => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'cantidadu'  => new sfWidgetFormInputText(),
      'cantidadt'  => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cantidadu'  => new sfValidatorNumber(array('required' => false)),
      'cantidadt'  => new sfValidatorNumber(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('produccionln[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Produccionln';
  }

}
