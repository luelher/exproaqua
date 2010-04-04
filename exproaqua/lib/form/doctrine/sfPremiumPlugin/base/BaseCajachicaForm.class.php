<?php

/**
 * Cajachica form base class.
 *
 * @method Cajachica getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCajachicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputText(),
      'agencia'        => new sfWidgetFormInputText(),
      'codigocaja'     => new sfWidgetFormInputHidden(),
      'codigoconcepto' => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'ingreso'        => new sfWidgetFormInputText(),
      'egreso'         => new sfWidgetFormInputText(),
      'fecha'          => new sfWidgetFormInputHidden(),
      'pid'            => new sfWidgetFormInputHidden(),
      'cerrado'        => new sfWidgetFormInputText(),
      'referencia'     => new sfWidgetFormInputText(),
      'nota'           => new sfWidgetFormTextarea(),
      'horadocum'      => new sfWidgetFormInputText(),
      'ampm'           => new sfWidgetFormInputText(),
      'turno'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorString(array('max_length' => 6)),
      'agencia'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codigocaja'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigocaja', 'required' => false)),
      'codigoconcepto' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoconcepto', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'ingreso'        => new sfValidatorNumber(array('required' => false)),
      'egreso'         => new sfValidatorNumber(array('required' => false)),
      'fecha'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'fecha', 'required' => false)),
      'pid'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'cerrado'        => new sfValidatorNumber(array('required' => false)),
      'referencia'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nota'           => new sfValidatorString(array('required' => false)),
      'horadocum'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'ampm'           => new sfValidatorNumber(array('required' => false)),
      'turno'          => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cajachica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cajachica';
  }

}
