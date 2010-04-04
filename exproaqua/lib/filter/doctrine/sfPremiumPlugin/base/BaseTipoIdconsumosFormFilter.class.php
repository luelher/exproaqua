<?php

/**
 * TipoIdconsumos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipoIdconsumosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capa_max'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capa_nor'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'capa_max'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'capa_nor'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rutafoto1'  => new sfValidatorPass(array('required' => false)),
      'rutafoto2'  => new sfValidatorPass(array('required' => false)),
      'rutafoto3'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_idconsumos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoIdconsumos';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'capa_max'   => 'Number',
      'capa_nor'   => 'Number',
      'rutafoto1'  => 'Text',
      'rutafoto2'  => 'Text',
      'rutafoto3'  => 'Text',
    );
  }
}
