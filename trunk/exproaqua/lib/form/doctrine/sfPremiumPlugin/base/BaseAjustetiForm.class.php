<?php

/**
 * Ajusteti form base class.
 *
 * @method Ajusteti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAjustetiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputHidden(),
      'agencia'    => new sfWidgetFormInputHidden(),
      'documento'  => new sfWidgetFormInputHidden(),
      'realizador' => new sfWidgetFormInputText(),
      'aprobador'  => new sfWidgetFormInputText(),
      'femision'   => new sfWidgetFormDate(),
      'concepto'   => new sfWidgetFormTextarea(),
      'numart'     => new sfWidgetFormInputText(),
      'tcosto'     => new sfWidgetFormInputText(),
      'tperdida'   => new sfWidgetFormInputText(),
      'tutilidad'  => new sfWidgetFormInputText(),
      'deposito'   => new sfWidgetFormInputText(),
      'grupo'      => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'realizador' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'aprobador'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'femision'   => new sfValidatorDate(array('required' => false)),
      'concepto'   => new sfValidatorString(array('required' => false)),
      'numart'     => new sfValidatorNumber(array('required' => false)),
      'tcosto'     => new sfValidatorNumber(array('required' => false)),
      'tperdida'   => new sfValidatorNumber(array('required' => false)),
      'tutilidad'  => new sfValidatorNumber(array('required' => false)),
      'deposito'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'grupo'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'origen'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ajusteti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ajusteti';
  }

}
