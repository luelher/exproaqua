<?php

/**
 * Suplidor form base class.
 *
 * @method Suplidor getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSuplidorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'                => new sfWidgetFormInputText(),
      'agencia'                   => new sfWidgetFormInputText(),
      'codigo'                    => new sfWidgetFormInputHidden(),
      'nombre'                    => new sfWidgetFormInputText(),
      'nrorif'                    => new sfWidgetFormInputText(),
      'nronit'                    => new sfWidgetFormInputText(),
      'cedula'                    => new sfWidgetFormInputText(),
      'perscont'                  => new sfWidgetFormInputText(),
      'direccion'                 => new sfWidgetFormInputText(),
      'telefonos'                 => new sfWidgetFormInputText(),
      'celular'                   => new sfWidgetFormInputText(),
      'nrofax'                    => new sfWidgetFormInputText(),
      'dias'                      => new sfWidgetFormInputText(),
      'fecha'                     => new sfWidgetFormDate(),
      'notas'                     => new sfWidgetFormInputText(),
      'sector'                    => new sfWidgetFormInputText(),
      'banco'                     => new sfWidgetFormInputText(),
      'cuenta'                    => new sfWidgetFormInputText(),
      'email'                     => new sfWidgetFormInputText(),
      'wwwsite'                   => new sfWidgetFormInputText(),
      'tipo'                      => new sfWidgetFormInputText(),
      'cuentacont'                => new sfWidgetFormInputText(),
      'clase'                     => new sfWidgetFormInputText(),
      'flotante'                  => new sfWidgetFormInputText(),
      'pagaex'                    => new sfWidgetFormInputText(),
      'moneda'                    => new sfWidgetFormInputText(),
      'campo1'                    => new sfWidgetFormInputText(),
      'campo2'                    => new sfWidgetFormInputText(),
      'campo3'                    => new sfWidgetFormInputText(),
      'campo4'                    => new sfWidgetFormInputText(),
      'campo5'                    => new sfWidgetFormInputText(),
      'codban_beneficiario'       => new sfWidgetFormInputText(),
      'codban_intermediario'      => new sfWidgetFormInputText(),
      'nombre_beneficiario'       => new sfWidgetFormInputText(),
      'cuenta_beneficiario'       => new sfWidgetFormInputText(),
      'tipo_cuenta_beneficiario'  => new sfWidgetFormInputText(),
      'codigo_swift_beneficiario' => new sfWidgetFormInputText(),
      'codigo_iban_beneficiario'  => new sfWidgetFormInputText(),
      'nota_cuenta_beneficiario'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_empresa'                => new sfValidatorString(array('max_length' => 6)),
      'agencia'                   => new sfValidatorString(array('max_length' => 3)),
      'codigo'                    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'                    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nrorif'                    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nronit'                    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cedula'                    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'perscont'                  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'direccion'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefonos'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'celular'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nrofax'                    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'dias'                      => new sfValidatorNumber(array('required' => false)),
      'fecha'                     => new sfValidatorDate(array('required' => false)),
      'notas'                     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'sector'                    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'banco'                     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cuenta'                    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'email'                     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'wwwsite'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo'                      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cuentacont'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'clase'                     => new sfValidatorNumber(array('required' => false)),
      'flotante'                  => new sfValidatorNumber(array('required' => false)),
      'pagaex'                    => new sfValidatorNumber(array('required' => false)),
      'moneda'                    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'campo1'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo2'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo3'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo4'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo5'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codban_beneficiario'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codban_intermediario'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nombre_beneficiario'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cuenta_beneficiario'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tipo_cuenta_beneficiario'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'codigo_swift_beneficiario' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'codigo_iban_beneficiario'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nota_cuenta_beneficiario'  => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('suplidor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Suplidor';
  }

}
