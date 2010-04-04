<?php

/**
 * Relativen filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelativenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'nombreven'  => new sfWidgetFormFilterInput(),
      'concepto'   => new sfWidgetFormFilterInput(),
      'totrel'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cret1'      => new sfWidgetFormFilterInput(),
      'cret2'      => new sfWidgetFormFilterInput(),
      'nret1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nret2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tret'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tfinal'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statusrel'  => new sfWidgetFormFilterInput(),
      'fechap'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombreven'  => new sfValidatorPass(array('required' => false)),
      'concepto'   => new sfValidatorPass(array('required' => false)),
      'totrel'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cret1'      => new sfValidatorPass(array('required' => false)),
      'cret2'      => new sfValidatorPass(array('required' => false)),
      'nret1'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nret2'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tret'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tfinal'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'statusrel'  => new sfValidatorPass(array('required' => false)),
      'fechap'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('relativen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relativen';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'relacion'   => 'Text',
      'comprobant' => 'Text',
      'codigoven'  => 'Text',
      'nombreven'  => 'Text',
      'concepto'   => 'Text',
      'totrel'     => 'Number',
      'cret1'      => 'Text',
      'cret2'      => 'Text',
      'nret1'      => 'Number',
      'nret2'      => 'Number',
      'tret'       => 'Number',
      'tfinal'     => 'Number',
      'statusrel'  => 'Text',
      'fechap'     => 'Date',
    );
  }
}
