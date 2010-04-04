<?php

/**
 * Idconsumos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIdconsumosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_corto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capacidad'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatus'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notas'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigoarticulo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_idconsumo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aplica_touch'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ubicacion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'descripcion'    => new sfValidatorPass(array('required' => false)),
      'nombre_corto'   => new sfValidatorPass(array('required' => false)),
      'capacidad'      => new sfValidatorPass(array('required' => false)),
      'estatus'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'notas'          => new sfValidatorPass(array('required' => false)),
      'rutafoto'       => new sfValidatorPass(array('required' => false)),
      'codigoarticulo' => new sfValidatorPass(array('required' => false)),
      'tipo_idconsumo' => new sfValidatorPass(array('required' => false)),
      'aplica_touch'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ubicacion'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('idconsumos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Idconsumos';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'id_consumo'     => 'Text',
      'descripcion'    => 'Text',
      'nombre_corto'   => 'Text',
      'capacidad'      => 'Text',
      'estatus'        => 'Number',
      'notas'          => 'Text',
      'rutafoto'       => 'Text',
      'codigoarticulo' => 'Text',
      'tipo_idconsumo' => 'Text',
      'aplica_touch'   => 'Number',
      'ubicacion'      => 'Text',
    );
  }
}
