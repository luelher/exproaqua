<?php

/**
 * Produccion filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProduccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'codigoi'    => new sfWidgetFormFilterInput(),
      'nombrei'    => new sfWidgetFormFilterInput(),
      'codigop'    => new sfWidgetFormFilterInput(),
      'nombrep'    => new sfWidgetFormFilterInput(),
      'cantidadp'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'     => new sfWidgetFormFilterInput(),
      'depositoo'  => new sfWidgetFormFilterInput(),
      'depositor'  => new sfWidgetFormFilterInput(),
      'depositod'  => new sfWidgetFormFilterInput(),
      'realizador' => new sfWidgetFormFilterInput(),
      'responsab'  => new sfWidgetFormFilterInput(),
      'concepto'   => new sfWidgetFormFilterInput(),
      'prioridad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lote'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'codigoi'    => new sfValidatorPass(array('required' => false)),
      'nombrei'    => new sfValidatorPass(array('required' => false)),
      'codigop'    => new sfValidatorPass(array('required' => false)),
      'nombrep'    => new sfValidatorPass(array('required' => false)),
      'cantidadp'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidad'     => new sfValidatorPass(array('required' => false)),
      'depositoo'  => new sfValidatorPass(array('required' => false)),
      'depositor'  => new sfValidatorPass(array('required' => false)),
      'depositod'  => new sfValidatorPass(array('required' => false)),
      'realizador' => new sfValidatorPass(array('required' => false)),
      'responsab'  => new sfValidatorPass(array('required' => false)),
      'concepto'   => new sfValidatorPass(array('required' => false)),
      'prioridad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'lote'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('produccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Produccion';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'fecha'      => 'Date',
      'codigoi'    => 'Text',
      'nombrei'    => 'Text',
      'codigop'    => 'Text',
      'nombrep'    => 'Text',
      'cantidadp'  => 'Number',
      'unidad'     => 'Text',
      'depositoo'  => 'Text',
      'depositor'  => 'Text',
      'depositod'  => 'Text',
      'realizador' => 'Text',
      'responsab'  => 'Text',
      'concepto'   => 'Text',
      'prioridad'  => 'Number',
      'lote'       => 'Text',
    );
  }
}
