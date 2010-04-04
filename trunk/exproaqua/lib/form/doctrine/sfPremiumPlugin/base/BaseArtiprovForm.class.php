<?php

/**
 * Artiprov form base class.
 *
 * @method Artiprov getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArtiprovForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'proveedor'  => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'costonac'   => new sfWidgetFormInputText(),
      'costoex'    => new sfWidgetFormInputText(),
      'fechalista' => new sfWidgetFormDate(),
      'referencia' => new sfWidgetFormInputText(),
      'marca'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'proveedor'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'proveedor', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'costonac'   => new sfValidatorNumber(array('required' => false)),
      'costoex'    => new sfValidatorNumber(array('required' => false)),
      'fechalista' => new sfValidatorDate(array('required' => false)),
      'referencia' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'marca'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artiprov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artiprov';
  }

}
