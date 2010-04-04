<?php

/**
 * MsgTiLog form base class.
 *
 * @method MsgTiLog getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgTiLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_mensaje'       => new sfWidgetFormInputHidden(),
      'usuario'          => new sfWidgetFormInputHidden(),
      'fechayhora'       => new sfWidgetFormDateTime(),
      'envio_fechayhora' => new sfWidgetFormDateTime(),
      'mensaje'          => new sfWidgetFormTextarea(),
      'estatus'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_mensaje'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_mensaje', 'required' => false)),
      'usuario'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'usuario', 'required' => false)),
      'fechayhora'       => new sfValidatorDateTime(array('required' => false)),
      'envio_fechayhora' => new sfValidatorDateTime(array('required' => false)),
      'mensaje'          => new sfValidatorString(array('required' => false)),
      'estatus'          => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('msg_ti_log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgTiLog';
  }

}
