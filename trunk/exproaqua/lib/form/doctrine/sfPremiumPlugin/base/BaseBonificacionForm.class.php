<?php

/**
 * Bonificacion form base class.
 *
 * @method Bonificacion getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBonificacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'monto'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'tipo'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bonificacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bonificacion';
  }

}
