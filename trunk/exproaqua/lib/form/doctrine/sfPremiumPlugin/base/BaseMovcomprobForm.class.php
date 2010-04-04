<?php

/**
 * Movcomprob form base class.
 *
 * @method Movcomprob getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMovcomprobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'cuenta'     => new sfWidgetFormInputText(),
      'descr'      => new sfWidgetFormInputText(),
      'debe'       => new sfWidgetFormInputText(),
      'haber'      => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'referencia' => new sfWidgetFormInputText(),
      'cencos'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cuenta'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descr'      => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'debe'       => new sfValidatorNumber(array('required' => false)),
      'haber'      => new sfValidatorNumber(array('required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'referencia' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cencos'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movcomprob[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Movcomprob';
  }

}
