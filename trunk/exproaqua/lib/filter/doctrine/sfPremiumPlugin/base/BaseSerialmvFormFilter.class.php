<?php

/**
 * Serialmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSerialmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serial'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'almacen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatus'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'tipodoc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sumaresta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_id'     => new sfWidgetFormFilterInput(),
      'fecha_doc'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'destino'    => new sfWidgetFormFilterInput(),
      'cliente'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'serial'     => new sfValidatorPass(array('required' => false)),
      'almacen'    => new sfValidatorPass(array('required' => false)),
      'estatus'    => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tipodoc'    => new sfValidatorPass(array('required' => false)),
      'documento'  => new sfValidatorPass(array('required' => false)),
      'sumaresta'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'doc_id'     => new sfValidatorPass(array('required' => false)),
      'fecha_doc'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'destino'    => new sfValidatorPass(array('required' => false)),
      'cliente'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('serialmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Serialmv';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'codigo'     => 'Text',
      'serial'     => 'Text',
      'almacen'    => 'Text',
      'estatus'    => 'Text',
      'agencia'    => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'sumaresta'  => 'Number',
      'doc_id'     => 'Text',
      'fecha_doc'  => 'Date',
      'destino'    => 'Text',
      'cliente'    => 'Text',
    );
  }
}
