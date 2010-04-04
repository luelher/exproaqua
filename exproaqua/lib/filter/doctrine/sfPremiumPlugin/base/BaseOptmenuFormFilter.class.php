<?php

/**
 * Optmenu filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOptmenuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modulo'     => new sfWidgetFormFilterInput(),
      'codigo'     => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'asignada'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'baby'       => new sfWidgetFormFilterInput(),
      'submenu'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'modulo'     => new sfValidatorPass(array('required' => false)),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'asignada'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'baby'       => new sfValidatorPass(array('required' => false)),
      'submenu'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('optmenu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Optmenu';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'modulo'     => 'Text',
      'codigo'     => 'Text',
      'nombre'     => 'Text',
      'asignada'   => 'Number',
      'baby'       => 'Text',
      'submenu'    => 'Text',
    );
  }
}
