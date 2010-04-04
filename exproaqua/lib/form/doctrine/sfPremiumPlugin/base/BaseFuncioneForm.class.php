<?php

/**
 * Funcione form base class.
 *
 * @method Funcione getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFuncioneForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'autor'      => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'ultact'     => new sfWidgetFormDate(),
      'coment'     => new sfWidgetFormInputText(),
      'parametr'   => new sfWidgetFormInputText(),
      'docparam'   => new sfWidgetFormInputText(),
      'desarrollo' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'nombre'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'autor'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'ultact'     => new sfValidatorDate(array('required' => false)),
      'coment'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'parametr'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'docparam'   => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'desarrollo' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('funcione[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcione';
  }

}
