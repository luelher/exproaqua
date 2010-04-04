<?php

/**
 * Serial form base class.
 *
 * @method Serial getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSerialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'serial'     => new sfWidgetFormInputHidden(),
      'almacen'    => new sfWidgetFormInputText(),
      'estatus'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'serial'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'serial', 'required' => false)),
      'almacen'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'estatus'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('serial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Serial';
  }

}
