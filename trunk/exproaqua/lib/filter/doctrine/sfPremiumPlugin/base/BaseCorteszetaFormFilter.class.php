<?php

/**
 * Corteszeta filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCorteszetaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estacion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ubicacion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numeroz'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'razonsocial'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rif'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'facexenta'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidadfac'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bifacalicgen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivafacalicgen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bifacalicred'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivafacalicred'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bifacalicaum'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivafacalicaum'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ncexenta'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidadnc'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bincalicgen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivancalicgen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bincalicred'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivancalicred'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bincalicaum'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivancalicaum'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descexento'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidaddesc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bidescalicgen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivadescalicgen' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bidescalicred'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivadescalicred' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bidescalicaum'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ivadescalicaum' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primfact'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultifact'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechultfac'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'horaultfac'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'marca'          => new sfValidatorPass(array('required' => false)),
      'modelo'         => new sfValidatorPass(array('required' => false)),
      'estacion'       => new sfValidatorPass(array('required' => false)),
      'ubicacion'      => new sfValidatorPass(array('required' => false)),
      'numeroz'        => new sfValidatorPass(array('required' => false)),
      'razonsocial'    => new sfValidatorPass(array('required' => false)),
      'rif'            => new sfValidatorPass(array('required' => false)),
      'facexenta'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidadfac'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bifacalicgen'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivafacalicgen'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bifacalicred'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivafacalicred'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bifacalicaum'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivafacalicaum'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ncexenta'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidadnc'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bincalicgen'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivancalicgen'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bincalicred'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivancalicred'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bincalicaum'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivancalicaum'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descexento'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cantidaddesc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bidescalicgen'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivadescalicgen' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bidescalicred'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivadescalicred' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bidescalicaum'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ivadescalicaum' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'primfact'       => new sfValidatorPass(array('required' => false)),
      'ultifact'       => new sfValidatorPass(array('required' => false)),
      'fechultfac'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'horaultfac'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('corteszeta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Corteszeta';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'serial'         => 'Text',
      'codigo'         => 'Text',
      'nombre'         => 'Text',
      'marca'          => 'Text',
      'modelo'         => 'Text',
      'estacion'       => 'Text',
      'ubicacion'      => 'Text',
      'numeroz'        => 'Text',
      'fechaz'         => 'Date',
      'horaz'          => 'Text',
      'razonsocial'    => 'Text',
      'rif'            => 'Text',
      'facexenta'      => 'Number',
      'cantidadfac'    => 'Number',
      'bifacalicgen'   => 'Number',
      'ivafacalicgen'  => 'Number',
      'bifacalicred'   => 'Number',
      'ivafacalicred'  => 'Number',
      'bifacalicaum'   => 'Number',
      'ivafacalicaum'  => 'Number',
      'ncexenta'       => 'Number',
      'cantidadnc'     => 'Number',
      'bincalicgen'    => 'Number',
      'ivancalicgen'   => 'Number',
      'bincalicred'    => 'Number',
      'ivancalicred'   => 'Number',
      'bincalicaum'    => 'Number',
      'ivancalicaum'   => 'Number',
      'descexento'     => 'Number',
      'cantidaddesc'   => 'Number',
      'bidescalicgen'  => 'Number',
      'ivadescalicgen' => 'Number',
      'bidescalicred'  => 'Number',
      'ivadescalicred' => 'Number',
      'bidescalicaum'  => 'Number',
      'ivadescalicaum' => 'Number',
      'primfact'       => 'Text',
      'ultifact'       => 'Text',
      'fechultfac'     => 'Date',
      'horaultfac'     => 'Text',
    );
  }
}
