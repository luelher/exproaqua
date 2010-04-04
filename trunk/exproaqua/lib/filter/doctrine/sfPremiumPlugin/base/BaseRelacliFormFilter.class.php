<?php

/**
 * Relacli filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelacliFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'porcentaje'     => new sfWidgetFormFilterInput(),
      'tiporelacion'   => new sfWidgetFormFilterInput(),
      'primario'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'porcentaje'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tiporelacion'   => new sfValidatorPass(array('required' => false)),
      'primario'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('relacli_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relacli';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'codcliente'     => 'Text',
      'codrelacionado' => 'Text',
      'porcentaje'     => 'Number',
      'tiporelacion'   => 'Text',
      'primario'       => 'Number',
    );
  }
}
