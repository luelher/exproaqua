<?php

/**
 * Configtaller filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigtallerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nplaca'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nvehiculo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vehising'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nserial1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_serial1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nserial2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_serial2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nserial3'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_serial3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nserial4'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_serial4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nameorden'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'npresup'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'norden'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nreq'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ncarga'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cambiatipo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutareporte'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutaquery'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_marca'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_modelo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_tipo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colorart'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_colorart'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anno'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_anno'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'puestos'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_puestos'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kilometraje'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h_kilometraje' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasladose'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'p_directo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'    => new sfValidatorPass(array('required' => false)),
      'nplaca'        => new sfValidatorPass(array('required' => false)),
      'nvehiculo'     => new sfValidatorPass(array('required' => false)),
      'vehising'      => new sfValidatorPass(array('required' => false)),
      'nserial1'      => new sfValidatorPass(array('required' => false)),
      'h_serial1'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nserial2'      => new sfValidatorPass(array('required' => false)),
      'h_serial2'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nserial3'      => new sfValidatorPass(array('required' => false)),
      'h_serial3'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nserial4'      => new sfValidatorPass(array('required' => false)),
      'h_serial4'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nameorden'     => new sfValidatorPass(array('required' => false)),
      'npresup'       => new sfValidatorPass(array('required' => false)),
      'norden'        => new sfValidatorPass(array('required' => false)),
      'nreq'          => new sfValidatorPass(array('required' => false)),
      'ncarga'        => new sfValidatorPass(array('required' => false)),
      'cambiatipo'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rutareporte'   => new sfValidatorPass(array('required' => false)),
      'rutaquery'     => new sfValidatorPass(array('required' => false)),
      'marca'         => new sfValidatorPass(array('required' => false)),
      'h_marca'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'modelo'        => new sfValidatorPass(array('required' => false)),
      'h_modelo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'          => new sfValidatorPass(array('required' => false)),
      'h_tipo'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'colorart'      => new sfValidatorPass(array('required' => false)),
      'h_colorart'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anno'          => new sfValidatorPass(array('required' => false)),
      'h_anno'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'puestos'       => new sfValidatorPass(array('required' => false)),
      'h_puestos'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kilometraje'   => new sfValidatorPass(array('required' => false)),
      'h_kilometraje' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trasladose'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'p_directo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('configtaller_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configtaller';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'id_empresa'    => 'Text',
      'nplaca'        => 'Text',
      'nvehiculo'     => 'Text',
      'vehising'      => 'Text',
      'nserial1'      => 'Text',
      'h_serial1'     => 'Number',
      'nserial2'      => 'Text',
      'h_serial2'     => 'Number',
      'nserial3'      => 'Text',
      'h_serial3'     => 'Number',
      'nserial4'      => 'Text',
      'h_serial4'     => 'Number',
      'nameorden'     => 'Text',
      'npresup'       => 'Text',
      'norden'        => 'Text',
      'nreq'          => 'Text',
      'ncarga'        => 'Text',
      'cambiatipo'    => 'Number',
      'rutareporte'   => 'Text',
      'rutaquery'     => 'Text',
      'marca'         => 'Text',
      'h_marca'       => 'Number',
      'modelo'        => 'Text',
      'h_modelo'      => 'Number',
      'tipo'          => 'Text',
      'h_tipo'        => 'Number',
      'colorart'      => 'Text',
      'h_colorart'    => 'Number',
      'anno'          => 'Text',
      'h_anno'        => 'Number',
      'puestos'       => 'Text',
      'h_puestos'     => 'Number',
      'kilometraje'   => 'Text',
      'h_kilometraje' => 'Number',
      'trasladose'    => 'Number',
      'p_directo'     => 'Number',
    );
  }
}
