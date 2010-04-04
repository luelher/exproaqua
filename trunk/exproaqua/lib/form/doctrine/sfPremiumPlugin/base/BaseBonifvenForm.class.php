<?php

/**
 * Bonifven form base class.
 *
 * @method Bonifven getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBonifvenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'relacion'   => new sfWidgetFormInputText(),
      'vendedor'   => new sfWidgetFormInputHidden(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'documento'  => new sfWidgetFormInputHidden(),
      'codcli'     => new sfWidgetFormInputText(),
      'cliente'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'grupo'      => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'monto'      => new sfWidgetFormInputText(),
      'prccomi'    => new sfWidgetFormInputText(),
      'comision'   => new sfWidgetFormInputText(),
      'fpago'      => new sfWidgetFormDate(),
      'mtopagado'  => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'tipoprecio' => new sfWidgetFormInputText(),
      'seleccion'  => new sfWidgetFormInputText(),
      'id'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'relacion'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'vendedor'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'vendedor', 'required' => false)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'codcli'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cliente'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'prccomi'    => new sfValidatorNumber(array('required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
      'fpago'      => new sfValidatorDate(array('required' => false)),
      'mtopagado'  => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tipoprecio' => new sfValidatorNumber(array('required' => false)),
      'seleccion'  => new sfValidatorNumber(array('required' => false)),
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bonifven[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bonifven';
  }

}
