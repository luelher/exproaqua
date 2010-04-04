<?php

/**
 * Grupos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGruposFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'            => new sfWidgetFormFilterInput(),
      'tcantidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tfacturado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usatalla'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usacolor'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcutil'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descuento'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formato'           => new sfWidgetFormFilterInput(),
      'ctacontinv'        => new sfWidgetFormFilterInput(),
      'ctacontcostos'     => new sfWidgetFormFilterInput(),
      'ctacontingresos'   => new sfWidgetFormFilterInput(),
      'oculto_restaurant' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'noaplicarecargos'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto'          => new sfWidgetFormFilterInput(),
      'nombre_corto'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorPass(array('required' => false)),
      'agencia'           => new sfValidatorPass(array('required' => false)),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'tcantidad'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tfacturado'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usatalla'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usacolor'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcutil'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descuento'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'formato'           => new sfValidatorPass(array('required' => false)),
      'ctacontinv'        => new sfValidatorPass(array('required' => false)),
      'ctacontcostos'     => new sfValidatorPass(array('required' => false)),
      'ctacontingresos'   => new sfValidatorPass(array('required' => false)),
      'oculto_restaurant' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'noaplicarecargos'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rutafoto'          => new sfValidatorPass(array('required' => false)),
      'nombre_corto'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupos';
  }

  public function getFields()
  {
    return array(
      'id_empresa'        => 'Text',
      'agencia'           => 'Text',
      'codigo'            => 'Text',
      'nombre'            => 'Text',
      'tcantidad'         => 'Number',
      'tfacturado'        => 'Number',
      'usatalla'          => 'Number',
      'usacolor'          => 'Number',
      'prcutil'           => 'Number',
      'descuento'         => 'Number',
      'formato'           => 'Text',
      'ctacontinv'        => 'Text',
      'ctacontcostos'     => 'Text',
      'ctacontingresos'   => 'Text',
      'oculto_restaurant' => 'Number',
      'noaplicarecargos'  => 'Number',
      'rutafoto'          => 'Text',
      'nombre_corto'      => 'Text',
    );
  }
}
