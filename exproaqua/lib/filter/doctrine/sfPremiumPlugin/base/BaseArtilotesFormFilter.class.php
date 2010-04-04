<?php

/**
 * Artilotes filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArtilotesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inactivo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vence'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cantidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consumido'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comprometido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio3'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio4'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio5'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio6'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio7'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio8'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio1grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio2grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio3grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio4grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio5grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio6grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio7grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio8grp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'inactivo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vence'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cantidad'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'consumido'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comprometido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio1'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio2'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio3'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio4'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio5'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio6'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio7'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio8'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin3'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin4'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin5'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin6'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin7'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin8'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio1grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio2grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio3grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio4grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio5grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio6grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio7grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio8grp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('artilotes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artilotes';
  }

  public function getFields()
  {
    return array(
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'lote'         => 'Text',
      'codigoart'    => 'Text',
      'almacen'      => 'Text',
      'inactivo'     => 'Number',
      'vence'        => 'Date',
      'cantidad'     => 'Number',
      'consumido'    => 'Number',
      'comprometido' => 'Number',
      'costo'        => 'Number',
      'precio1'      => 'Number',
      'precio2'      => 'Number',
      'precio3'      => 'Number',
      'precio4'      => 'Number',
      'precio5'      => 'Number',
      'precio6'      => 'Number',
      'precio7'      => 'Number',
      'precio8'      => 'Number',
      'preciofin1'   => 'Number',
      'preciofin2'   => 'Number',
      'preciofin3'   => 'Number',
      'preciofin4'   => 'Number',
      'preciofin5'   => 'Number',
      'preciofin6'   => 'Number',
      'preciofin7'   => 'Number',
      'preciofin8'   => 'Number',
      'precio1grp'   => 'Number',
      'precio2grp'   => 'Number',
      'precio3grp'   => 'Number',
      'precio4grp'   => 'Number',
      'precio5grp'   => 'Number',
      'precio6grp'   => 'Number',
      'precio7grp'   => 'Number',
      'precio8grp'   => 'Number',
    );
  }
}
