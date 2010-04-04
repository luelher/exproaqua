<?php

/**
 * Optsubmenutaller form base class.
 *
 * @method Optsubmenutaller getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOptsubmenutallerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'idcodigo'   => new sfWidgetFormInputText(),
      'orden'      => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'idcodigo'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'orden'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 70, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('optsubmenutaller[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Optsubmenutaller';
  }

}
