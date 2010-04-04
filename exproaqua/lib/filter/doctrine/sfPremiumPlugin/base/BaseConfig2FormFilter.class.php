<?php

/**
 * Config2 filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfig2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'         => new sfWidgetFormFilterInput(),
      'msg_login_sms'      => new sfWidgetFormFilterInput(),
      'msg_password_sms'   => new sfWidgetFormFilterInput(),
      'id_despachadors'    => new sfWidgetFormFilterInput(),
      'id_despachadorp'    => new sfWidgetFormFilterInput(),
      'decimales_impuesto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'redondear_impuesto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actcecom'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'         => new sfValidatorPass(array('required' => false)),
      'msg_login_sms'      => new sfValidatorPass(array('required' => false)),
      'msg_password_sms'   => new sfValidatorPass(array('required' => false)),
      'id_despachadors'    => new sfValidatorPass(array('required' => false)),
      'id_despachadorp'    => new sfValidatorPass(array('required' => false)),
      'decimales_impuesto' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'redondear_impuesto' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'actcecom'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('config2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Config2';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'id_empresa'         => 'Text',
      'msg_login_sms'      => 'Text',
      'msg_password_sms'   => 'Text',
      'id_despachadors'    => 'Text',
      'id_despachadorp'    => 'Text',
      'decimales_impuesto' => 'Number',
      'redondear_impuesto' => 'Number',
      'actcecom'           => 'Number',
    );
  }
}
