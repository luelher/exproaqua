<?php

/**
 * Comisioncont form base class.
 *
 * @method Comisioncont getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComisioncontForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'solicitant' => new sfWidgetFormInputText(),
      'fechacont'  => new sfWidgetFormDate(),
      'codvend'    => new sfWidgetFormInputText(),
      'tipovend'   => new sfWidgetFormInputText(),
      'nombrecomi' => new sfWidgetFormInputText(),
      'montovend'  => new sfWidgetFormInputText(),
      'tipoagente' => new sfWidgetFormInputText(),
      'nomcomiag'  => new sfWidgetFormInputText(),
      'montoagen'  => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'pago'       => new sfWidgetFormDate(),
      'fechanul'   => new sfWidgetFormDate(),
      'motivo'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'tipo'       => new sfValidatorNumber(array('required' => false)),
      'documento'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'solicitant' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'fechacont'  => new sfValidatorDate(array('required' => false)),
      'codvend'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipovend'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nombrecomi' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'montovend'  => new sfValidatorNumber(array('required' => false)),
      'tipoagente' => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nomcomiag'  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'montoagen'  => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'pago'       => new sfValidatorDate(array('required' => false)),
      'fechanul'   => new sfValidatorDate(array('required' => false)),
      'motivo'     => new sfValidatorString(array('max_length' => 80, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comisioncont[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comisioncont';
  }

}
