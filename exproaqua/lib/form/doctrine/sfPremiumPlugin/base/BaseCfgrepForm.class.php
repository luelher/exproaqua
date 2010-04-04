<?php

/**
 * Cfgrep form base class.
 *
 * @method Cfgrep getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCfgrepForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'reporte'    => new sfWidgetFormInputText(),
      'titulo'     => new sfWidgetFormInputText(),
      'rutarep'    => new sfWidgetFormInputText(),
      'modulo'     => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'campo9'     => new sfWidgetFormInputText(),
      'campo10'    => new sfWidgetFormInputText(),
      'resp1'      => new sfWidgetFormInputText(),
      'resp2'      => new sfWidgetFormInputText(),
      'resp3'      => new sfWidgetFormInputText(),
      'resp4'      => new sfWidgetFormInputText(),
      'resp5'      => new sfWidgetFormInputText(),
      'resp6'      => new sfWidgetFormInputText(),
      'resp7'      => new sfWidgetFormInputText(),
      'resp8'      => new sfWidgetFormInputText(),
      'resp9'      => new sfWidgetFormInputText(),
      'resp10'     => new sfWidgetFormInputText(),
      'condicion1' => new sfWidgetFormInputText(),
      'operador'   => new sfWidgetFormInputText(),
      'condicion2' => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormInputText(),
      'alcance'    => new sfWidgetFormInputText(),
      'clave'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'reporte'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'rutarep'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'modulo'     => new sfValidatorNumber(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo9'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'campo10'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp1'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp2'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp3'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp4'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp5'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp6'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp7'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp8'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp9'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'resp10'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'condicion1' => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'operador'   => new sfValidatorNumber(array('required' => false)),
      'condicion2' => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'alcance'    => new sfValidatorNumber(array('required' => false)),
      'clave'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfgrep[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cfgrep';
  }

}
