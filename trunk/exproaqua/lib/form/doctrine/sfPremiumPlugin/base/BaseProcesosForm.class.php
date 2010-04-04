<?php

/**
 * Procesos form base class.
 *
 * @method Procesos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProcesosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'modulo'     => new sfWidgetFormInputText(),
      'titulo'     => new sfWidgetFormInputText(),
      'programa'   => new sfWidgetFormInputText(),
      'clave'      => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'modulo'     => new sfValidatorNumber(array('required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'programa'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'clave'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tipo'       => new sfValidatorNumber(array('required' => false)),
      'comentario' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('procesos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procesos';
  }

}
