<?php

/**
 * Mantenmv form base class.
 *
 * @method Mantenmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMantenmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'placa'      => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
      'cant'       => new sfWidgetFormInputText(),
      'fechareq'   => new sfWidgetFormDate(),
      'fechaela'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'placa'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'placa', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cant'       => new sfValidatorNumber(array('required' => false)),
      'fechareq'   => new sfValidatorDate(array('required' => false)),
      'fechaela'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mantenmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mantenmv';
  }

}
