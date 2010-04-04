<?php

/**
 * Pagosmv form base class.
 *
 * @method Pagosmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePagosmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigoprov' => new sfWidgetFormInputHidden(),
      'tipopago'   => new sfWidgetFormInputHidden(),
      'comprobant' => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'documento'  => new sfWidgetFormInputHidden(),
      'monto'      => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigoprov' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoprov', 'required' => false)),
      'tipopago'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipopago', 'required' => false)),
      'comprobant' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagosmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pagosmv';
  }

}
