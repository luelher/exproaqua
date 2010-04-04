<?php

/**
 * Empresas filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmpresasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(),
      'telefonos'     => new sfWidgetFormFilterInput(),
      'fax'           => new sfWidgetFormFilterInput(),
      'numerorif'     => new sfWidgetFormFilterInput(),
      'numeronit'     => new sfWidgetFormFilterInput(),
      'website'       => new sfWidgetFormFilterInput(),
      'email'         => new sfWidgetFormFilterInput(),
      'contacto'      => new sfWidgetFormFilterInput(),
      'predeter'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'soporte1'      => new sfWidgetFormFilterInput(),
      'soporte2'      => new sfWidgetFormFilterInput(),
      'soporte3'      => new sfWidgetFormFilterInput(),
      'data_usaweb'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'data_servidor' => new sfWidgetFormFilterInput(),
      'data_usuario'  => new sfWidgetFormFilterInput(),
      'data_password' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'telefonos'     => new sfValidatorPass(array('required' => false)),
      'fax'           => new sfValidatorPass(array('required' => false)),
      'numerorif'     => new sfValidatorPass(array('required' => false)),
      'numeronit'     => new sfValidatorPass(array('required' => false)),
      'website'       => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'contacto'      => new sfValidatorPass(array('required' => false)),
      'predeter'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'soporte1'      => new sfValidatorPass(array('required' => false)),
      'soporte2'      => new sfValidatorPass(array('required' => false)),
      'soporte3'      => new sfValidatorPass(array('required' => false)),
      'data_usaweb'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'data_servidor' => new sfValidatorPass(array('required' => false)),
      'data_usuario'  => new sfValidatorPass(array('required' => false)),
      'data_password' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresas';
  }

  public function getFields()
  {
    return array(
      'id_empresa'    => 'Text',
      'nombre'        => 'Text',
      'direccion'     => 'Text',
      'telefonos'     => 'Text',
      'fax'           => 'Text',
      'numerorif'     => 'Text',
      'numeronit'     => 'Text',
      'website'       => 'Text',
      'email'         => 'Text',
      'contacto'      => 'Text',
      'predeter'      => 'Number',
      'soporte1'      => 'Text',
      'soporte2'      => 'Text',
      'soporte3'      => 'Text',
      'data_usaweb'   => 'Number',
      'data_servidor' => 'Text',
      'data_usuario'  => 'Text',
      'data_password' => 'Text',
    );
  }
}
