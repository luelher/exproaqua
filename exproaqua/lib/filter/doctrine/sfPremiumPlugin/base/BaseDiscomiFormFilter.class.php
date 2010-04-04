<?php

/**
 * Discomi filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDiscomiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'nombvend'   => new sfWidgetFormFilterInput(),
      'montoneto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porcentaje' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'nombvend'   => new sfValidatorPass(array('required' => false)),
      'montoneto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porcentaje' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('discomi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discomi';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'tipodoc'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'pid'        => 'Text',
      'vendedor'   => 'Text',
      'nombvend'   => 'Text',
      'montoneto'  => 'Number',
      'porcentaje' => 'Number',
      'comision'   => 'Number',
    );
  }
}
