<?php

/**
 * Comisioncont filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComisioncontFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'documento'  => new sfWidgetFormFilterInput(),
      'solicitant' => new sfWidgetFormFilterInput(),
      'fechacont'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'codvend'    => new sfWidgetFormFilterInput(),
      'tipovend'   => new sfWidgetFormFilterInput(),
      'nombrecomi' => new sfWidgetFormFilterInput(),
      'montovend'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipoagente' => new sfWidgetFormFilterInput(),
      'nomcomiag'  => new sfWidgetFormFilterInput(),
      'montoagen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pago'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechanul'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'motivo'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tipo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'documento'  => new sfValidatorPass(array('required' => false)),
      'solicitant' => new sfValidatorPass(array('required' => false)),
      'fechacont'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'codvend'    => new sfValidatorPass(array('required' => false)),
      'tipovend'   => new sfValidatorPass(array('required' => false)),
      'nombrecomi' => new sfValidatorPass(array('required' => false)),
      'montovend'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipoagente' => new sfValidatorPass(array('required' => false)),
      'nomcomiag'  => new sfValidatorPass(array('required' => false)),
      'montoagen'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pago'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechanul'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'motivo'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comisioncont_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comisioncont';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tipo'       => 'Number',
      'documento'  => 'Text',
      'solicitant' => 'Text',
      'fechacont'  => 'Date',
      'codvend'    => 'Text',
      'tipovend'   => 'Text',
      'nombrecomi' => 'Text',
      'montovend'  => 'Number',
      'tipoagente' => 'Text',
      'nomcomiag'  => 'Text',
      'montoagen'  => 'Number',
      'status'     => 'Number',
      'pago'       => 'Date',
      'fechanul'   => 'Date',
      'motivo'     => 'Text',
    );
  }
}
