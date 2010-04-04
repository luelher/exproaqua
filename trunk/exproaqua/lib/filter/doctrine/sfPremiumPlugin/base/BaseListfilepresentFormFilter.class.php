<?php

/**
 * Listfilepresent filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseListfilepresentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormFilterInput(),
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'archivo'    => new sfWidgetFormFilterInput(),
      'duracion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPass(array('required' => false)),
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'archivo'    => new sfValidatorPass(array('required' => false)),
      'duracion'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('listfilepresent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listfilepresent';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Text',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'archivo'    => 'Text',
      'duracion'   => 'Number',
    );
  }
}
