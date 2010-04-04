<?php

/**
 * Concilia form base class.
 *
 * @method Concilia getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConciliaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'numero'     => new sfWidgetFormInputHidden(),
      'codigoban'  => new sfWidgetFormInputHidden(),
      'nombreban'  => new sfWidgetFormInputText(),
      'mes'        => new sfWidgetFormInputHidden(),
      'concilyear' => new sfWidgetFormInputHidden(),
      'fconcilia'  => new sfWidgetFormInputHidden(),
      'usuario'    => new sfWidgetFormInputText(),
      'nodo'       => new sfWidgetFormInputText(),
      'hora'       => new sfWidgetFormInputText(),
      'mesante'    => new sfWidgetFormInputText(),
      'saldoante'  => new sfWidgetFormInputText(),
      'deposito1'  => new sfWidgetFormInputText(),
      'ndeposito1' => new sfWidgetFormInputText(),
      'notacre1'   => new sfWidgetFormInputText(),
      'nnotacre1'  => new sfWidgetFormInputText(),
      'notadeb1'   => new sfWidgetFormInputText(),
      'nnotadeb1'  => new sfWidgetFormInputText(),
      'cheque1'    => new sfWidgetFormInputText(),
      'ncheque1'   => new sfWidgetFormInputText(),
      'retiro1'    => new sfWidgetFormInputText(),
      'nretiro1'   => new sfWidgetFormInputText(),
      'saldoconci' => new sfWidgetFormInputText(),
      'edocta'     => new sfWidgetFormInputText(),
      'resultado'  => new sfWidgetFormInputText(),
      'deposito2'  => new sfWidgetFormInputText(),
      'ndeposito2' => new sfWidgetFormInputText(),
      'notacre2'   => new sfWidgetFormInputText(),
      'nnotacre2'  => new sfWidgetFormInputText(),
      'notadeb2'   => new sfWidgetFormInputText(),
      'nnotadeb2'  => new sfWidgetFormInputText(),
      'cheque2'    => new sfWidgetFormInputText(),
      'ncheque2'   => new sfWidgetFormInputText(),
      'retiro2'    => new sfWidgetFormInputText(),
      'nretiro2'   => new sfWidgetFormInputText(),
      'saldoenlib' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'numero'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numero', 'required' => false)),
      'codigoban'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoban', 'required' => false)),
      'nombreban'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'mes'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'mes', 'required' => false)),
      'concilyear' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'concilyear', 'required' => false)),
      'fconcilia'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'fconcilia', 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nodo'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'mesante'    => new sfValidatorNumber(array('required' => false)),
      'saldoante'  => new sfValidatorNumber(array('required' => false)),
      'deposito1'  => new sfValidatorNumber(array('required' => false)),
      'ndeposito1' => new sfValidatorNumber(array('required' => false)),
      'notacre1'   => new sfValidatorNumber(array('required' => false)),
      'nnotacre1'  => new sfValidatorNumber(array('required' => false)),
      'notadeb1'   => new sfValidatorNumber(array('required' => false)),
      'nnotadeb1'  => new sfValidatorNumber(array('required' => false)),
      'cheque1'    => new sfValidatorNumber(array('required' => false)),
      'ncheque1'   => new sfValidatorNumber(array('required' => false)),
      'retiro1'    => new sfValidatorNumber(array('required' => false)),
      'nretiro1'   => new sfValidatorNumber(array('required' => false)),
      'saldoconci' => new sfValidatorNumber(array('required' => false)),
      'edocta'     => new sfValidatorNumber(array('required' => false)),
      'resultado'  => new sfValidatorNumber(array('required' => false)),
      'deposito2'  => new sfValidatorNumber(array('required' => false)),
      'ndeposito2' => new sfValidatorNumber(array('required' => false)),
      'notacre2'   => new sfValidatorNumber(array('required' => false)),
      'nnotacre2'  => new sfValidatorNumber(array('required' => false)),
      'notadeb2'   => new sfValidatorNumber(array('required' => false)),
      'nnotadeb2'  => new sfValidatorNumber(array('required' => false)),
      'cheque2'    => new sfValidatorNumber(array('required' => false)),
      'ncheque2'   => new sfValidatorNumber(array('required' => false)),
      'retiro2'    => new sfValidatorNumber(array('required' => false)),
      'nretiro2'   => new sfValidatorNumber(array('required' => false)),
      'saldoenlib' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('concilia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Concilia';
  }

}
