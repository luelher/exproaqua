<?php

/**
 * Ajustemv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAjustemvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(),
      'costopromfecha' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costounit'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exfisica'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exreal'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exdiferenc'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'perdida'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lote'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'costopromfecha' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costounit'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'exfisica'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'exreal'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'exdiferenc'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'perdida'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'utilidad'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'lote'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ajustemv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ajustemv';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'documento'      => 'Text',
      'codigo'         => 'Text',
      'id'             => 'Text',
      'nombre'         => 'Text',
      'costopromfecha' => 'Number',
      'costounit'      => 'Number',
      'exfisica'       => 'Number',
      'exreal'         => 'Number',
      'exdiferenc'     => 'Number',
      'perdida'        => 'Number',
      'utilidad'       => 'Number',
      'lote'           => 'Text',
    );
  }
}
