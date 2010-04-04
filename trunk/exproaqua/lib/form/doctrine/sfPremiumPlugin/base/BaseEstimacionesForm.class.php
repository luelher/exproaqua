<?php

/**
 * Estimaciones form base class.
 *
 * @method Estimaciones getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEstimacionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'ano'        => new sfWidgetFormInputHidden(),
      'fac_ene'    => new sfWidgetFormInputText(),
      'fac_feb'    => new sfWidgetFormInputText(),
      'fac_mar'    => new sfWidgetFormInputText(),
      'fac_abr'    => new sfWidgetFormInputText(),
      'fac_may'    => new sfWidgetFormInputText(),
      'fac_jun'    => new sfWidgetFormInputText(),
      'fac_jul'    => new sfWidgetFormInputText(),
      'fac_ago'    => new sfWidgetFormInputText(),
      'fac_sep'    => new sfWidgetFormInputText(),
      'fac_oct'    => new sfWidgetFormInputText(),
      'fac_nov'    => new sfWidgetFormInputText(),
      'fac_dic'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'origen'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'origen', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'ano'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ano', 'required' => false)),
      'fac_ene'    => new sfValidatorNumber(array('required' => false)),
      'fac_feb'    => new sfValidatorNumber(array('required' => false)),
      'fac_mar'    => new sfValidatorNumber(array('required' => false)),
      'fac_abr'    => new sfValidatorNumber(array('required' => false)),
      'fac_may'    => new sfValidatorNumber(array('required' => false)),
      'fac_jun'    => new sfValidatorNumber(array('required' => false)),
      'fac_jul'    => new sfValidatorNumber(array('required' => false)),
      'fac_ago'    => new sfValidatorNumber(array('required' => false)),
      'fac_sep'    => new sfValidatorNumber(array('required' => false)),
      'fac_oct'    => new sfValidatorNumber(array('required' => false)),
      'fac_nov'    => new sfValidatorNumber(array('required' => false)),
      'fac_dic'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estimaciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estimaciones';
  }

}
