<?php

/**
 * Ftpconfig filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFtpconfigFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ftpsite'    => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'password'   => new sfWidgetFormFilterInput(),
      'puerto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ftpfolder'  => new sfWidgetFormFilterInput(),
      'pid'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'ftpsite'    => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'puerto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ftpfolder'  => new sfValidatorPass(array('required' => false)),
      'pid'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ftpconfig_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ftpconfig';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'ftpsite'    => 'Text',
      'usuario'    => 'Text',
      'password'   => 'Text',
      'puerto'     => 'Number',
      'ftpfolder'  => 'Text',
      'pid'        => 'Text',
    );
  }
}
