<?php

/**
 * Finanmv form base class.
 *
 * @method Finanmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFinanmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'finan'      => new sfWidgetFormInputHidden(),
      'cuota'      => new sfWidgetFormInputHidden(),
      'cliente'    => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDate(),
      'monto'      => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'vendedor'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'finan'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'finan', 'required' => false)),
      'cuota'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cuota', 'required' => false)),
      'cliente'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cliente', 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'vendedor'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('finanmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Finanmv';
  }

}
