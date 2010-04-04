<?php

/**
 * Deptarjeta form base class.
 *
 * @method Deptarjeta getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDeptarjetaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormInputText(),
      'agencia'     => new sfWidgetFormInputText(),
      'id_enlace'   => new sfWidgetFormInputHidden(),
      'tipotarjeta' => new sfWidgetFormInputHidden(),
      'codtarjeta'  => new sfWidgetFormInputHidden(),
      'monto'       => new sfWidgetFormInputText(),
      'comision'    => new sfWidgetFormInputText(),
      'impuesto'    => new sfWidgetFormInputText(),
      'saldo'       => new sfWidgetFormInputText(),
      'id_interno'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorString(array('max_length' => 6)),
      'agencia'     => new sfValidatorString(array('max_length' => 3)),
      'id_enlace'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_enlace', 'required' => false)),
      'tipotarjeta' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipotarjeta', 'required' => false)),
      'codtarjeta'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codtarjeta', 'required' => false)),
      'monto'       => new sfValidatorNumber(array('required' => false)),
      'comision'    => new sfValidatorNumber(array('required' => false)),
      'impuesto'    => new sfValidatorNumber(array('required' => false)),
      'saldo'       => new sfValidatorNumber(array('required' => false)),
      'id_interno'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_interno', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deptarjeta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deptarjeta';
  }

}
