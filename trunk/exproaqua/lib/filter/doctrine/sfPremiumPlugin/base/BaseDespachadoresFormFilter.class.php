<?php

/**
 * Despachadores filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDespachadoresFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_corto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cedula'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nrorif'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'celular'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vehiculo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'placa'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatus'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'nombre_corto'   => new sfValidatorPass(array('required' => false)),
      'cedula'         => new sfValidatorPass(array('required' => false)),
      'nrorif'         => new sfValidatorPass(array('required' => false)),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'celular'        => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'vehiculo'       => new sfValidatorPass(array('required' => false)),
      'placa'          => new sfValidatorPass(array('required' => false)),
      'estatus'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rutafoto'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('despachadores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Despachadores';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'id_despachador' => 'Text',
      'nombre'         => 'Text',
      'nombre_corto'   => 'Text',
      'cedula'         => 'Text',
      'nrorif'         => 'Text',
      'direccion'      => 'Text',
      'telefono'       => 'Text',
      'celular'        => 'Text',
      'email'          => 'Text',
      'vehiculo'       => 'Text',
      'placa'          => 'Text',
      'estatus'        => 'Number',
      'rutafoto'       => 'Text',
    );
  }
}
