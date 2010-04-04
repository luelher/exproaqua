<?php

/**
 * Userlist filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserlistFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'node_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'node_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechayhora' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'node_name'  => new sfValidatorPass(array('required' => false)),
      'node_id'    => new sfValidatorPass(array('required' => false)),
      'fechayhora' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('userlist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Userlist';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'usuario'    => 'Text',
      'node_name'  => 'Text',
      'node_id'    => 'Text',
      'fechayhora' => 'Date',
    );
  }
}
