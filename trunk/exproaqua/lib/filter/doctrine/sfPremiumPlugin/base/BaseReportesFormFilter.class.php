<?php

/**
 * Reportes filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseReportesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(),
      'namereport' => new sfWidgetFormFilterInput(),
      'titulo'     => new sfWidgetFormFilterInput(),
      'descrip'    => new sfWidgetFormFilterInput(),
      'condicion'  => new sfWidgetFormFilterInput(),
      'tipocond'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'namereport' => new sfValidatorPass(array('required' => false)),
      'titulo'     => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'condicion'  => new sfValidatorPass(array('required' => false)),
      'tipocond'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reportes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reportes';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tipo'       => 'Text',
      'namereport' => 'Text',
      'titulo'     => 'Text',
      'descrip'    => 'Text',
      'condicion'  => 'Text',
      'tipocond'   => 'Number',
    );
  }
}
