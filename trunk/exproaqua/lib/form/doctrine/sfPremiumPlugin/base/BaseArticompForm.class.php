<?php

/**
 * Articomp form base class.
 *
 * @method Articomp getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArticompForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormInputText(),
      'agencia'      => new sfWidgetFormInputText(),
      'compuesto'    => new sfWidgetFormInputHidden(),
      'grupo'        => new sfWidgetFormInputHidden(),
      'codigo'       => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'preciounit'   => new sfWidgetFormInputText(),
      'costounit'    => new sfWidgetFormInputText(),
      'cantidad'     => new sfWidgetFormInputText(),
      'unidad'       => new sfWidgetFormInputText(),
      'semodifica'   => new sfWidgetFormInputText(),
      'factor'       => new sfWidgetFormInputText(),
      'notas'        => new sfWidgetFormTextarea(),
      'tipodotacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorString(array('max_length' => 6)),
      'agencia'      => new sfValidatorString(array('max_length' => 3)),
      'compuesto'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'compuesto', 'required' => false)),
      'grupo'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grupo', 'required' => false)),
      'codigo'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'preciounit'   => new sfValidatorNumber(array('required' => false)),
      'costounit'    => new sfValidatorNumber(array('required' => false)),
      'cantidad'     => new sfValidatorNumber(array('required' => false)),
      'unidad'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'semodifica'   => new sfValidatorNumber(array('required' => false)),
      'factor'       => new sfValidatorNumber(array('required' => false)),
      'notas'        => new sfValidatorString(),
      'tipodotacion' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('articomp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articomp';
  }

}
