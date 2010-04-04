<?php

/**
 * Turnos form base class.
 *
 * @method Turnos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTurnosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormInputText(),
      'agencia'     => new sfWidgetFormInputText(),
      'codigo'      => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'horadesde'   => new sfWidgetFormInputText(),
      'desdeampm'   => new sfWidgetFormInputText(),
      'horahasta'   => new sfWidgetFormInputText(),
      'hastaampm'   => new sfWidgetFormInputText(),
      'hora24desde' => new sfWidgetFormInputText(),
      'hora24hasta' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorString(array('max_length' => 6)),
      'agencia'     => new sfValidatorString(array('max_length' => 3)),
      'codigo'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'horadesde'   => new sfValidatorNumber(array('required' => false)),
      'desdeampm'   => new sfValidatorNumber(array('required' => false)),
      'horahasta'   => new sfValidatorNumber(array('required' => false)),
      'hastaampm'   => new sfValidatorNumber(array('required' => false)),
      'hora24desde' => new sfValidatorNumber(array('required' => false)),
      'hora24hasta' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('turnos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turnos';
  }

}
