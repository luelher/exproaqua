<?php

/**
 * Concilia filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConciliaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreban'  => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'nodo'       => new sfWidgetFormFilterInput(),
      'hora'       => new sfWidgetFormFilterInput(),
      'mesante'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldoante'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deposito1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ndeposito1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notacre1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nnotacre1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notadeb1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nnotadeb1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheque1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ncheque1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'retiro1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nretiro1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldoconci' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'edocta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'resultado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deposito2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ndeposito2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notacre2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nnotacre2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notadeb2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nnotadeb2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheque2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ncheque2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'retiro2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nretiro2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldoenlib' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombreban'  => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'nodo'       => new sfValidatorPass(array('required' => false)),
      'hora'       => new sfValidatorPass(array('required' => false)),
      'mesante'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldoante'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'deposito1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ndeposito1' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notacre1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nnotacre1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notadeb1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nnotadeb1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cheque1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ncheque1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'retiro1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nretiro1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldoconci' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'edocta'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'resultado'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'deposito2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ndeposito2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notacre2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nnotacre2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'notadeb2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nnotadeb2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cheque2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ncheque2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'retiro2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nretiro2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldoenlib' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('concilia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Concilia';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'numero'     => 'Text',
      'codigoban'  => 'Text',
      'nombreban'  => 'Text',
      'mes'        => 'Number',
      'concilyear' => 'Number',
      'fconcilia'  => 'Date',
      'usuario'    => 'Text',
      'nodo'       => 'Text',
      'hora'       => 'Text',
      'mesante'    => 'Number',
      'saldoante'  => 'Number',
      'deposito1'  => 'Number',
      'ndeposito1' => 'Number',
      'notacre1'   => 'Number',
      'nnotacre1'  => 'Number',
      'notadeb1'   => 'Number',
      'nnotadeb1'  => 'Number',
      'cheque1'    => 'Number',
      'ncheque1'   => 'Number',
      'retiro1'    => 'Number',
      'nretiro1'   => 'Number',
      'saldoconci' => 'Number',
      'edocta'     => 'Number',
      'resultado'  => 'Number',
      'deposito2'  => 'Number',
      'ndeposito2' => 'Number',
      'notacre2'   => 'Number',
      'nnotacre2'  => 'Number',
      'notadeb2'   => 'Number',
      'nnotadeb2'  => 'Number',
      'cheque2'    => 'Number',
      'ncheque2'   => 'Number',
      'retiro2'    => 'Number',
      'nretiro2'   => 'Number',
      'saldoenlib' => 'Number',
    );
  }
}
