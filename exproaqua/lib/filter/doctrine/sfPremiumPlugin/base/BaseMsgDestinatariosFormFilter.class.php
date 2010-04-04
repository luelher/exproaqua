<?php

/**
 * MsgDestinatarios filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMsgDestinatariosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_movil'         => new sfWidgetFormFilterInput(),
      'nombre_destinatario'  => new sfWidgetFormFilterInput(),
      'empresa_destinatario' => new sfWidgetFormFilterInput(),
      'valor'                => new sfWidgetFormFilterInput(),
      'fechayhora_creado'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario_creador'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_destinatario'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_grupo'             => new sfValidatorPass(array('required' => false)),
      'numero_movil'         => new sfValidatorPass(array('required' => false)),
      'nombre_destinatario'  => new sfValidatorPass(array('required' => false)),
      'empresa_destinatario' => new sfValidatorPass(array('required' => false)),
      'valor'                => new sfValidatorPass(array('required' => false)),
      'fechayhora_creado'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'usuario_creador'      => new sfValidatorPass(array('required' => false)),
      'id_destinatario'      => new sfValidatorPass(array('required' => false)),
      'marca'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('msg_destinatarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MsgDestinatarios';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'id_grupo'             => 'Text',
      'numero_movil'         => 'Text',
      'nombre_destinatario'  => 'Text',
      'empresa_destinatario' => 'Text',
      'valor'                => 'Text',
      'fechayhora_creado'    => 'Date',
      'usuario_creador'      => 'Text',
      'id_destinatario'      => 'Text',
      'marca'                => 'Number',
    );
  }
}
