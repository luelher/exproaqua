<?php

/**
 * Grupos form base class.
 *
 * @method Grupos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGruposForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormInputText(),
      'agencia'           => new sfWidgetFormInputText(),
      'codigo'            => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'tcantidad'         => new sfWidgetFormInputText(),
      'tfacturado'        => new sfWidgetFormInputText(),
      'usatalla'          => new sfWidgetFormInputText(),
      'usacolor'          => new sfWidgetFormInputText(),
      'prcutil'           => new sfWidgetFormInputText(),
      'descuento'         => new sfWidgetFormInputText(),
      'formato'           => new sfWidgetFormInputText(),
      'ctacontinv'        => new sfWidgetFormInputText(),
      'ctacontcostos'     => new sfWidgetFormInputText(),
      'ctacontingresos'   => new sfWidgetFormInputText(),
      'oculto_restaurant' => new sfWidgetFormInputText(),
      'noaplicarecargos'  => new sfWidgetFormInputText(),
      'rutafoto'          => new sfWidgetFormInputText(),
      'nombre_corto'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorString(array('max_length' => 6)),
      'agencia'           => new sfValidatorString(array('max_length' => 3)),
      'codigo'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'tcantidad'         => new sfValidatorNumber(array('required' => false)),
      'tfacturado'        => new sfValidatorNumber(array('required' => false)),
      'usatalla'          => new sfValidatorNumber(array('required' => false)),
      'usacolor'          => new sfValidatorNumber(array('required' => false)),
      'prcutil'           => new sfValidatorNumber(array('required' => false)),
      'descuento'         => new sfValidatorNumber(array('required' => false)),
      'formato'           => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'ctacontinv'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'ctacontcostos'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'ctacontingresos'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'oculto_restaurant' => new sfValidatorNumber(array('required' => false)),
      'noaplicarecargos'  => new sfValidatorNumber(array('required' => false)),
      'rutafoto'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'nombre_corto'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupos';
  }

}
