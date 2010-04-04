<?php

/**
 * Configkeyboard filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigkeyboardFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modo1'      => new sfWidgetFormFilterInput(),
      'keymodo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modo2'      => new sfWidgetFormFilterInput(),
      'keymodo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modo3'      => new sfWidgetFormFilterInput(),
      'keymodo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modo4'      => new sfWidgetFormFilterInput(),
      'keymodo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modo5'      => new sfWidgetFormFilterInput(),
      'keymodo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rack_opc1'  => new sfWidgetFormFilterInput(),
      'rack_opc2'  => new sfWidgetFormFilterInput(),
      'rack_opc3'  => new sfWidgetFormFilterInput(),
      'rack_opc4'  => new sfWidgetFormFilterInput(),
      'rack_opc5'  => new sfWidgetFormFilterInput(),
      'rack_opc6'  => new sfWidgetFormFilterInput(),
      'rack_opc7'  => new sfWidgetFormFilterInput(),
      'rack_opc8'  => new sfWidgetFormFilterInput(),
      'rack_opc9'  => new sfWidgetFormFilterInput(),
      'rack_opc10' => new sfWidgetFormFilterInput(),
      'rack_opc11' => new sfWidgetFormFilterInput(),
      'rack_opc12' => new sfWidgetFormFilterInput(),
      'rack_opc13' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'modo1'      => new sfValidatorPass(array('required' => false)),
      'keymodo1'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'modo2'      => new sfValidatorPass(array('required' => false)),
      'keymodo2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'modo3'      => new sfValidatorPass(array('required' => false)),
      'keymodo3'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'modo4'      => new sfValidatorPass(array('required' => false)),
      'keymodo4'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'modo5'      => new sfValidatorPass(array('required' => false)),
      'keymodo5'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rack_opc1'  => new sfValidatorPass(array('required' => false)),
      'rack_opc2'  => new sfValidatorPass(array('required' => false)),
      'rack_opc3'  => new sfValidatorPass(array('required' => false)),
      'rack_opc4'  => new sfValidatorPass(array('required' => false)),
      'rack_opc5'  => new sfValidatorPass(array('required' => false)),
      'rack_opc6'  => new sfValidatorPass(array('required' => false)),
      'rack_opc7'  => new sfValidatorPass(array('required' => false)),
      'rack_opc8'  => new sfValidatorPass(array('required' => false)),
      'rack_opc9'  => new sfValidatorPass(array('required' => false)),
      'rack_opc10' => new sfValidatorPass(array('required' => false)),
      'rack_opc11' => new sfValidatorPass(array('required' => false)),
      'rack_opc12' => new sfValidatorPass(array('required' => false)),
      'rack_opc13' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configkeyboard_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configkeyboard';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'modo1'      => 'Text',
      'keymodo1'   => 'Number',
      'modo2'      => 'Text',
      'keymodo2'   => 'Number',
      'modo3'      => 'Text',
      'keymodo3'   => 'Number',
      'modo4'      => 'Text',
      'keymodo4'   => 'Number',
      'modo5'      => 'Text',
      'keymodo5'   => 'Number',
      'rack_opc1'  => 'Text',
      'rack_opc2'  => 'Text',
      'rack_opc3'  => 'Text',
      'rack_opc4'  => 'Text',
      'rack_opc5'  => 'Text',
      'rack_opc6'  => 'Text',
      'rack_opc7'  => 'Text',
      'rack_opc8'  => 'Text',
      'rack_opc9'  => 'Text',
      'rack_opc10' => 'Text',
      'rack_opc11' => 'Text',
      'rack_opc12' => 'Text',
      'rack_opc13' => 'Text',
    );
  }
}
