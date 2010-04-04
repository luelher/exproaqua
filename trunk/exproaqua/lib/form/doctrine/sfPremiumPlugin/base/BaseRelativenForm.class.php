<?php

/**
 * Relativen form base class.
 *
 * @method Relativen getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelativenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'relacion'   => new sfWidgetFormInputHidden(),
      'comprobant' => new sfWidgetFormInputHidden(),
      'codigoven'  => new sfWidgetFormInputHidden(),
      'nombreven'  => new sfWidgetFormInputText(),
      'concepto'   => new sfWidgetFormTextarea(),
      'totrel'     => new sfWidgetFormInputText(),
      'cret1'      => new sfWidgetFormInputText(),
      'cret2'      => new sfWidgetFormInputText(),
      'nret1'      => new sfWidgetFormInputText(),
      'nret2'      => new sfWidgetFormInputText(),
      'tret'       => new sfWidgetFormInputText(),
      'tfinal'     => new sfWidgetFormInputText(),
      'statusrel'  => new sfWidgetFormInputText(),
      'fechap'     => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'relacion'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'relacion', 'required' => false)),
      'comprobant' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'comprobant', 'required' => false)),
      'codigoven'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoven', 'required' => false)),
      'nombreven'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'concepto'   => new sfValidatorString(array('required' => false)),
      'totrel'     => new sfValidatorNumber(array('required' => false)),
      'cret1'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cret2'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'nret1'      => new sfValidatorNumber(array('required' => false)),
      'nret2'      => new sfValidatorNumber(array('required' => false)),
      'tret'       => new sfValidatorNumber(array('required' => false)),
      'tfinal'     => new sfValidatorNumber(array('required' => false)),
      'statusrel'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fechap'     => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('relativen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relativen';
  }

}
