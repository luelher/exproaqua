<?php

/**
 * Produccion form base class.
 *
 * @method Produccion getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProduccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDate(),
      'codigoi'    => new sfWidgetFormInputText(),
      'nombrei'    => new sfWidgetFormInputText(),
      'codigop'    => new sfWidgetFormInputText(),
      'nombrep'    => new sfWidgetFormInputText(),
      'cantidadp'  => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
      'depositoo'  => new sfWidgetFormInputText(),
      'depositor'  => new sfWidgetFormInputText(),
      'depositod'  => new sfWidgetFormInputText(),
      'realizador' => new sfWidgetFormInputText(),
      'responsab'  => new sfWidgetFormInputText(),
      'concepto'   => new sfWidgetFormInputText(),
      'prioridad'  => new sfWidgetFormInputText(),
      'lote'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'codigoi'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nombrei'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'codigop'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nombrep'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cantidadp'  => new sfValidatorNumber(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'depositoo'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'depositor'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'depositod'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'realizador' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'responsab'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'concepto'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'prioridad'  => new sfValidatorNumber(array('required' => false)),
      'lote'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('produccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Produccion';
  }

}
