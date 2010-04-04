<?php

/**
 * Turnos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTurnosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'      => new sfWidgetFormFilterInput(),
      'horadesde'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desdeampm'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horahasta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hastaampm'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hora24desde' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hora24hasta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorPass(array('required' => false)),
      'agencia'     => new sfValidatorPass(array('required' => false)),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'horadesde'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'desdeampm'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'horahasta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hastaampm'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hora24desde' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hora24hasta' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('turnos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turnos';
  }

  public function getFields()
  {
    return array(
      'id_empresa'  => 'Text',
      'agencia'     => 'Text',
      'codigo'      => 'Text',
      'nombre'      => 'Text',
      'horadesde'   => 'Number',
      'desdeampm'   => 'Number',
      'horahasta'   => 'Number',
      'hastaampm'   => 'Number',
      'hora24desde' => 'Number',
      'hora24hasta' => 'Number',
    );
  }
}
