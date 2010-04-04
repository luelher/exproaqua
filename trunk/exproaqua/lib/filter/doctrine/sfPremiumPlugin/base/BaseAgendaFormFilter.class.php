<?php

/**
 * Agenda filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAgendaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'manana'     => new sfWidgetFormFilterInput(),
      'tarde'      => new sfWidgetFormFilterInput(),
      'noche'      => new sfWidgetFormFilterInput(),
      'rmanana'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rtarde'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rnoche'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'manana'     => new sfValidatorPass(array('required' => false)),
      'tarde'      => new sfValidatorPass(array('required' => false)),
      'noche'      => new sfValidatorPass(array('required' => false)),
      'rmanana'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rtarde'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rnoche'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('agenda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agenda';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'usuario'    => 'Text',
      'fecha'      => 'Date',
      'manana'     => 'Text',
      'tarde'      => 'Text',
      'noche'      => 'Text',
      'rmanana'    => 'Number',
      'rtarde'     => 'Number',
      'rnoche'     => 'Number',
    );
  }
}
