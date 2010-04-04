<?php

/**
 * Opergast filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOpergastFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'caja'          => new sfWidgetFormFilterInput(),
      'tiporec'       => new sfWidgetFormFilterInput(),
      'fecha'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monto'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concepto'      => new sfWidgetFormFilterInput(),
      'bcocheqcod'    => new sfWidgetFormFilterInput(),
      'bcocheqnom'    => new sfWidgetFormFilterInput(),
      'bcocheqmto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bcocheqnro'    => new sfWidgetFormFilterInput(),
      'codigotar'     => new sfWidgetFormFilterInput(),
      'bancotar'      => new sfWidgetFormFilterInput(),
      'mtotarjeta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nrotarjeta'    => new sfWidgetFormFilterInput(),
      'efectivo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tardebcod'     => new sfWidgetFormFilterInput(),
      'tardebnom'     => new sfWidgetFormFilterInput(),
      'tardebnum'     => new sfWidgetFormFilterInput(),
      'tardebmto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codcli'        => new sfWidgetFormFilterInput(),
      'nomcliente'    => new sfWidgetFormFilterInput(),
      'cobrador'      => new sfWidgetFormFilterInput(),
      'fechaanul'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_anul'     => new sfWidgetFormFilterInput(),
      'prc_comi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mto_comi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatusrec'    => new sfWidgetFormFilterInput(),
      'operac'        => new sfWidgetFormFilterInput(),
      'motanul'       => new sfWidgetFormFilterInput(),
      'user_emi'      => new sfWidgetFormFilterInput(),
      'procedecre'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'integrado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horadocum'     => new sfWidgetFormFilterInput(),
      'ampm'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno'         => new sfWidgetFormFilterInput(),
      'otraforma'     => new sfWidgetFormFilterInput(),
      'mto_otraforma' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notadeb'       => new sfWidgetFormFilterInput(),
      'mtonotadeb'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'caja'          => new sfValidatorPass(array('required' => false)),
      'tiporec'       => new sfValidatorPass(array('required' => false)),
      'fecha'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'monto'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concepto'      => new sfValidatorPass(array('required' => false)),
      'bcocheqcod'    => new sfValidatorPass(array('required' => false)),
      'bcocheqnom'    => new sfValidatorPass(array('required' => false)),
      'bcocheqmto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bcocheqnro'    => new sfValidatorPass(array('required' => false)),
      'codigotar'     => new sfValidatorPass(array('required' => false)),
      'bancotar'      => new sfValidatorPass(array('required' => false)),
      'mtotarjeta'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nrotarjeta'    => new sfValidatorPass(array('required' => false)),
      'efectivo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tardebcod'     => new sfValidatorPass(array('required' => false)),
      'tardebnom'     => new sfValidatorPass(array('required' => false)),
      'tardebnum'     => new sfValidatorPass(array('required' => false)),
      'tardebmto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codcli'        => new sfValidatorPass(array('required' => false)),
      'nomcliente'    => new sfValidatorPass(array('required' => false)),
      'cobrador'      => new sfValidatorPass(array('required' => false)),
      'fechaanul'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'user_anul'     => new sfValidatorPass(array('required' => false)),
      'prc_comi'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mto_comi'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estatusrec'    => new sfValidatorPass(array('required' => false)),
      'operac'        => new sfValidatorPass(array('required' => false)),
      'motanul'       => new sfValidatorPass(array('required' => false)),
      'user_emi'      => new sfValidatorPass(array('required' => false)),
      'procedecre'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'integrado'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'horadocum'     => new sfValidatorPass(array('required' => false)),
      'ampm'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'turno'         => new sfValidatorPass(array('required' => false)),
      'otraforma'     => new sfValidatorPass(array('required' => false)),
      'mto_otraforma' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notadeb'       => new sfValidatorPass(array('required' => false)),
      'mtonotadeb'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('opergast_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opergast';
  }

  public function getFields()
  {
    return array(
      'id_empresa'    => 'Text',
      'agencia'       => 'Text',
      'caja'          => 'Text',
      'tiporec'       => 'Text',
      'tipodoc'       => 'Text',
      'documento'     => 'Text',
      'recibo'        => 'Text',
      'fecha'         => 'Date',
      'monto'         => 'Number',
      'concepto'      => 'Text',
      'bcocheqcod'    => 'Text',
      'bcocheqnom'    => 'Text',
      'bcocheqmto'    => 'Number',
      'bcocheqnro'    => 'Text',
      'codigotar'     => 'Text',
      'bancotar'      => 'Text',
      'mtotarjeta'    => 'Number',
      'nrotarjeta'    => 'Text',
      'efectivo'      => 'Number',
      'tardebcod'     => 'Text',
      'tardebnom'     => 'Text',
      'tardebnum'     => 'Text',
      'tardebmto'     => 'Number',
      'codcli'        => 'Text',
      'nomcliente'    => 'Text',
      'cobrador'      => 'Text',
      'fechaanul'     => 'Date',
      'user_anul'     => 'Text',
      'prc_comi'      => 'Number',
      'mto_comi'      => 'Number',
      'estatusrec'    => 'Text',
      'operac'        => 'Text',
      'motanul'       => 'Text',
      'user_emi'      => 'Text',
      'procedecre'    => 'Number',
      'integrado'     => 'Number',
      'horadocum'     => 'Text',
      'ampm'          => 'Number',
      'turno'         => 'Text',
      'otraforma'     => 'Text',
      'mto_otraforma' => 'Number',
      'notadeb'       => 'Text',
      'mtonotadeb'    => 'Number',
    );
  }
}
