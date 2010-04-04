<?php

/**
 * Artiprov filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArtiprovFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'costonac'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costoex'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechalista' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'referencia' => new sfWidgetFormFilterInput(),
      'marca'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'costonac'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costoex'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechalista' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'referencia' => new sfValidatorPass(array('required' => false)),
      'marca'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('artiprov_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artiprov';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'proveedor'  => 'Text',
      'nombre'     => 'Text',
      'costonac'   => 'Number',
      'costoex'    => 'Number',
      'fechalista' => 'Date',
      'referencia' => 'Text',
      'marca'      => 'Number',
    );
  }
}
