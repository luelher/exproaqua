<?php

/**
 * Funcione filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFuncioneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'autor'      => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ultact'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'coment'     => new sfWidgetFormFilterInput(),
      'parametr'   => new sfWidgetFormFilterInput(),
      'docparam'   => new sfWidgetFormFilterInput(),
      'desarrollo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'autor'      => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ultact'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'coment'     => new sfValidatorPass(array('required' => false)),
      'parametr'   => new sfValidatorPass(array('required' => false)),
      'docparam'   => new sfValidatorPass(array('required' => false)),
      'desarrollo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('funcione_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcione';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'nombre'     => 'Text',
      'autor'      => 'Text',
      'fecha'      => 'Date',
      'ultact'     => 'Date',
      'coment'     => 'Text',
      'parametr'   => 'Text',
      'docparam'   => 'Text',
      'desarrollo' => 'Text',
    );
  }
}
