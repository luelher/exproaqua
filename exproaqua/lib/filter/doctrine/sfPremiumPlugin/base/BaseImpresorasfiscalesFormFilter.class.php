<?php

/**
 * Impresorasfiscales filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseImpresorasfiscalesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'marca'      => new sfWidgetFormFilterInput(),
      'modelo'     => new sfWidgetFormFilterInput(),
      'serial'     => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'ubicacion'  => new sfWidgetFormFilterInput(),
      'estatus'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notas'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'marca'      => new sfValidatorPass(array('required' => false)),
      'modelo'     => new sfValidatorPass(array('required' => false)),
      'serial'     => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'ubicacion'  => new sfValidatorPass(array('required' => false)),
      'estatus'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notas'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('impresorasfiscales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Impresorasfiscales';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'marca'      => 'Text',
      'modelo'     => 'Text',
      'serial'     => 'Text',
      'estacion'   => 'Text',
      'ubicacion'  => 'Text',
      'estatus'    => 'Number',
      'notas'      => 'Text',
    );
  }
}
