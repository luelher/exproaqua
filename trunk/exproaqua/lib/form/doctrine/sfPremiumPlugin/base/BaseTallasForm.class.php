<?php

/**
 * Tallas form base class.
 *
 * @method Tallas getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTallasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'grupo'      => new sfWidgetFormInputHidden(),
      'talla'      => new sfWidgetFormInputHidden(),
      'nomtalla'   => new sfWidgetFormInputText(),
      'marca'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'grupo'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grupo', 'required' => false)),
      'talla'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'talla', 'required' => false)),
      'nomtalla'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'marca'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tallas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tallas';
  }

}
