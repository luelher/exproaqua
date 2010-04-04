<?php

/**
 * Presupti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePresuptiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factura'    => new sfWidgetFormFilterInput(),
      'tipoorden'  => new sfWidgetFormFilterInput(),
      'placa'      => new sfWidgetFormFilterInput(),
      'codmarca'   => new sfWidgetFormFilterInput(),
      'nommarca'   => new sfWidgetFormFilterInput(),
      'codmodelo'  => new sfWidgetFormFilterInput(),
      'nommodelo'  => new sfWidgetFormFilterInput(),
      'codclien'   => new sfWidgetFormFilterInput(),
      'nomclien'   => new sfWidgetFormFilterInput(),
      'rifcli'     => new sfWidgetFormFilterInput(),
      'nitcli'     => new sfWidgetFormFilterInput(),
      'codrespo'   => new sfWidgetFormFilterInput(),
      'nomrespo'   => new sfWidgetFormFilterInput(),
      'rifresp'    => new sfWidgetFormFilterInput(),
      'nitresp'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'       => new sfWidgetFormFilterInput(),
      'referencia' => new sfWidgetFormFilterInput(),
      'tipoprecio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codtecnico' => new sfWidgetFormFilterInput(),
      'nomtecnico' => new sfWidgetFormFilterInput(),
      'codalmacen' => new sfWidgetFormFilterInput(),
      'nomalmacen' => new sfWidgetFormFilterInput(),
      'totneto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totimpu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totcargos'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totdescu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totgeneral' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montorep'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montomobra' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montotot'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totpagado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notas'      => new sfWidgetFormFilterInput(),
      'uemisor'    => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'fechacierr' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'horacierr'  => new sfWidgetFormFilterInput(),
      'usercierr'  => new sfWidgetFormFilterInput(),
      'estacierr'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'factura'    => new sfValidatorPass(array('required' => false)),
      'tipoorden'  => new sfValidatorPass(array('required' => false)),
      'placa'      => new sfValidatorPass(array('required' => false)),
      'codmarca'   => new sfValidatorPass(array('required' => false)),
      'nommarca'   => new sfValidatorPass(array('required' => false)),
      'codmodelo'  => new sfValidatorPass(array('required' => false)),
      'nommodelo'  => new sfValidatorPass(array('required' => false)),
      'codclien'   => new sfValidatorPass(array('required' => false)),
      'nomclien'   => new sfValidatorPass(array('required' => false)),
      'rifcli'     => new sfValidatorPass(array('required' => false)),
      'nitcli'     => new sfValidatorPass(array('required' => false)),
      'codrespo'   => new sfValidatorPass(array('required' => false)),
      'nomrespo'   => new sfValidatorPass(array('required' => false)),
      'rifresp'    => new sfValidatorPass(array('required' => false)),
      'nitresp'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'       => new sfValidatorPass(array('required' => false)),
      'referencia' => new sfValidatorPass(array('required' => false)),
      'tipoprecio' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codtecnico' => new sfValidatorPass(array('required' => false)),
      'nomtecnico' => new sfValidatorPass(array('required' => false)),
      'codalmacen' => new sfValidatorPass(array('required' => false)),
      'nomalmacen' => new sfValidatorPass(array('required' => false)),
      'totneto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totimpu'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totcargos'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totdescu'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totgeneral' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montorep'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montomobra' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montotot'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totpagado'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notas'      => new sfValidatorPass(array('required' => false)),
      'uemisor'    => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'fechacierr' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'horacierr'  => new sfValidatorPass(array('required' => false)),
      'usercierr'  => new sfValidatorPass(array('required' => false)),
      'estacierr'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presupti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Presupti';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'documento'  => 'Text',
      'status'     => 'Number',
      'factura'    => 'Text',
      'tipoorden'  => 'Text',
      'placa'      => 'Text',
      'codmarca'   => 'Text',
      'nommarca'   => 'Text',
      'codmodelo'  => 'Text',
      'nommodelo'  => 'Text',
      'codclien'   => 'Text',
      'nomclien'   => 'Text',
      'rifcli'     => 'Text',
      'nitcli'     => 'Text',
      'codrespo'   => 'Text',
      'nomrespo'   => 'Text',
      'rifresp'    => 'Text',
      'nitresp'    => 'Text',
      'fecha'      => 'Date',
      'hora'       => 'Text',
      'referencia' => 'Text',
      'tipoprecio' => 'Number',
      'codtecnico' => 'Text',
      'nomtecnico' => 'Text',
      'codalmacen' => 'Text',
      'nomalmacen' => 'Text',
      'totneto'    => 'Number',
      'totimpu'    => 'Number',
      'totcargos'  => 'Number',
      'totdescu'   => 'Number',
      'totgeneral' => 'Number',
      'montorep'   => 'Number',
      'montomobra' => 'Number',
      'montotot'   => 'Number',
      'totpagado'  => 'Number',
      'notas'      => 'Text',
      'uemisor'    => 'Text',
      'estacion'   => 'Text',
      'fechacierr' => 'Date',
      'horacierr'  => 'Text',
      'usercierr'  => 'Text',
      'estacierr'  => 'Text',
    );
  }
}
