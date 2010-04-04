<?php

/**
 * Otrostipocob form base class.
 *
 * @method Otrostipocob getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOtrostipocobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'      => new sfWidgetFormInputText(),
      'agencia'         => new sfWidgetFormInputText(),
      'tipo'            => new sfWidgetFormInputHidden(),
      'recibo'          => new sfWidgetFormInputHidden(),
      'pid'             => new sfWidgetFormInputHidden(),
      'importeunitario' => new sfWidgetFormInputText(),
      'cantidad'        => new sfWidgetFormInputText(),
      'importetotal'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'      => new sfValidatorString(array('max_length' => 6)),
      'agencia'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipo'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipo', 'required' => false)),
      'recibo'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'pid'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'importeunitario' => new sfValidatorNumber(array('required' => false)),
      'cantidad'        => new sfValidatorNumber(array('required' => false)),
      'importetotal'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('otrostipocob[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Otrostipocob';
  }

}
