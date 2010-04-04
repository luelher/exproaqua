<?php

/**
 * Colores form base class.
 *
 * @method Colores getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseColoresForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'grupo'      => new sfWidgetFormInputText(),
      'colores'    => new sfWidgetFormInputText(),
      'nomcolor'   => new sfWidgetFormInputText(),
      'marca'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'colores'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nomcolor'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'marca'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('colores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Colores';
  }

}
