<?php

/**
 * Ordenesreqmv form base class.
 *
 * @method Ordenesreqmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesreqmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'orden'      => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'pid'        => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
      'cantidad'   => new sfWidgetFormInputText(),
      'cargado'    => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'fechanul'   => new sfWidgetFormDate(),
      'useranul'   => new sfWidgetFormInputText(),
      'motivoanul' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'orden'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'pid'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cantidad'   => new sfValidatorNumber(array('required' => false)),
      'cargado'    => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'fechanul'   => new sfValidatorDate(array('required' => false)),
      'useranul'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'motivoanul' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenesreqmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesreqmv';
  }

}
