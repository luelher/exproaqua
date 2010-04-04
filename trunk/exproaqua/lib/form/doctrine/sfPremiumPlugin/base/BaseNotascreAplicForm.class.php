<?php

/**
 * NotascreAplic form base class.
 *
 * @method NotascreAplic getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNotascreAplicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'id_empresa'   => new sfWidgetFormInputText(),
      'agencia'      => new sfWidgetFormInputText(),
      'tipodoc'      => new sfWidgetFormInputText(),
      'documento'    => new sfWidgetFormInputText(),
      'fecha_aplic'  => new sfWidgetFormDateTime(),
      'monto_aplic'  => new sfWidgetFormInputText(),
      'id_empresa_h' => new sfWidgetFormInputText(),
      'agencia_h'    => new sfWidgetFormInputText(),
      'tipodoc_h'    => new sfWidgetFormInputText(),
      'documento_h'  => new sfWidgetFormInputText(),
      'recibo'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa'   => new sfValidatorString(array('max_length' => 6)),
      'agencia'      => new sfValidatorString(array('max_length' => 3)),
      'tipodoc'      => new sfValidatorString(array('max_length' => 3)),
      'documento'    => new sfValidatorString(array('max_length' => 8)),
      'fecha_aplic'  => new sfValidatorDateTime(array('required' => false)),
      'monto_aplic'  => new sfValidatorNumber(array('required' => false)),
      'id_empresa_h' => new sfValidatorString(array('max_length' => 6)),
      'agencia_h'    => new sfValidatorString(array('max_length' => 3)),
      'tipodoc_h'    => new sfValidatorString(array('max_length' => 3)),
      'documento_h'  => new sfValidatorString(array('max_length' => 8)),
      'recibo'       => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('notascre_aplic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotascreAplic';
  }

}
