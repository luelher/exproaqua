<?php

/**
 * Ordenescargas form base class.
 *
 * @method Ordenescargas getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenescargasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'ordentrab'  => new sfWidgetFormInputHidden(),
      'despacho'   => new sfWidgetFormInputText(),
      'realizador' => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'estacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'ordentrab'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ordentrab', 'required' => false)),
      'despacho'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'realizador' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenescargas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenescargas';
  }

}
