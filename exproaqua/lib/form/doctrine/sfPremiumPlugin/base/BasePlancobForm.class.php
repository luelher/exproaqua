<?php

/**
 * Plancob form base class.
 *
 * @method Plancob getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePlancobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'planilla'   => new sfWidgetFormInputHidden(),
      'cobrador'   => new sfWidgetFormInputText(),
      'sector'     => new sfWidgetFormInputText(),
      'desde'      => new sfWidgetFormDate(),
      'hasta'      => new sfWidgetFormDate(),
      'usuario'    => new sfWidgetFormInputText(),
      'fechacrea'  => new sfWidgetFormDate(),
      'estacion'   => new sfWidgetFormInputText(),
      'montoacob'  => new sfWidgetFormInputText(),
      'totaldocum' => new sfWidgetFormInputText(),
      'filtrado'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'planilla'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'planilla', 'required' => false)),
      'cobrador'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'sector'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'desde'      => new sfValidatorDate(array('required' => false)),
      'hasta'      => new sfValidatorDate(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fechacrea'  => new sfValidatorDate(array('required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'montoacob'  => new sfValidatorNumber(array('required' => false)),
      'totaldocum' => new sfValidatorNumber(array('required' => false)),
      'filtrado'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('plancob[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Plancob';
  }

}
