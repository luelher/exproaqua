<?php

/**
 * Ahelp form base class.
 *
 * @method Ahelp getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAhelpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigoid'   => new sfWidgetFormInputText(),
      'titulo'     => new sfWidgetFormInputText(),
      'readme'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigoid'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 41, 'required' => false)),
      'readme'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ahelp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ahelp';
  }

}
