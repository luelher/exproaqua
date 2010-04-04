<?php

/**
 * Cambio form base class.
 *
 * @method Cambio getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCambioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigomon'  => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'cambio'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigomon'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'cambio'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cambio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cambio';
  }

}
