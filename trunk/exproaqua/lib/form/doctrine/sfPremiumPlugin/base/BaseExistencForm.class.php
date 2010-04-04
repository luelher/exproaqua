<?php

/**
 * Existenc form base class.
 *
 * @method Existenc getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExistencForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'grupo'      => new sfWidgetFormInputText(),
      'almacen'    => new sfWidgetFormInputHidden(),
      'existencia' => new sfWidgetFormInputText(),
      'ubicacion'  => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputText(),
      'fechacrea'  => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'almacen'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'almacen', 'required' => false)),
      'existencia' => new sfValidatorNumber(array('required' => false)),
      'ubicacion'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'documento'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipodoc'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fechacrea'  => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('existenc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Existenc';
  }

}
