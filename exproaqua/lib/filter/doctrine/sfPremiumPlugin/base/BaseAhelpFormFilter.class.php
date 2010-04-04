<?php

/**
 * Ahelp filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAhelpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigoid'   => new sfWidgetFormFilterInput(),
      'titulo'     => new sfWidgetFormFilterInput(),
      'readme'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'codigoid'   => new sfValidatorPass(array('required' => false)),
      'titulo'     => new sfValidatorPass(array('required' => false)),
      'readme'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ahelp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ahelp';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'codigoid'   => 'Text',
      'titulo'     => 'Text',
      'readme'     => 'Text',
    );
  }
}
