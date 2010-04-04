<?php

/**
 * Planpago form base class.
 *
 * @method Planpago getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePlanpagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'plan'       => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'codprov'    => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'emision'    => new sfWidgetFormDate(),
      'vence'      => new sfWidgetFormDate(),
      'fechaplan'  => new sfWidgetFormDate(),
      'totaldoc'   => new sfWidgetFormInputText(),
      'totpagos'   => new sfWidgetFormInputText(),
      'totalret'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'plan'       => new sfValidatorString(array('max_length' => 8)),
      'tipodoc'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorString(array('max_length' => 8)),
      'codprov'    => new sfValidatorString(array('max_length' => 15)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'emision'    => new sfValidatorDate(array('required' => false)),
      'vence'      => new sfValidatorDate(array('required' => false)),
      'fechaplan'  => new sfValidatorDate(array('required' => false)),
      'totaldoc'   => new sfValidatorNumber(array('required' => false)),
      'totpagos'   => new sfValidatorNumber(array('required' => false)),
      'totalret'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('planpago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Planpago';
  }

}
