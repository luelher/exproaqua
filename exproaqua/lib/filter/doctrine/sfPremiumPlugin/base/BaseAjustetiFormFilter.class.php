<?php

/**
 * Ajusteti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAjustetiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'realizador' => new sfWidgetFormFilterInput(),
      'aprobador'  => new sfWidgetFormFilterInput(),
      'femision'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'concepto'   => new sfWidgetFormFilterInput(),
      'numart'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tcosto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tperdida'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tutilidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deposito'   => new sfWidgetFormFilterInput(),
      'grupo'      => new sfWidgetFormFilterInput(),
      'origen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'realizador' => new sfValidatorPass(array('required' => false)),
      'aprobador'  => new sfValidatorPass(array('required' => false)),
      'femision'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'concepto'   => new sfValidatorPass(array('required' => false)),
      'numart'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcosto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tperdida'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tutilidad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'deposito'   => new sfValidatorPass(array('required' => false)),
      'grupo'      => new sfValidatorPass(array('required' => false)),
      'origen'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ajusteti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ajusteti';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'realizador' => 'Text',
      'aprobador'  => 'Text',
      'femision'   => 'Date',
      'concepto'   => 'Text',
      'numart'     => 'Number',
      'tcosto'     => 'Number',
      'tperdida'   => 'Number',
      'tutilidad'  => 'Number',
      'deposito'   => 'Text',
      'grupo'      => 'Text',
      'origen'     => 'Number',
    );
  }
}
