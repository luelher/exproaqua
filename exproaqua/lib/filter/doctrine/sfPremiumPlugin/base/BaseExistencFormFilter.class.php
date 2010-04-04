<?php

/**
 * Existenc filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseExistencFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupo'      => new sfWidgetFormFilterInput(),
      'existencia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ubicacion'  => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'documento'  => new sfWidgetFormFilterInput(),
      'tipodoc'    => new sfWidgetFormFilterInput(),
      'fechacrea'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'existencia' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ubicacion'  => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'documento'  => new sfValidatorPass(array('required' => false)),
      'tipodoc'    => new sfValidatorPass(array('required' => false)),
      'fechacrea'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('existenc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Existenc';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'grupo'      => 'Text',
      'almacen'    => 'Text',
      'existencia' => 'Number',
      'ubicacion'  => 'Text',
      'usuario'    => 'Text',
      'documento'  => 'Text',
      'tipodoc'    => 'Text',
      'fechacrea'  => 'Date',
    );
  }
}
