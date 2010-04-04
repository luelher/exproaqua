<?php

/**
 * Config2 form base class.
 *
 * @method Config2 getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfig2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'id_empresa'         => new sfWidgetFormInputText(),
      'msg_login_sms'      => new sfWidgetFormInputText(),
      'msg_password_sms'   => new sfWidgetFormInputText(),
      'id_despachadors'    => new sfWidgetFormInputText(),
      'id_despachadorp'    => new sfWidgetFormInputText(),
      'decimales_impuesto' => new sfWidgetFormInputText(),
      'redondear_impuesto' => new sfWidgetFormInputText(),
      'actcecom'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa'         => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'msg_login_sms'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'msg_password_sms'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'id_despachadors'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'id_despachadorp'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'decimales_impuesto' => new sfValidatorInteger(array('required' => false)),
      'redondear_impuesto' => new sfValidatorInteger(array('required' => false)),
      'actcecom'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('config2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Config2';
  }

}
