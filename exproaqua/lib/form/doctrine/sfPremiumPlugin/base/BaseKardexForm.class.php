<?php

/**
 * Kardex form base class.
 *
 * @method Kardex getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseKardexForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'id_empresa'   => new sfWidgetFormInputText(),
      'agencia'      => new sfWidgetFormInputText(),
      'documento'    => new sfWidgetFormInputText(),
      'codigo'       => new sfWidgetFormInputText(),
      'hora'         => new sfWidgetFormInputText(),
      'grupo'        => new sfWidgetFormInputText(),
      'origen'       => new sfWidgetFormInputText(),
      'concepto'     => new sfWidgetFormInputText(),
      'cantidad'     => new sfWidgetFormInputText(),
      'estacion'     => new sfWidgetFormInputText(),
      'almacen'      => new sfWidgetFormInputText(),
      'sumaresta'    => new sfWidgetFormInputText(),
      'emisor'       => new sfWidgetFormInputText(),
      'fecha'        => new sfWidgetFormDate(),
      'aux1'         => new sfWidgetFormInputText(),
      'aux2'         => new sfWidgetFormInputText(),
      'aux3'         => new sfWidgetFormInputText(),
      'tipo_resta'   => new sfWidgetFormInputText(),
      'idvalidacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa'   => new sfValidatorString(array('max_length' => 6)),
      'agencia'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'    => new sfValidatorString(array('max_length' => 8)),
      'codigo'       => new sfValidatorString(array('max_length' => 25)),
      'hora'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'grupo'        => new sfValidatorString(array('max_length' => 6)),
      'origen'       => new sfValidatorString(array('max_length' => 3)),
      'concepto'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cantidad'     => new sfValidatorNumber(array('required' => false)),
      'estacion'     => new sfValidatorString(array('max_length' => 3)),
      'almacen'      => new sfValidatorString(array('max_length' => 2)),
      'sumaresta'    => new sfValidatorNumber(array('required' => false)),
      'emisor'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fecha'        => new sfValidatorDate(array('required' => false)),
      'aux1'         => new sfValidatorNumber(array('required' => false)),
      'aux2'         => new sfValidatorNumber(array('required' => false)),
      'aux3'         => new sfValidatorNumber(array('required' => false)),
      'tipo_resta'   => new sfValidatorNumber(array('required' => false)),
      'idvalidacion' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kardex[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kardex';
  }

}
