<?php

/**
 * Cajachica filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCajachicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'        => new sfWidgetFormFilterInput(),
      'nombre'         => new sfWidgetFormFilterInput(),
      'ingreso'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'egreso'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cerrado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'referencia'     => new sfWidgetFormFilterInput(),
      'nota'           => new sfWidgetFormFilterInput(),
      'horadocum'      => new sfWidgetFormFilterInput(),
      'ampm'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorPass(array('required' => false)),
      'agencia'        => new sfValidatorPass(array('required' => false)),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'ingreso'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'egreso'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cerrado'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'referencia'     => new sfValidatorPass(array('required' => false)),
      'nota'           => new sfValidatorPass(array('required' => false)),
      'horadocum'      => new sfValidatorPass(array('required' => false)),
      'ampm'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'turno'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cajachica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cajachica';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'codigocaja'     => 'Text',
      'codigoconcepto' => 'Text',
      'nombre'         => 'Text',
      'ingreso'        => 'Number',
      'egreso'         => 'Number',
      'fecha'          => 'Date',
      'pid'            => 'Text',
      'cerrado'        => 'Number',
      'referencia'     => 'Text',
      'nota'           => 'Text',
      'horadocum'      => 'Text',
      'ampm'           => 'Number',
      'turno'          => 'Text',
    );
  }
}
