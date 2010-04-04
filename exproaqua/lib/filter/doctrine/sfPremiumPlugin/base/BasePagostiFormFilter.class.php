<?php

/**
 * Pagosti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePagostiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipopago'   => new sfWidgetFormFilterInput(),
      'documprov'  => new sfWidgetFormFilterInput(),
      'comprob'    => new sfWidgetFormFilterInput(),
      'codigoprov' => new sfWidgetFormFilterInput(),
      'nombreprov' => new sfWidgetFormFilterInput(),
      'fpago'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'totpagos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'retencion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_retenc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totiva'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concepto'   => new sfWidgetFormFilterInput(),
      'seleccion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bancocheq'  => new sfWidgetFormFilterInput(),
      'montocheq'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'efectivo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'caja'       => new sfWidgetFormFilterInput(),
      'banco'      => new sfWidgetFormFilterInput(),
      'chequenro'  => new sfWidgetFormFilterInput(),
      'statuspag'  => new sfWidgetFormFilterInput(),
      'uanulador'  => new sfWidgetFormFilterInput(),
      'uemisor'    => new sfWidgetFormFilterInput(),
      'fechanul'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emifecha'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'tipopago'   => new sfValidatorPass(array('required' => false)),
      'documprov'  => new sfValidatorPass(array('required' => false)),
      'comprob'    => new sfValidatorPass(array('required' => false)),
      'codigoprov' => new sfValidatorPass(array('required' => false)),
      'nombreprov' => new sfValidatorPass(array('required' => false)),
      'fpago'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'totpagos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'retencion'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_retenc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totiva'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concepto'   => new sfValidatorPass(array('required' => false)),
      'seleccion'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bancocheq'  => new sfValidatorPass(array('required' => false)),
      'montocheq'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'efectivo'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'caja'       => new sfValidatorPass(array('required' => false)),
      'banco'      => new sfValidatorPass(array('required' => false)),
      'chequenro'  => new sfValidatorPass(array('required' => false)),
      'statuspag'  => new sfValidatorPass(array('required' => false)),
      'uanulador'  => new sfValidatorPass(array('required' => false)),
      'uemisor'    => new sfValidatorPass(array('required' => false)),
      'fechanul'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'emifecha'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('pagosti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pagosti';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'tipodoc'    => 'Text',
      'tipopago'   => 'Text',
      'documprov'  => 'Text',
      'comprob'    => 'Text',
      'codigoprov' => 'Text',
      'nombreprov' => 'Text',
      'documento'  => 'Text',
      'fpago'      => 'Date',
      'totpagos'   => 'Number',
      'retencion'  => 'Number',
      'por_retenc' => 'Number',
      'totiva'     => 'Number',
      'concepto'   => 'Text',
      'seleccion'  => 'Number',
      'bancocheq'  => 'Text',
      'montocheq'  => 'Number',
      'efectivo'   => 'Number',
      'caja'       => 'Text',
      'banco'      => 'Text',
      'chequenro'  => 'Text',
      'statuspag'  => 'Text',
      'uanulador'  => 'Text',
      'uemisor'    => 'Text',
      'fechanul'   => 'Date',
      'monto'      => 'Number',
      'emifecha'   => 'Date',
    );
  }
}
