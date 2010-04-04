<?php

/**
 * Concil form base class.
 *
 * @method Concil getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConcilForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codbanco'   => new sfWidgetFormInputHidden(),
      'mes'        => new sfWidgetFormInputHidden(),
      'nmes'       => new sfWidgetFormInputHidden(),
      'saldo'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codbanco'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codbanco', 'required' => false)),
      'mes'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'mes', 'required' => false)),
      'nmes'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nmes', 'required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('concil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Concil';
  }

}
