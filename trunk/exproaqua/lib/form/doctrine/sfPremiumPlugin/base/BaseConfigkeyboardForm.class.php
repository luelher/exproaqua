<?php

/**
 * Configkeyboard form base class.
 *
 * @method Configkeyboard getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigkeyboardForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'modo1'      => new sfWidgetFormInputText(),
      'keymodo1'   => new sfWidgetFormInputText(),
      'modo2'      => new sfWidgetFormInputText(),
      'keymodo2'   => new sfWidgetFormInputText(),
      'modo3'      => new sfWidgetFormInputText(),
      'keymodo3'   => new sfWidgetFormInputText(),
      'modo4'      => new sfWidgetFormInputText(),
      'keymodo4'   => new sfWidgetFormInputText(),
      'modo5'      => new sfWidgetFormInputText(),
      'keymodo5'   => new sfWidgetFormInputText(),
      'rack_opc1'  => new sfWidgetFormInputText(),
      'rack_opc2'  => new sfWidgetFormInputText(),
      'rack_opc3'  => new sfWidgetFormInputText(),
      'rack_opc4'  => new sfWidgetFormInputText(),
      'rack_opc5'  => new sfWidgetFormInputText(),
      'rack_opc6'  => new sfWidgetFormInputText(),
      'rack_opc7'  => new sfWidgetFormInputText(),
      'rack_opc8'  => new sfWidgetFormInputText(),
      'rack_opc9'  => new sfWidgetFormInputText(),
      'rack_opc10' => new sfWidgetFormInputText(),
      'rack_opc11' => new sfWidgetFormInputText(),
      'rack_opc12' => new sfWidgetFormInputText(),
      'rack_opc13' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'modo1'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'keymodo1'   => new sfValidatorNumber(array('required' => false)),
      'modo2'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'keymodo2'   => new sfValidatorNumber(array('required' => false)),
      'modo3'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'keymodo3'   => new sfValidatorNumber(array('required' => false)),
      'modo4'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'keymodo4'   => new sfValidatorNumber(array('required' => false)),
      'modo5'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'keymodo5'   => new sfValidatorNumber(array('required' => false)),
      'rack_opc1'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc2'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc3'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc4'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc5'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc6'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc7'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc8'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc9'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc10' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc11' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc12' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'rack_opc13' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configkeyboard[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configkeyboard';
  }

}
