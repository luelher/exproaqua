<?php

/**
 * Conveniostabmv filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConveniostabmvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormFilterInput(),
      'agencia'      => new sfWidgetFormFilterInput(),
      'idconvenio'   => new sfWidgetFormFilterInput(),
      'codgrupo'     => new sfWidgetFormFilterInput(),
      'codsubgrupo'  => new sfWidgetFormFilterInput(),
      'prcdescuento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorPass(array('required' => false)),
      'agencia'      => new sfValidatorPass(array('required' => false)),
      'idconvenio'   => new sfValidatorPass(array('required' => false)),
      'codgrupo'     => new sfValidatorPass(array('required' => false)),
      'codsubgrupo'  => new sfValidatorPass(array('required' => false)),
      'prcdescuento' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('conveniostabmv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Conveniostabmv';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_empresa'   => 'Text',
      'agencia'      => 'Text',
      'idconvenio'   => 'Text',
      'codgrupo'     => 'Text',
      'codsubgrupo'  => 'Text',
      'prcdescuento' => 'Number',
    );
  }
}
