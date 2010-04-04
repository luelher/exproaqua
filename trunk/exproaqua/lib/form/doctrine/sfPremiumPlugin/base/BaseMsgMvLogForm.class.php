<?php

/**
 * MsgMvLog form base class.
 *
 * @method MsgMvLog getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgMvLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_mensaje'      => new sfWidgetFormInputHidden(),
      'id_destinatario' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_mensaje'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_mensaje', 'required' => false)),
      'id_destinatario' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_destinatario', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('msg_mv_log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgMvLog';
  }

}
