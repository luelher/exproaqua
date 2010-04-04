<?php

/**
 * Monedas form base class.
 *
 * @method Monedas getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMonedasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'       => new sfWidgetFormInputText(),
      'agencia'          => new sfWidgetFormInputText(),
      'codigo'           => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormInputText(),
      'sigular'          => new sfWidgetFormInputText(),
      'plural'           => new sfWidgetFormInputText(),
      'simbolo'          => new sfWidgetFormInputText(),
      'tipo'             => new sfWidgetFormInputText(),
      'multi_div'        => new sfWidgetFormInputText(),
      'ultimacotizacion' => new sfWidgetFormInputText(),
      'rutaicono'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'       => new sfValidatorString(array('max_length' => 6)),
      'agencia'          => new sfValidatorString(array('max_length' => 3)),
      'codigo'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'sigular'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'plural'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'simbolo'          => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tipo'             => new sfValidatorNumber(array('required' => false)),
      'multi_div'        => new sfValidatorNumber(array('required' => false)),
      'ultimacotizacion' => new sfValidatorNumber(array('required' => false)),
      'rutaicono'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('monedas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Monedas';
  }

}
