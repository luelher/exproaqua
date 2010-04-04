<?php

/**
 * Despachadores form base class.
 *
 * @method Despachadores getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDespachadoresForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'id_despachador' => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'nombre_corto'   => new sfWidgetFormInputText(),
      'cedula'         => new sfWidgetFormInputText(),
      'nrorif'         => new sfWidgetFormInputText(),
      'direccion'      => new sfWidgetFormInputText(),
      'telefono'       => new sfWidgetFormInputText(),
      'celular'        => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'vehiculo'       => new sfWidgetFormInputText(),
      'placa'          => new sfWidgetFormInputText(),
      'estatus'        => new sfWidgetFormInputText(),
      'rutafoto'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'id_despachador' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_despachador', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 150)),
      'nombre_corto'   => new sfValidatorString(array('max_length' => 15)),
      'cedula'         => new sfValidatorString(array('max_length' => 15)),
      'nrorif'         => new sfValidatorString(array('max_length' => 15)),
      'direccion'      => new sfValidatorString(array('max_length' => 200)),
      'telefono'       => new sfValidatorString(array('max_length' => 60)),
      'celular'        => new sfValidatorString(array('max_length' => 60)),
      'email'          => new sfValidatorString(array('max_length' => 150)),
      'vehiculo'       => new sfValidatorString(array('max_length' => 60)),
      'placa'          => new sfValidatorString(array('max_length' => 20)),
      'estatus'        => new sfValidatorInteger(array('required' => false)),
      'rutafoto'       => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('despachadores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Despachadores';
  }

}
