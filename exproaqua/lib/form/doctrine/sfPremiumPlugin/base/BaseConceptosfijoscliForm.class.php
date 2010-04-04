<?php

/**
 * Conceptosfijoscli form base class.
 *
 * @method Conceptosfijoscli getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConceptosfijoscliForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'    => new sfWidgetFormInputText(),
      'agencia'       => new sfWidgetFormInputText(),
      'codcliente'    => new sfWidgetFormInputHidden(),
      'codigoart'     => new sfWidgetFormInputHidden(),
      'almacen'       => new sfWidgetFormInputText(),
      'cantidad'      => new sfWidgetFormInputText(),
      'aplicamora'    => new sfWidgetFormInputText(),
      'ultimaemision' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'    => new sfValidatorString(array('max_length' => 6)),
      'agencia'       => new sfValidatorString(array('max_length' => 3)),
      'codcliente'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codcliente', 'required' => false)),
      'codigoart'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoart', 'required' => false)),
      'almacen'       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cantidad'      => new sfValidatorNumber(array('required' => false)),
      'aplicamora'    => new sfValidatorNumber(array('required' => false)),
      'ultimaemision' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('conceptosfijoscli[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Conceptosfijoscli';
  }

}
