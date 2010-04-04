<?php

/**
 * Idconsumos form base class.
 *
 * @method Idconsumos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIdconsumosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'id_consumo'     => new sfWidgetFormInputHidden(),
      'descripcion'    => new sfWidgetFormInputText(),
      'nombre_corto'   => new sfWidgetFormInputText(),
      'capacidad'      => new sfWidgetFormInputText(),
      'estatus'        => new sfWidgetFormInputText(),
      'notas'          => new sfWidgetFormTextarea(),
      'rutafoto'       => new sfWidgetFormInputText(),
      'codigoarticulo' => new sfWidgetFormInputText(),
      'tipo_idconsumo' => new sfWidgetFormInputText(),
      'aplica_touch'   => new sfWidgetFormInputText(),
      'ubicacion'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'id_consumo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_consumo', 'required' => false)),
      'descripcion'    => new sfValidatorString(array('max_length' => 150)),
      'nombre_corto'   => new sfValidatorString(array('max_length' => 15)),
      'capacidad'      => new sfValidatorString(array('max_length' => 20)),
      'estatus'        => new sfValidatorInteger(array('required' => false)),
      'notas'          => new sfValidatorString(),
      'rutafoto'       => new sfValidatorString(array('max_length' => 200)),
      'codigoarticulo' => new sfValidatorString(array('max_length' => 25)),
      'tipo_idconsumo' => new sfValidatorString(array('max_length' => 12)),
      'aplica_touch'   => new sfValidatorInteger(array('required' => false)),
      'ubicacion'      => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('idconsumos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Idconsumos';
  }

}
