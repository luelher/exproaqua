<?php

/**
 * Pagosti form base class.
 *
 * @method Pagosti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePagostiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'tipopago'   => new sfWidgetFormInputText(),
      'documprov'  => new sfWidgetFormInputText(),
      'comprob'    => new sfWidgetFormInputText(),
      'codigoprov' => new sfWidgetFormInputText(),
      'nombreprov' => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'fpago'      => new sfWidgetFormDate(),
      'totpagos'   => new sfWidgetFormInputText(),
      'retencion'  => new sfWidgetFormInputText(),
      'por_retenc' => new sfWidgetFormInputText(),
      'totiva'     => new sfWidgetFormInputText(),
      'concepto'   => new sfWidgetFormTextarea(),
      'seleccion'  => new sfWidgetFormInputText(),
      'bancocheq'  => new sfWidgetFormInputText(),
      'montocheq'  => new sfWidgetFormInputText(),
      'efectivo'   => new sfWidgetFormInputText(),
      'caja'       => new sfWidgetFormInputText(),
      'banco'      => new sfWidgetFormInputText(),
      'chequenro'  => new sfWidgetFormInputText(),
      'statuspag'  => new sfWidgetFormInputText(),
      'uanulador'  => new sfWidgetFormInputText(),
      'uemisor'    => new sfWidgetFormInputText(),
      'fechanul'   => new sfWidgetFormDate(),
      'monto'      => new sfWidgetFormInputText(),
      'emifecha'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'tipopago'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'documprov'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'comprob'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'codigoprov' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nombreprov' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'fpago'      => new sfValidatorDate(array('required' => false)),
      'totpagos'   => new sfValidatorNumber(array('required' => false)),
      'retencion'  => new sfValidatorNumber(array('required' => false)),
      'por_retenc' => new sfValidatorNumber(array('required' => false)),
      'totiva'     => new sfValidatorNumber(array('required' => false)),
      'concepto'   => new sfValidatorString(array('required' => false)),
      'seleccion'  => new sfValidatorNumber(array('required' => false)),
      'bancocheq'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'montocheq'  => new sfValidatorNumber(array('required' => false)),
      'efectivo'   => new sfValidatorNumber(array('required' => false)),
      'caja'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'banco'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'chequenro'  => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'statuspag'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'uanulador'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'uemisor'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fechanul'   => new sfValidatorDate(array('required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'emifecha'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagosti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pagosti';
  }

}
