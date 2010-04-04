<?php

/**
 * Tranuser form base class.
 *
 * @method Tranuser getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTranuserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'clave'      => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'operacion'  => new sfWidgetFormTextarea(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'clave'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'operacion'  => new sfValidatorString(array('required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tranuser[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tranuser';
  }

}
