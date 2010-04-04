<?php

/**
 * Compmov filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCompmovFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'codigo'     => new sfWidgetFormFilterInput(),
      'cuenta'     => new sfWidgetFormFilterInput(),
      'descr'      => new sfWidgetFormFilterInput(),
      'debe'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'haber'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'referencia' => new sfWidgetFormFilterInput(),
      'cencos'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'cuenta'     => new sfValidatorPass(array('required' => false)),
      'descr'      => new sfValidatorPass(array('required' => false)),
      'debe'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'haber'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'referencia' => new sfValidatorPass(array('required' => false)),
      'cencos'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('compmov_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Compmov';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'cuenta'     => 'Text',
      'descr'      => 'Text',
      'debe'       => 'Number',
      'haber'      => 'Number',
      'fecha'      => 'Date',
      'referencia' => 'Text',
      'cencos'     => 'Text',
    );
  }
}
