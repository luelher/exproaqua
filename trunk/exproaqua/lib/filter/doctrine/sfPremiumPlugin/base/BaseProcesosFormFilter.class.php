<?php

/**
 * Procesos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProcesosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modulo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'titulo'     => new sfWidgetFormFilterInput(),
      'programa'   => new sfWidgetFormFilterInput(),
      'clave'      => new sfWidgetFormFilterInput(),
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'modulo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'titulo'     => new sfValidatorPass(array('required' => false)),
      'programa'   => new sfValidatorPass(array('required' => false)),
      'clave'      => new sfValidatorPass(array('required' => false)),
      'tipo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('procesos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procesos';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'modulo'     => 'Number',
      'titulo'     => 'Text',
      'programa'   => 'Text',
      'clave'      => 'Text',
      'tipo'       => 'Number',
      'comentario' => 'Text',
    );
  }
}
