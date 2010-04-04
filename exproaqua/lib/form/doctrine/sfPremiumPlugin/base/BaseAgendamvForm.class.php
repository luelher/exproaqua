<?php

/**
 * Agendamv form base class.
 *
 * @method Agendamv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAgendamvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'confiden'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'confiden'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agendamv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agendamv';
  }

}
