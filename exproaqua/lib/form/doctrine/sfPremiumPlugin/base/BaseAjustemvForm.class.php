<?php

/**
 * Ajustemv form base class.
 *
 * @method Ajustemv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAjustemvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'documento'      => new sfWidgetFormInputHidden(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'id'             => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'costopromfecha' => new sfWidgetFormInputText(),
      'costounit'      => new sfWidgetFormInputText(),
      'exfisica'       => new sfWidgetFormInputText(),
      'exreal'         => new sfWidgetFormInputText(),
      'exdiferenc'     => new sfWidgetFormInputText(),
      'perdida'        => new sfWidgetFormInputText(),
      'utilidad'       => new sfWidgetFormInputText(),
      'lote'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'documento'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'costopromfecha' => new sfValidatorNumber(array('required' => false)),
      'costounit'      => new sfValidatorNumber(array('required' => false)),
      'exfisica'       => new sfValidatorNumber(array('required' => false)),
      'exreal'         => new sfValidatorNumber(array('required' => false)),
      'exdiferenc'     => new sfValidatorNumber(array('required' => false)),
      'perdida'        => new sfValidatorNumber(array('required' => false)),
      'utilidad'       => new sfValidatorNumber(array('required' => false)),
      'lote'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ajustemv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ajustemv';
  }

}
