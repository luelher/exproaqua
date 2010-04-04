<?php

/**
 * Usuarios2 filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuarios2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'msg_acceso_panel'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_envia_un_destino'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_envia_grupos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_crea_grupos'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_borra_grupos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_crea_destinatario'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_borra_destinatario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_administra_cupo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_acceso_historial'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_cupo_mensajes'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_mensajes_otorgados'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'msg_mensajes_consumidos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_nombre_completo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_login'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_password'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_password_confirmacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_email'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_es_publico'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pin_numero'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'devuelve_excedente'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'depexcl'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maximizascreen'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'msg_acceso_panel'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_envia_un_destino'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_envia_grupos'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_crea_grupos'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_borra_grupos'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_crea_destinatario'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_borra_destinatario'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_administra_cupo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_acceso_historial'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_cupo_mensajes'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_mensajes_otorgados'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'msg_mensajes_consumidos'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pin_nombre_completo'       => new sfValidatorPass(array('required' => false)),
      'pin_login'                 => new sfValidatorPass(array('required' => false)),
      'pin_password'              => new sfValidatorPass(array('required' => false)),
      'pin_password_confirmacion' => new sfValidatorPass(array('required' => false)),
      'pin_email'                 => new sfValidatorPass(array('required' => false)),
      'pin_es_publico'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pin_numero'                => new sfValidatorPass(array('required' => false)),
      'devuelve_excedente'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'depexcl'                   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'maximizascreen'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuarios2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios2';
  }

  public function getFields()
  {
    return array(
      'id_empresa'                => 'Text',
      'username'                  => 'Text',
      'msg_acceso_panel'          => 'Number',
      'msg_envia_un_destino'      => 'Number',
      'msg_envia_grupos'          => 'Number',
      'msg_crea_grupos'           => 'Number',
      'msg_borra_grupos'          => 'Number',
      'msg_crea_destinatario'     => 'Number',
      'msg_borra_destinatario'    => 'Number',
      'msg_administra_cupo'       => 'Number',
      'msg_acceso_historial'      => 'Number',
      'msg_cupo_mensajes'         => 'Number',
      'msg_mensajes_otorgados'    => 'Number',
      'msg_mensajes_consumidos'   => 'Number',
      'pin_nombre_completo'       => 'Text',
      'pin_login'                 => 'Text',
      'pin_password'              => 'Text',
      'pin_password_confirmacion' => 'Text',
      'pin_email'                 => 'Text',
      'pin_es_publico'            => 'Number',
      'pin_numero'                => 'Text',
      'devuelve_excedente'        => 'Number',
      'depexcl'                   => 'Number',
      'maximizascreen'            => 'Number',
    );
  }
}
