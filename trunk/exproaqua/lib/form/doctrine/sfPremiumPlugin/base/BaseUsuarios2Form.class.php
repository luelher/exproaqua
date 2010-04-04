<?php

/**
 * Usuarios2 form base class.
 *
 * @method Usuarios2 getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuarios2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'                => new sfWidgetFormInputHidden(),
      'username'                  => new sfWidgetFormInputHidden(),
      'msg_acceso_panel'          => new sfWidgetFormInputText(),
      'msg_envia_un_destino'      => new sfWidgetFormInputText(),
      'msg_envia_grupos'          => new sfWidgetFormInputText(),
      'msg_crea_grupos'           => new sfWidgetFormInputText(),
      'msg_borra_grupos'          => new sfWidgetFormInputText(),
      'msg_crea_destinatario'     => new sfWidgetFormInputText(),
      'msg_borra_destinatario'    => new sfWidgetFormInputText(),
      'msg_administra_cupo'       => new sfWidgetFormInputText(),
      'msg_acceso_historial'      => new sfWidgetFormInputText(),
      'msg_cupo_mensajes'         => new sfWidgetFormInputText(),
      'msg_mensajes_otorgados'    => new sfWidgetFormInputText(),
      'msg_mensajes_consumidos'   => new sfWidgetFormInputText(),
      'pin_nombre_completo'       => new sfWidgetFormInputText(),
      'pin_login'                 => new sfWidgetFormInputText(),
      'pin_password'              => new sfWidgetFormInputText(),
      'pin_password_confirmacion' => new sfWidgetFormInputText(),
      'pin_email'                 => new sfWidgetFormInputText(),
      'pin_es_publico'            => new sfWidgetFormInputText(),
      'pin_numero'                => new sfWidgetFormInputText(),
      'devuelve_excedente'        => new sfWidgetFormInputText(),
      'depexcl'                   => new sfWidgetFormInputText(),
      'maximizascreen'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'username'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'username', 'required' => false)),
      'msg_acceso_panel'          => new sfValidatorInteger(array('required' => false)),
      'msg_envia_un_destino'      => new sfValidatorInteger(array('required' => false)),
      'msg_envia_grupos'          => new sfValidatorInteger(array('required' => false)),
      'msg_crea_grupos'           => new sfValidatorInteger(array('required' => false)),
      'msg_borra_grupos'          => new sfValidatorInteger(array('required' => false)),
      'msg_crea_destinatario'     => new sfValidatorInteger(array('required' => false)),
      'msg_borra_destinatario'    => new sfValidatorInteger(array('required' => false)),
      'msg_administra_cupo'       => new sfValidatorInteger(array('required' => false)),
      'msg_acceso_historial'      => new sfValidatorInteger(array('required' => false)),
      'msg_cupo_mensajes'         => new sfValidatorInteger(array('required' => false)),
      'msg_mensajes_otorgados'    => new sfValidatorInteger(array('required' => false)),
      'msg_mensajes_consumidos'   => new sfValidatorInteger(array('required' => false)),
      'pin_nombre_completo'       => new sfValidatorString(array('max_length' => 100)),
      'pin_login'                 => new sfValidatorString(array('max_length' => 50)),
      'pin_password'              => new sfValidatorString(array('max_length' => 50)),
      'pin_password_confirmacion' => new sfValidatorString(array('max_length' => 20)),
      'pin_email'                 => new sfValidatorString(array('max_length' => 50)),
      'pin_es_publico'            => new sfValidatorInteger(array('required' => false)),
      'pin_numero'                => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'devuelve_excedente'        => new sfValidatorInteger(array('required' => false)),
      'depexcl'                   => new sfValidatorNumber(array('required' => false)),
      'maximizascreen'            => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios2';
  }

}
