<?php

/**
 * Almacene form base class.
 *
 * @method Almacene getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAlmaceneForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputHidden(),
      'agencia'    => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'activo'     => new sfWidgetFormInputText(),
      'encargado'  => new sfWidgetFormInputText(),
      'location'   => new sfWidgetFormInputText(),
      'aux1'       => new sfWidgetFormInputText(),
      'servicio'   => new sfWidgetFormInputText(),
      'rma'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'activo'     => new sfValidatorNumber(array('required' => false)),
      'encargado'  => new sfValidatorString(array('max_length' => 38, 'required' => false)),
      'location'   => new sfValidatorString(array('max_length' => 38, 'required' => false)),
      'aux1'       => new sfValidatorNumber(array('required' => false)),
      'servicio'   => new sfValidatorNumber(array('required' => false)),
      'rma'        => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('almacene[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Almacene';
  }

}
