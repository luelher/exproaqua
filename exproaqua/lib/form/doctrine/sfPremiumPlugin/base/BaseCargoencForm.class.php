<?php

/**
 * Cargoenc form base class.
 *
 * @method Cargoenc getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCargoencForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormInputText(),
      'agencia'           => new sfWidgetFormInputText(),
      'documento'         => new sfWidgetFormInputHidden(),
      'ordentrab'         => new sfWidgetFormInputText(),
      'requisicio'        => new sfWidgetFormInputText(),
      'cargado'           => new sfWidgetFormInputText(),
      'status'            => new sfWidgetFormInputText(),
      'realizador'        => new sfWidgetFormInputText(),
      'emisor'            => new sfWidgetFormInputText(),
      'motivo'            => new sfWidgetFormInputText(),
      'fecha'             => new sfWidgetFormDate(),
      'estacion'          => new sfWidgetFormInputText(),
      'tipoentradasalida' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorString(array('max_length' => 6)),
      'agencia'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'ordentrab'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'requisicio'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cargado'           => new sfValidatorNumber(array('required' => false)),
      'status'            => new sfValidatorNumber(array('required' => false)),
      'realizador'        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'emisor'            => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'motivo'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fecha'             => new sfValidatorDate(array('required' => false)),
      'estacion'          => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipoentradasalida' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cargoenc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cargoenc';
  }

}
