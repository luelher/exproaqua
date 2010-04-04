<?php

/**
 * ComprobBan filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComprobBanFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombrecta'  => new sfWidgetFormFilterInput(),
      'debito'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'credito'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'nombrecta'  => new sfValidatorPass(array('required' => false)),
      'debito'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'credito'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('comprob_ban_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ComprobBan';
  }

  public function getFields()
  {
    return array(
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'comprobant' => 'Text',
      'tipomov'    => 'Text',
      'codigoban'  => 'Text',
      'codigocta'  => 'Text',
      'pid'        => 'Text',
      'nombrecta'  => 'Text',
      'debito'     => 'Number',
      'credito'    => 'Number',
    );
  }
}
