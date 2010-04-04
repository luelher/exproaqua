<?php

/**
 * Cargodet form base class.
 *
 * @method Cargodet getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCargodetForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputText(),
      'agencia'        => new sfWidgetFormInputText(),
      'documento'      => new sfWidgetFormInputHidden(),
      'status'         => new sfWidgetFormInputText(),
      'ordentrab'      => new sfWidgetFormInputText(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'idcampo'        => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'grupo'          => new sfWidgetFormInputText(),
      'subgrupo'       => new sfWidgetFormInputText(),
      'proceso'        => new sfWidgetFormInputText(),
      'cantidad'       => new sfWidgetFormInputText(),
      'tallas'         => new sfWidgetFormInputText(),
      'colores'        => new sfWidgetFormInputText(),
      'fecha'          => new sfWidgetFormDate(),
      'almacen'        => new sfWidgetFormInputText(),
      'emisor'         => new sfWidgetFormInputText(),
      'estacion'       => new sfWidgetFormInputText(),
      'usaserial'      => new sfWidgetFormInputText(),
      'seriales'       => new sfWidgetFormTextarea(),
      'ubicacion'      => new sfWidgetFormInputText(),
      'almacenhas'     => new sfWidgetFormInputText(),
      'precio'         => new sfWidgetFormInputText(),
      'fechanul'       => new sfWidgetFormDate(),
      'useranul'       => new sfWidgetFormInputText(),
      'motivoanul'     => new sfWidgetFormTextarea(),
      'lote'           => new sfWidgetFormInputText(),
      'costo'          => new sfWidgetFormInputText(),
      'costopromfecha' => new sfWidgetFormInputText(),
      'factor'         => new sfWidgetFormInputText(),
      'tipo'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorString(array('max_length' => 6)),
      'agencia'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'status'         => new sfValidatorNumber(array('required' => false)),
      'ordentrab'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'idcampo'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'idcampo', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 61, 'required' => false)),
      'grupo'          => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'subgrupo'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'proceso'        => new sfValidatorNumber(array('required' => false)),
      'cantidad'       => new sfValidatorNumber(array('required' => false)),
      'tallas'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'colores'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fecha'          => new sfValidatorDate(array('required' => false)),
      'almacen'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'emisor'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'estacion'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'usaserial'      => new sfValidatorNumber(array('required' => false)),
      'seriales'       => new sfValidatorString(array('required' => false)),
      'ubicacion'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'almacenhas'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'precio'         => new sfValidatorNumber(array('required' => false)),
      'fechanul'       => new sfValidatorDate(array('required' => false)),
      'useranul'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'motivoanul'     => new sfValidatorString(array('required' => false)),
      'lote'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'costo'          => new sfValidatorNumber(array('required' => false)),
      'costopromfecha' => new sfValidatorNumber(array('required' => false)),
      'factor'         => new sfValidatorNumber(array('required' => false)),
      'tipo'           => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cargodet[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cargodet';
  }

}
