<?php

/**
 * Cfgrep filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCfgrepFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reporte'    => new sfWidgetFormFilterInput(),
      'titulo'     => new sfWidgetFormFilterInput(),
      'rutarep'    => new sfWidgetFormFilterInput(),
      'modulo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(),
      'campo2'     => new sfWidgetFormFilterInput(),
      'campo3'     => new sfWidgetFormFilterInput(),
      'campo4'     => new sfWidgetFormFilterInput(),
      'campo5'     => new sfWidgetFormFilterInput(),
      'campo6'     => new sfWidgetFormFilterInput(),
      'campo7'     => new sfWidgetFormFilterInput(),
      'campo8'     => new sfWidgetFormFilterInput(),
      'campo9'     => new sfWidgetFormFilterInput(),
      'campo10'    => new sfWidgetFormFilterInput(),
      'resp1'      => new sfWidgetFormFilterInput(),
      'resp2'      => new sfWidgetFormFilterInput(),
      'resp3'      => new sfWidgetFormFilterInput(),
      'resp4'      => new sfWidgetFormFilterInput(),
      'resp5'      => new sfWidgetFormFilterInput(),
      'resp6'      => new sfWidgetFormFilterInput(),
      'resp7'      => new sfWidgetFormFilterInput(),
      'resp8'      => new sfWidgetFormFilterInput(),
      'resp9'      => new sfWidgetFormFilterInput(),
      'resp10'     => new sfWidgetFormFilterInput(),
      'condicion1' => new sfWidgetFormFilterInput(),
      'operador'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'condicion2' => new sfWidgetFormFilterInput(),
      'comentario' => new sfWidgetFormFilterInput(),
      'alcance'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'reporte'    => new sfValidatorPass(array('required' => false)),
      'titulo'     => new sfValidatorPass(array('required' => false)),
      'rutarep'    => new sfValidatorPass(array('required' => false)),
      'modulo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'campo9'     => new sfValidatorPass(array('required' => false)),
      'campo10'    => new sfValidatorPass(array('required' => false)),
      'resp1'      => new sfValidatorPass(array('required' => false)),
      'resp2'      => new sfValidatorPass(array('required' => false)),
      'resp3'      => new sfValidatorPass(array('required' => false)),
      'resp4'      => new sfValidatorPass(array('required' => false)),
      'resp5'      => new sfValidatorPass(array('required' => false)),
      'resp6'      => new sfValidatorPass(array('required' => false)),
      'resp7'      => new sfValidatorPass(array('required' => false)),
      'resp8'      => new sfValidatorPass(array('required' => false)),
      'resp9'      => new sfValidatorPass(array('required' => false)),
      'resp10'     => new sfValidatorPass(array('required' => false)),
      'condicion1' => new sfValidatorPass(array('required' => false)),
      'operador'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'condicion2' => new sfValidatorPass(array('required' => false)),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'alcance'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'clave'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfgrep_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cfgrep';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'reporte'    => 'Text',
      'titulo'     => 'Text',
      'rutarep'    => 'Text',
      'modulo'     => 'Number',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'campo9'     => 'Text',
      'campo10'    => 'Text',
      'resp1'      => 'Text',
      'resp2'      => 'Text',
      'resp3'      => 'Text',
      'resp4'      => 'Text',
      'resp5'      => 'Text',
      'resp6'      => 'Text',
      'resp7'      => 'Text',
      'resp8'      => 'Text',
      'resp9'      => 'Text',
      'resp10'     => 'Text',
      'condicion1' => 'Text',
      'operador'   => 'Number',
      'condicion2' => 'Text',
      'comentario' => 'Text',
      'alcance'    => 'Number',
      'clave'      => 'Text',
    );
  }
}
