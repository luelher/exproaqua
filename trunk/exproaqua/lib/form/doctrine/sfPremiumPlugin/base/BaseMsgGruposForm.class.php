<?php

/**
 * MsgGrupos form base class.
 *
 * @method MsgGrupos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgGruposForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo'          => new sfWidgetFormInputHidden(),
      'nombre_grupo'      => new sfWidgetFormInputText(),
      'fechayhora_creado' => new sfWidgetFormDateTime(),
      'usuario_creador'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_grupo'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_grupo', 'required' => false)),
      'nombre_grupo'      => new sfValidatorString(array('max_length' => 100)),
      'fechayhora_creado' => new sfValidatorDateTime(array('required' => false)),
      'usuario_creador'   => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('msg_grupos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgGrupos';
  }

}
