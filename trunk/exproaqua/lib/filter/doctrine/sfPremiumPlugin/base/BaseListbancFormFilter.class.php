<?php

/**
 * Listbanc filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseListbancFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banco'      => new sfWidgetFormFilterInput(),
      'direccion'  => new sfWidgetFormFilterInput(),
      'represent'  => new sfWidgetFormFilterInput(),
      'telefonos'  => new sfWidgetFormFilterInput(),
      'cuentaban'  => new sfWidgetFormFilterInput(),
      'tipocta'    => new sfWidgetFormFilterInput(),
      'titular'    => new sfWidgetFormFilterInput(),
      'apertura'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'moneda'     => new sfWidgetFormFilterInput(),
      'porcent'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'wwwsite'    => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(),
      'cuentacon'  => new sfWidgetFormFilterInput(),
      'naturaleza' => new sfWidgetFormFilterInput(),
      'topenat'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formato'    => new sfWidgetFormFilterInput(),
      'proximoch'  => new sfWidgetFormFilterInput(),
      'notacred'   => new sfWidgetFormFilterInput(),
      'notadeb'    => new sfWidgetFormFilterInput(),
      'ultconcil'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultmescon'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_ene' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_feb' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_mar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_abr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_may' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_jun' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_jul' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_ago' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_sep' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_oct' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_nov' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'concil_dic' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actualyear' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentanac'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'asientcont' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'difmisban'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'difplaza'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diffuerapl' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigocont' => new sfWidgetFormFilterInput(),
      'idconcilia' => new sfWidgetFormFilterInput(),
      'ctadebban'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'banco'      => new sfValidatorPass(array('required' => false)),
      'direccion'  => new sfValidatorPass(array('required' => false)),
      'represent'  => new sfValidatorPass(array('required' => false)),
      'telefonos'  => new sfValidatorPass(array('required' => false)),
      'cuentaban'  => new sfValidatorPass(array('required' => false)),
      'tipocta'    => new sfValidatorPass(array('required' => false)),
      'titular'    => new sfValidatorPass(array('required' => false)),
      'apertura'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'porcent'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'wwwsite'    => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'cuentacon'  => new sfValidatorPass(array('required' => false)),
      'naturaleza' => new sfValidatorPass(array('required' => false)),
      'topenat'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'formato'    => new sfValidatorPass(array('required' => false)),
      'proximoch'  => new sfValidatorPass(array('required' => false)),
      'notacred'   => new sfValidatorPass(array('required' => false)),
      'notadeb'    => new sfValidatorPass(array('required' => false)),
      'ultconcil'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ultmescon'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_ene' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_feb' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_mar' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_abr' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_may' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_jun' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_jul' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_ago' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_sep' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_oct' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_nov' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concil_dic' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'actualyear' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentanac'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'asientcont' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'difmisban'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'difplaza'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diffuerapl' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codigocont' => new sfValidatorPass(array('required' => false)),
      'idconcilia' => new sfValidatorPass(array('required' => false)),
      'ctadebban'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listbanc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listbanc';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'banco'      => 'Text',
      'direccion'  => 'Text',
      'represent'  => 'Text',
      'telefonos'  => 'Text',
      'cuentaban'  => 'Text',
      'tipocta'    => 'Text',
      'titular'    => 'Text',
      'apertura'   => 'Date',
      'moneda'     => 'Text',
      'porcent'    => 'Number',
      'wwwsite'    => 'Text',
      'email'      => 'Text',
      'cuentacon'  => 'Text',
      'naturaleza' => 'Text',
      'topenat'    => 'Number',
      'formato'    => 'Text',
      'proximoch'  => 'Text',
      'notacred'   => 'Text',
      'notadeb'    => 'Text',
      'ultconcil'  => 'Number',
      'ultmescon'  => 'Number',
      'concil_ene' => 'Number',
      'concil_feb' => 'Number',
      'concil_mar' => 'Number',
      'concil_abr' => 'Number',
      'concil_may' => 'Number',
      'concil_jun' => 'Number',
      'concil_jul' => 'Number',
      'concil_ago' => 'Number',
      'concil_sep' => 'Number',
      'concil_oct' => 'Number',
      'concil_nov' => 'Number',
      'concil_dic' => 'Number',
      'actualyear' => 'Number',
      'cuentanac'  => 'Number',
      'asientcont' => 'Number',
      'difmisban'  => 'Number',
      'difplaza'   => 'Number',
      'diffuerapl' => 'Number',
      'codigocont' => 'Text',
      'idconcilia' => 'Text',
      'ctadebban'  => 'Text',
    );
  }
}
