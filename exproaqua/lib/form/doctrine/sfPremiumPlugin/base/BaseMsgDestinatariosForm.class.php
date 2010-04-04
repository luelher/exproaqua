<?php

/**
 * MsgDestinatarios form base class.
 *
 * @method MsgDestinatarios getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgDestinatariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'id_grupo'             => new sfWidgetFormInputText(),
      'numero_movil'         => new sfWidgetFormInputText(),
      'nombre_destinatario'  => new sfWidgetFormInputText(),
      'empresa_destinatario' => new sfWidgetFormInputText(),
      'valor'                => new sfWidgetFormInputText(),
      'fechayhora_creado'    => new sfWidgetFormDateTime(),
      'usuario_creador'      => new sfWidgetFormInputText(),
      'id_destinatario'      => new sfWidgetFormInputText(),
      'marca'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_grupo'             => new sfValidatorString(array('max_length' => 25)),
      'numero_movil'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nombre_destinatario'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'empresa_destinatario' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'valor'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fechayhora_creado'    => new sfValidatorDateTime(array('required' => false)),
      'usuario_creador'      => new sfValidatorString(array('max_length' => 30)),
      'id_destinatario'      => new sfValidatorString(array('max_length' => 25)),
      'marca'                => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('msg_destinatarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgDestinatarios';
  }

}
