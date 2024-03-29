<?php

/**
 * Cliempre filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCliempreFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'                    => new sfWidgetFormFilterInput(),
      'cedula'                    => new sfWidgetFormFilterInput(),
      'nrorif'                    => new sfWidgetFormFilterInput(),
      'nronit'                    => new sfWidgetFormFilterInput(),
      'referenc1'                 => new sfWidgetFormFilterInput(),
      'referenc2'                 => new sfWidgetFormFilterInput(),
      'direccion'                 => new sfWidgetFormFilterInput(),
      'telefonos'                 => new sfWidgetFormFilterInput(),
      'telefono_movil'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerofax'                 => new sfWidgetFormFilterInput(),
      'fecha'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'perscont'                  => new sfWidgetFormFilterInput(),
      'limite'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nota'                      => new sfWidgetFormFilterInput(),
      'credito'                   => new sfWidgetFormFilterInput(),
      'sector'                    => new sfWidgetFormFilterInput(),
      'formafis'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'historia'                  => new sfWidgetFormFilterInput(),
      'email'                     => new sfWidgetFormFilterInput(),
      'wwwcli'                    => new sfWidgetFormFilterInput(),
      'descuento'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vendedor'                  => new sfWidgetFormFilterInput(),
      'motsuspend'                => new sfWidgetFormFilterInput(),
      'flotante'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tolerancia'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'                      => new sfWidgetFormFilterInput(),
      'codigocont'                => new sfWidgetFormFilterInput(),
      'direccobro'                => new sfWidgetFormFilterInput(),
      'direcenvio'                => new sfWidgetFormFilterInput(),
      'formaenvio'                => new sfWidgetFormFilterInput(),
      'sexo'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nacionalidad'              => new sfWidgetFormFilterInput(),
      'fechanac'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'edocivil'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telhabitacion'             => new sfWidgetFormFilterInput(),
      'celular'                   => new sfWidgetFormFilterInput(),
      'anivbodas'                 => new sfWidgetFormFilterInput(),
      'habcasa'                   => new sfWidgetFormFilterInput(),
      'habtorre'                  => new sfWidgetFormFilterInput(),
      'habpiso'                   => new sfWidgetFormFilterInput(),
      'habapto'                   => new sfWidgetFormFilterInput(),
      'habcalleav'                => new sfWidgetFormFilterInput(),
      'haburb'                    => new sfWidgetFormFilterInput(),
      'trabempresa'               => new sfWidgetFormFilterInput(),
      'trabcargo'                 => new sfWidgetFormFilterInput(),
      'trabcasaedif'              => new sfWidgetFormFilterInput(),
      'trabtorre'                 => new sfWidgetFormFilterInput(),
      'trabpiso'                  => new sfWidgetFormFilterInput(),
      'traboficina'               => new sfWidgetFormFilterInput(),
      'trabcalle'                 => new sfWidgetFormFilterInput(),
      'traburb'                   => new sfWidgetFormFilterInput(),
      'trabtelefono'              => new sfWidgetFormFilterInput(),
      'parentesco1'               => new sfWidgetFormFilterInput(),
      'parentesco2'               => new sfWidgetFormFilterInput(),
      'parentesco3'               => new sfWidgetFormFilterInput(),
      'parentesco4'               => new sfWidgetFormFilterInput(),
      'parentesco5'               => new sfWidgetFormFilterInput(),
      'nomapell1'                 => new sfWidgetFormFilterInput(),
      'nomapell2'                 => new sfWidgetFormFilterInput(),
      'nomapell3'                 => new sfWidgetFormFilterInput(),
      'nomapell4'                 => new sfWidgetFormFilterInput(),
      'nomapell5'                 => new sfWidgetFormFilterInput(),
      'fechanac1'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechanac2'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechanac3'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechanac4'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechanac5'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'profesion1'                => new sfWidgetFormFilterInput(),
      'profesion2'                => new sfWidgetFormFilterInput(),
      'profesion3'                => new sfWidgetFormFilterInput(),
      'profesion4'                => new sfWidgetFormFilterInput(),
      'profesion5'                => new sfWidgetFormFilterInput(),
      'diario'                    => new sfWidgetFormFilterInput(),
      'emisoraradio'              => new sfWidgetFormFilterInput(),
      'mediovisto'                => new sfWidgetFormFilterInput(),
      'sucursal'                  => new sfWidgetFormFilterInput(),
      'contribespecial'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'domiciliado'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'excentomora'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'                    => new sfWidgetFormFilterInput(),
      'campo1'                    => new sfWidgetFormFilterInput(),
      'campo2'                    => new sfWidgetFormFilterInput(),
      'campo3'                    => new sfWidgetFormFilterInput(),
      'campo4'                    => new sfWidgetFormFilterInput(),
      'campo5'                    => new sfWidgetFormFilterInput(),
      'codconvenio'               => new sfWidgetFormFilterInput(),
      'tipopersona'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'cedula'                    => new sfValidatorPass(array('required' => false)),
      'nrorif'                    => new sfValidatorPass(array('required' => false)),
      'nronit'                    => new sfValidatorPass(array('required' => false)),
      'referenc1'                 => new sfValidatorPass(array('required' => false)),
      'referenc2'                 => new sfValidatorPass(array('required' => false)),
      'direccion'                 => new sfValidatorPass(array('required' => false)),
      'telefonos'                 => new sfValidatorPass(array('required' => false)),
      'telefono_movil'            => new sfValidatorPass(array('required' => false)),
      'numerofax'                 => new sfValidatorPass(array('required' => false)),
      'fecha'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'perscont'                  => new sfValidatorPass(array('required' => false)),
      'limite'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dias'                      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nota'                      => new sfValidatorPass(array('required' => false)),
      'credito'                   => new sfValidatorPass(array('required' => false)),
      'sector'                    => new sfValidatorPass(array('required' => false)),
      'formafis'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'historia'                  => new sfValidatorPass(array('required' => false)),
      'email'                     => new sfValidatorPass(array('required' => false)),
      'wwwcli'                    => new sfValidatorPass(array('required' => false)),
      'descuento'                 => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vendedor'                  => new sfValidatorPass(array('required' => false)),
      'motsuspend'                => new sfValidatorPass(array('required' => false)),
      'flotante'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tolerancia'                => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo'                      => new sfValidatorPass(array('required' => false)),
      'codigocont'                => new sfValidatorPass(array('required' => false)),
      'direccobro'                => new sfValidatorPass(array('required' => false)),
      'direcenvio'                => new sfValidatorPass(array('required' => false)),
      'formaenvio'                => new sfValidatorPass(array('required' => false)),
      'sexo'                      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nacionalidad'              => new sfValidatorPass(array('required' => false)),
      'fechanac'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'edocivil'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'telhabitacion'             => new sfValidatorPass(array('required' => false)),
      'celular'                   => new sfValidatorPass(array('required' => false)),
      'anivbodas'                 => new sfValidatorPass(array('required' => false)),
      'habcasa'                   => new sfValidatorPass(array('required' => false)),
      'habtorre'                  => new sfValidatorPass(array('required' => false)),
      'habpiso'                   => new sfValidatorPass(array('required' => false)),
      'habapto'                   => new sfValidatorPass(array('required' => false)),
      'habcalleav'                => new sfValidatorPass(array('required' => false)),
      'haburb'                    => new sfValidatorPass(array('required' => false)),
      'trabempresa'               => new sfValidatorPass(array('required' => false)),
      'trabcargo'                 => new sfValidatorPass(array('required' => false)),
      'trabcasaedif'              => new sfValidatorPass(array('required' => false)),
      'trabtorre'                 => new sfValidatorPass(array('required' => false)),
      'trabpiso'                  => new sfValidatorPass(array('required' => false)),
      'traboficina'               => new sfValidatorPass(array('required' => false)),
      'trabcalle'                 => new sfValidatorPass(array('required' => false)),
      'traburb'                   => new sfValidatorPass(array('required' => false)),
      'trabtelefono'              => new sfValidatorPass(array('required' => false)),
      'parentesco1'               => new sfValidatorPass(array('required' => false)),
      'parentesco2'               => new sfValidatorPass(array('required' => false)),
      'parentesco3'               => new sfValidatorPass(array('required' => false)),
      'parentesco4'               => new sfValidatorPass(array('required' => false)),
      'parentesco5'               => new sfValidatorPass(array('required' => false)),
      'nomapell1'                 => new sfValidatorPass(array('required' => false)),
      'nomapell2'                 => new sfValidatorPass(array('required' => false)),
      'nomapell3'                 => new sfValidatorPass(array('required' => false)),
      'nomapell4'                 => new sfValidatorPass(array('required' => false)),
      'nomapell5'                 => new sfValidatorPass(array('required' => false)),
      'fechanac1'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechanac2'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechanac3'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechanac4'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechanac5'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'profesion1'                => new sfValidatorPass(array('required' => false)),
      'profesion2'                => new sfValidatorPass(array('required' => false)),
      'profesion3'                => new sfValidatorPass(array('required' => false)),
      'profesion4'                => new sfValidatorPass(array('required' => false)),
      'profesion5'                => new sfValidatorPass(array('required' => false)),
      'diario'                    => new sfValidatorPass(array('required' => false)),
      'emisoraradio'              => new sfValidatorPass(array('required' => false)),
      'mediovisto'                => new sfValidatorPass(array('required' => false)),
      'sucursal'                  => new sfValidatorPass(array('required' => false)),
      'contribespecial'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'domiciliado'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'excentomora'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'                    => new sfValidatorPass(array('required' => false)),
      'campo1'                    => new sfValidatorPass(array('required' => false)),
      'campo2'                    => new sfValidatorPass(array('required' => false)),
      'campo3'                    => new sfValidatorPass(array('required' => false)),
      'campo4'                    => new sfValidatorPass(array('required' => false)),
      'campo5'                    => new sfValidatorPass(array('required' => false)),
      'codconvenio'               => new sfValidatorPass(array('required' => false)),
      'tipopersona'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codban_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'codban_intermediario'      => new sfValidatorPass(array('required' => false)),
      'nombre_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'cuenta_beneficiario'       => new sfValidatorPass(array('required' => false)),
      'tipo_cuenta_beneficiario'  => new sfValidatorPass(array('required' => false)),
      'codigo_swift_beneficiario' => new sfValidatorPass(array('required' => false)),
      'codigo_iban_beneficiario'  => new sfValidatorPass(array('required' => false)),
      'nota_cuenta_beneficiario'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliempre_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliempre';
  }

  public function getFields()
  {
    return array(
      'id_empresa'                => 'Text',
      'agencia'                   => 'Text',
      'codigo'                    => 'Text',
      'nombre'                    => 'Text',
      'cedula'                    => 'Text',
      'nrorif'                    => 'Text',
      'nronit'                    => 'Text',
      'referenc1'                 => 'Text',
      'referenc2'                 => 'Text',
      'direccion'                 => 'Text',
      'telefonos'                 => 'Text',
      'telefono_movil'            => 'Text',
      'numerofax'                 => 'Text',
      'fecha'                     => 'Date',
      'perscont'                  => 'Text',
      'limite'                    => 'Number',
      'dias'                      => 'Number',
      'precio'                    => 'Number',
      'status'                    => 'Number',
      'nota'                      => 'Text',
      'credito'                   => 'Text',
      'sector'                    => 'Text',
      'formafis'                  => 'Number',
      'historia'                  => 'Text',
      'email'                     => 'Text',
      'wwwcli'                    => 'Text',
      'descuento'                 => 'Number',
      'vendedor'                  => 'Text',
      'motsuspend'                => 'Text',
      'flotante'                  => 'Number',
      'tolerancia'                => 'Number',
      'tipo'                      => 'Text',
      'codigocont'                => 'Text',
      'direccobro'                => 'Text',
      'direcenvio'                => 'Text',
      'formaenvio'                => 'Text',
      'sexo'                      => 'Number',
      'nacionalidad'              => 'Text',
      'fechanac'                  => 'Date',
      'edocivil'                  => 'Number',
      'telhabitacion'             => 'Text',
      'celular'                   => 'Text',
      'anivbodas'                 => 'Text',
      'habcasa'                   => 'Text',
      'habtorre'                  => 'Text',
      'habpiso'                   => 'Text',
      'habapto'                   => 'Text',
      'habcalleav'                => 'Text',
      'haburb'                    => 'Text',
      'trabempresa'               => 'Text',
      'trabcargo'                 => 'Text',
      'trabcasaedif'              => 'Text',
      'trabtorre'                 => 'Text',
      'trabpiso'                  => 'Text',
      'traboficina'               => 'Text',
      'trabcalle'                 => 'Text',
      'traburb'                   => 'Text',
      'trabtelefono'              => 'Text',
      'parentesco1'               => 'Text',
      'parentesco2'               => 'Text',
      'parentesco3'               => 'Text',
      'parentesco4'               => 'Text',
      'parentesco5'               => 'Text',
      'nomapell1'                 => 'Text',
      'nomapell2'                 => 'Text',
      'nomapell3'                 => 'Text',
      'nomapell4'                 => 'Text',
      'nomapell5'                 => 'Text',
      'fechanac1'                 => 'Date',
      'fechanac2'                 => 'Date',
      'fechanac3'                 => 'Date',
      'fechanac4'                 => 'Date',
      'fechanac5'                 => 'Date',
      'profesion1'                => 'Text',
      'profesion2'                => 'Text',
      'profesion3'                => 'Text',
      'profesion4'                => 'Text',
      'profesion5'                => 'Text',
      'diario'                    => 'Text',
      'emisoraradio'              => 'Text',
      'mediovisto'                => 'Text',
      'sucursal'                  => 'Text',
      'contribespecial'           => 'Number',
      'domiciliado'               => 'Number',
      'excentomora'               => 'Number',
      'moneda'                    => 'Text',
      'campo1'                    => 'Text',
      'campo2'                    => 'Text',
      'campo3'                    => 'Text',
      'campo4'                    => 'Text',
      'campo5'                    => 'Text',
      'codconvenio'               => 'Text',
      'tipopersona'               => 'Number',
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
