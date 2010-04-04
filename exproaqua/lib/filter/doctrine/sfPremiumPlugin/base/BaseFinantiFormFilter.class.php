<?php

/**
 * Finanti filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFinantiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'nombrecli'  => new sfWidgetFormFilterInput(),
      'fiador'     => new sfWidgetFormFilterInput(),
      'cedula'     => new sfWidgetFormFilterInput(),
      'dirhab'     => new sfWidgetFormFilterInput(),
      'dirtrab'    => new sfWidgetFormFilterInput(),
      'telefonos'  => new sfWidgetFormFilterInput(),
      'tipodoc'    => new sfWidgetFormFilterInput(),
      'documento'  => new sfWidgetFormFilterInput(),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inicialprc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inicial'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldoneto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'interesprc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'interes'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestionprc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gastosprc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gastos'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tinicial'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tfinanciar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intervalo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fdesde'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaproc'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(),
      'nodo'       => new sfWidgetFormFilterInput(),
      'fcuota1'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fcuota2'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'mtocuota1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mtocuota2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vendedor'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombrecli'  => new sfValidatorPass(array('required' => false)),
      'fiador'     => new sfValidatorPass(array('required' => false)),
      'cedula'     => new sfValidatorPass(array('required' => false)),
      'dirhab'     => new sfValidatorPass(array('required' => false)),
      'dirtrab'    => new sfValidatorPass(array('required' => false)),
      'telefonos'  => new sfValidatorPass(array('required' => false)),
      'tipodoc'    => new sfValidatorPass(array('required' => false)),
      'documento'  => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'inicialprc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'inicial'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldoneto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'interesprc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'interes'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gestionprc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gestion'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gastosprc'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gastos'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tinicial'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tfinanciar' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'periodos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'intervalo'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fdesde'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechaproc'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'nodo'       => new sfValidatorPass(array('required' => false)),
      'fcuota1'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fcuota2'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'mtocuota1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mtocuota2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vendedor'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('finanti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Finanti';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'finan'      => 'Text',
      'cliente'    => 'Text',
      'nombrecli'  => 'Text',
      'fiador'     => 'Text',
      'cedula'     => 'Text',
      'dirhab'     => 'Text',
      'dirtrab'    => 'Text',
      'telefonos'  => 'Text',
      'tipodoc'    => 'Text',
      'documento'  => 'Text',
      'monto'      => 'Number',
      'inicialprc' => 'Number',
      'inicial'    => 'Number',
      'saldoneto'  => 'Number',
      'interesprc' => 'Number',
      'interes'    => 'Number',
      'gestionprc' => 'Number',
      'gestion'    => 'Number',
      'gastosprc'  => 'Number',
      'gastos'     => 'Number',
      'tinicial'   => 'Number',
      'tfinanciar' => 'Number',
      'periodos'   => 'Number',
      'intervalo'  => 'Number',
      'fdesde'     => 'Date',
      'fechaproc'  => 'Date',
      'usuario'    => 'Text',
      'nodo'       => 'Text',
      'fcuota1'    => 'Date',
      'fcuota2'    => 'Date',
      'mtocuota1'  => 'Number',
      'mtocuota2'  => 'Number',
      'vendedor'   => 'Text',
    );
  }
}
