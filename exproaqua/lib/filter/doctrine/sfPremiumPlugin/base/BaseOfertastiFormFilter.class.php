<?php

/**
 * Ofertasti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOfertastiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'      => new sfWidgetFormFilterInput(),
      'titulo'       => new sfWidgetFormFilterInput(),
      'fechadesde'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechahasta'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario_crea' => new sfWidgetFormFilterInput(),
      'estacion'     => new sfWidgetFormFilterInput(),
      'fecha_crea'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dias_semana'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'titulo'       => new sfValidatorPass(array('required' => false)),
      'fechadesde'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechahasta'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'usuario_crea' => new sfValidatorPass(array('required' => false)),
      'estacion'     => new sfValidatorPass(array('required' => false)),
      'fecha_crea'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dias_semana'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ofertasti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ofertasti';
  }

  public function getFields()
  {
    return array(
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'idoferta'     => 'Text',
      'titulo'       => 'Text',
      'fechadesde'   => 'Date',
      'fechahasta'   => 'Date',
      'usuario_crea' => 'Text',
      'estacion'     => 'Text',
      'fecha_crea'   => 'Date',
      'dias_semana'  => 'Text',
    );
  }
}
