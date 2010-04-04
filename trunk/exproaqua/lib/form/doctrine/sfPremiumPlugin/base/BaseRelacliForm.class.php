<?php

/**
 * Relacli form base class.
 *
 * @method Relacli getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelacliForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'codcliente'     => new sfWidgetFormInputHidden(),
      'codrelacionado' => new sfWidgetFormInputHidden(),
      'porcentaje'     => new sfWidgetFormInputText(),
      'tiporelacion'   => new sfWidgetFormInputText(),
      'primario'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'codcliente'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codcliente', 'required' => false)),
      'codrelacionado' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codrelacionado', 'required' => false)),
      'porcentaje'     => new sfValidatorNumber(array('required' => false)),
      'tiporelacion'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'primario'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('relacli[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relacli';
  }

}
