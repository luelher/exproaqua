<?php

/**
 * Telefono filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTelefonoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'     => new sfWidgetFormFilterInput(),
      'apellido'   => new sfWidgetFormFilterInput(),
      'empresa'    => new sfWidgetFormFilterInput(),
      'direccion'  => new sfWidgetFormFilterInput(),
      'telefono'   => new sfWidgetFormFilterInput(),
      'fax'        => new sfWidgetFormFilterInput(),
      'website'    => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(),
      'notas'      => new sfWidgetFormFilterInput(),
      'confiden'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'apellido'   => new sfValidatorPass(array('required' => false)),
      'empresa'    => new sfValidatorPass(array('required' => false)),
      'direccion'  => new sfValidatorPass(array('required' => false)),
      'telefono'   => new sfValidatorPass(array('required' => false)),
      'fax'        => new sfValidatorPass(array('required' => false)),
      'website'    => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'notas'      => new sfValidatorPass(array('required' => false)),
      'confiden'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usuario'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('telefono_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Telefono';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'nombre'     => 'Text',
      'apellido'   => 'Text',
      'empresa'    => 'Text',
      'direccion'  => 'Text',
      'telefono'   => 'Text',
      'fax'        => 'Text',
      'website'    => 'Text',
      'email'      => 'Text',
      'notas'      => 'Text',
      'confiden'   => 'Number',
      'usuario'    => 'Text',
    );
  }
}
