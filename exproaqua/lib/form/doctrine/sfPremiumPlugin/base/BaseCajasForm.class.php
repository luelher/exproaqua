<?php

/**
 * Cajas form base class.
 *
 * @method Cajas getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCajasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormInputText(),
      'agencia'     => new sfWidgetFormInputText(),
      'codigocaja'  => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'responsable' => new sfWidgetFormInputText(),
      'moneda'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorString(array('max_length' => 6)),
      'agencia'     => new sfValidatorString(array('max_length' => 3)),
      'codigocaja'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigocaja', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'responsable' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'moneda'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cajas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cajas';
  }

}
