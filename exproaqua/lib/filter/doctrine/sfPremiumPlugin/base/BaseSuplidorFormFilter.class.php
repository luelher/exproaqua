<?php

/**
 * Suplidor filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSuplidorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'                    => new sfWidgetFormFilterInput(),
      'nrorif'                    => new sfWidgetFormFilterInput(),
      'nronit'                    => new sfWidgetFormFilterInput(),
      'cedula'                    => new sfWidgetFormFilterInput(),
      'perscont'                  => new sfWidgetFormFilterInput(),
      'direccion'                 => new sfWidgetFormFilterInput(),
      'telefonos'                 => new sfWidgetFormFilterInput(),
      'celular'                   => new sfWidgetFormFilterInput(),
      'nrofax'                    => new sfWidgetFormFilterInput(),
      'dias'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'notas'                     => new sfWidgetFormFilterInput(),
      'sector'                    => new sfWidgetFormFilterInput(),
      'banco'                     => new sfWidgetFormFilterInput(),
      'cuenta'                    => new sfWidgetFormFilterInput(),
      'email'                     => new sfWidgetFormFilterInput(),
      'wwwsite'                   => new sfWidgetFormFilterInput(),
      'tipo'                      => new sfWidgetFormFilterInput(),
      'cuentacont'                => new sfWidgetFormFilterInput(),
      'clase'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'flotante'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pagaex'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'                    => new sfWidgetFormFilterInput(),
      'campo1'                    => new sfWidgetFormFilterInput(),
      'campo2'                    => new sfWidgetFormFilterInput(),
      'campo3'                    => new sfWidgetFormFilterInput(),
      'campo4'                    => new sfWidgetFormFilterInput(),
      'campo5'                    => new sfWidgetFormFilterInput(),
      'codban_beneficiario'       => new sfWidgetFormFilterInput(),
      'codban_intermediario'      => new sfWidgetFormFilterInput(),
      'nombre_beneficiario'       => new sfWidgetFormFilterInput(),
      'cuenta_beneficiario'       => new sfWidgetFormFilterInput(),
      'tipo_cuenta_beneficiario'  => new sfWidgetFormFilterInput(),
      'codigo_swift_beneficiario' => new sfWidgetFormFilterInput(),
      'codigo_iban_beneficiario'  => new sfWidgetFormFilterInput(),
      'nota_cuenta_beneficiario'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'                => new sfValidatorPass(array('required' => false)),
      'agencia'                   => new sfValidatorPass(array('required' => false)),
      'nombre'                    => new sfValidatorPass(array('required' => false)),
      'nrorif'                    => new sfValidatorPass(array('required' => false)),
      'nronit'                    => new sfValidatorPass(array('required' => false)),
      'cedula'                    => new sfValidatorPass(array('required' => false)),
      'perscont'                  => new sfValidatorPass(array('required' => false)),
      'direccion'                 => new sfValidatorPass(array('required' => false)),
      'telefonos'                 => new sfValidatorPass(array('required' => false)),
      'celular'                   => new sfValidatorPass(array('required' => false)),
      'nrofax'                    => new sfValidatorPass(array('required' => false)),
      'dias'                      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'notas'                     => new sfValidatorPass(array('required' => false)),
      'sector'                    => new sfValidatorPass(array('required' => false)),
      'banco'                     => new sfValidatorPass(array('required' => false)),
      'cuenta'                    => new sfValidatorPass(array('required' => false)),
      'email'                     => new sfValidatorPass(array('required' => false)),
      'wwwsite'                   => new sfValidatorPass(array('required' => false)),
      'tipo'                      => new sfValidatorPass(array('required' => false)),
      'cuentacont'                => new sfValidatorPass(array('required' => false)),
      'clase'                     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'flotante'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pagaex'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'                    => new sfValidatorPass(array('required' => false)),
      'campo1'                    => new sfValidatorPass(array('required' => false)),
      'campo2'                    => new sfValidatorPass(array('required' => false)),
      'campo3'                    => new sfValidatorPass(array('required' => false)),
      'campo4'                    => new sfValidatorPass(array('required' => false)),
      'campo5'                    => new sfValidatorPass(array('required' => false)),
      'codban_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'codban_intermediario'      => new sfValidatorPass(array('required' => false)),
      'nombre_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'cuenta_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'tipo_cuenta_beneficiario'  => new sfValidatorPass(array('required' => false)),
      'codigo_swift_beneficiario' => new sfValidatorPass(array('required' => false)),
      'codigo_iban_beneficiario'  => new sfValidatorPass(array('required' => false)),
      'nota_cuenta_beneficiario'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('suplidor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Suplidor';
  }

  public function getFields()
  {
    return array(
      'id_empresa'                => 'Text',
      'agencia'                   => 'Text',
      'codigo'                    => 'Text',
      'nombre'                    => 'Text',
      'nrorif'                    => 'Text',
      'nronit'                    => 'Text',
      'cedula'                    => 'Text',
      'perscont'                  => 'Text',
      'direccion'                 => 'Text',
      'telefonos'                 => 'Text',
      'celular'                   => 'Text',
      'nrofax'                    => 'Text',
      'dias'                      => 'Number',
      'fecha'                     => 'Date',
      'notas'                     => 'Text',
      'sector'                    => 'Text',
      'banco'                     => 'Text',
      'cuenta'                    => 'Text',
      'email'                     => 'Text',
      'wwwsite'                   => 'Text',
      'tipo'                      => 'Text',
      'cuentacont'                => 'Text',
      'clase'                     => 'Number',
      'flotante'                  => 'Number',
      'pagaex'                    => 'Number',
      'moneda'                    => 'Text',
      'campo1'                    => 'Text',
      'campo2'                    => 'Text',
      'campo3'                    => 'Text',
      'campo4'                    => 'Text',
      'campo5'                    => 'Text',
      'codban_beneficiario'       => 'Text',
      'codban_intermediario'      => 'Text',
      'nombre_beneficiario'       => 'Text',
      'cuenta_beneficiario'       => 'Text',
      'tipo_cuenta_beneficiario'  => 'Text',
      'codigo_swift_beneficiario' => 'Text',
      'codigo_iban_beneficiario'  => 'Text',
      'nota_cuenta_beneficiario'  => 'Text',
    );
  }
}
