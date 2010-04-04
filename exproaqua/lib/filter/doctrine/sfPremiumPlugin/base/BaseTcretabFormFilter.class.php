<?php

/**
 * Tcretab filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTcretabFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'          => new sfWidgetFormFilterInput(),
      'banco'           => new sfWidgetFormFilterInput(),
      'prcretencion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuentacont'      => new sfWidgetFormFilterInput(),
      'cuentacont_comi' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'      => new sfValidatorPass(array('required' => false)),
      'agencia'         => new sfValidatorPass(array('required' => false)),
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'banco'           => new sfValidatorPass(array('required' => false)),
      'prcretencion'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cuentacont'      => new sfValidatorPass(array('required' => false)),
      'cuentacont_comi' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tcretab_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tcretab';
  }

  public function getFields()
  {
    return array(
      'id_empresa'      => 'Text',
      'agencia'         => 'Text',
      'codigo'          => 'Text',
      'nombre'          => 'Text',
      'banco'           => 'Text',
      'prcretencion'    => 'Number',
      'comision'        => 'Number',
      'cuentacont'      => 'Text',
      'cuentacont_comi' => 'Text',
    );
  }
}
