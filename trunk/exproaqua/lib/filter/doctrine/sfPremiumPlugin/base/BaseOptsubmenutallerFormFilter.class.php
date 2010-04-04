<?php

/**
 * Optsubmenutaller filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOptsubmenutallerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(),
      'agencia'    => new sfWidgetFormFilterInput(),
      'codigo'     => new sfWidgetFormFilterInput(),
      'idcodigo'   => new sfWidgetFormFilterInput(),
      'orden'      => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'idcodigo'   => new sfValidatorPass(array('required' => false)),
      'orden'      => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('optsubmenutaller_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Optsubmenutaller';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'idcodigo'   => 'Text',
      'orden'      => 'Text',
      'nombre'     => 'Text',
    );
  }
}
