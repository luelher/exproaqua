<?php

/**
 * Formascobros form base class.
 *
 * @method Formascobros getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFormascobrosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormInputHidden(),
      'agencia'           => new sfWidgetFormInputHidden(),
      'tipodoc'           => new sfWidgetFormInputText(),
      'documento'         => new sfWidgetFormInputText(),
      'fecha_recibo'      => new sfWidgetFormDateTime(),
      'recibo'            => new sfWidgetFormInputHidden(),
      'tipo_cobro'        => new sfWidgetFormInputText(),
      'monto'             => new sfWidgetFormInputText(),
      'codmoneda'         => new sfWidgetFormInputText(),
      'muti_div'          => new sfWidgetFormInputText(),
      'cotizacion_moneda' => new sfWidgetFormInputText(),
      'banco'             => new sfWidgetFormInputText(),
      'codigotarjeta'     => new sfWidgetFormInputText(),
      'referencia'        => new sfWidgetFormInputText(),
      'procedecre'        => new sfWidgetFormInputText(),
      'idvalidacion'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'tipodoc'           => new sfValidatorString(array('max_length' => 3)),
      'documento'         => new sfValidatorString(array('max_length' => 8)),
      'fecha_recibo'      => new sfValidatorDateTime(array('required' => false)),
      'recibo'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'tipo_cobro'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'monto'             => new sfValidatorNumber(array('required' => false)),
      'codmoneda'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'muti_div'          => new sfValidatorNumber(array('required' => false)),
      'cotizacion_moneda' => new sfValidatorNumber(array('required' => false)),
      'banco'             => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codigotarjeta'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'referencia'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'procedecre'        => new sfValidatorNumber(array('required' => false)),
      'idvalidacion'      => new sfValidatorString(array('max_length' => 12)),
    ));

    $this->widgetSchema->setNameFormat('formascobros[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formascobros';
  }

}
