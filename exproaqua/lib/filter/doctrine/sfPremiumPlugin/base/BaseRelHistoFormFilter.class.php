<?php

/**
 * RelHisto filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelHistoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relacion'   => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'       => new sfWidgetFormFilterInput(),
      'neto_orig'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impu_orig'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_orig' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'neto_hist'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impu_hist'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_hist' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serie'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'relacion'   => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'       => new sfValidatorPass(array('required' => false)),
      'neto_orig'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impu_orig'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_orig' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'neto_hist'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impu_hist'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_hist' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'serie'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_histo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelHisto';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'relacion'   => 'Text',
      'fecha'      => 'Date',
      'hora'       => 'Text',
      'neto_orig'  => 'Number',
      'impu_orig'  => 'Number',
      'total_orig' => 'Number',
      'neto_hist'  => 'Number',
      'impu_hist'  => 'Number',
      'total_hist' => 'Number',
      'serie'      => 'Text',
    );
  }
}
