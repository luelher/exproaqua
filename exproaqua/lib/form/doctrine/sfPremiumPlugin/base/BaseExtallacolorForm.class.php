<?php

/**
 * Extallacolor form base class.
 *
 * @method Extallacolor getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExtallacolorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'grupo'      => new sfWidgetFormInputText(),
      'almacen'    => new sfWidgetFormInputHidden(),
      'tallas'     => new sfWidgetFormInputHidden(),
      'colores'    => new sfWidgetFormInputHidden(),
      'existencia' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'almacen'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'almacen', 'required' => false)),
      'tallas'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tallas', 'required' => false)),
      'colores'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'colores', 'required' => false)),
      'existencia' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('extallacolor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Extallacolor';
  }

}
