<?php

/**
 * MsgGrupos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgGruposFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_grupo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechayhora_creado' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario_creador'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_grupo'      => new sfValidatorPass(array('required' => false)),
      'fechayhora_creado' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'usuario_creador'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('msg_grupos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgGrupos';
  }

  public function getFields()
  {
    return array(
      'id_grupo'          => 'Text',
      'nombre_grupo'      => 'Text',
      'fechayhora_creado' => 'Date',
      'usuario_creador'   => 'Text',
    );
  }
}
