<?php

/**
 * Discomi form base class.
 *
 * @method Discomi getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiscomiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'pid'        => new sfWidgetFormInputHidden(),
      'vendedor'   => new sfWidgetFormInputHidden(),
      'nombvend'   => new sfWidgetFormInputText(),
      'montoneto'  => new sfWidgetFormInputText(),
      'porcentaje' => new sfWidgetFormInputText(),
      'comision'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'pid'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'vendedor'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'vendedor', 'required' => false)),
      'nombvend'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'montoneto'  => new sfValidatorNumber(array('required' => false)),
      'porcentaje' => new sfValidatorNumber(array('required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discomi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discomi';
  }

}
