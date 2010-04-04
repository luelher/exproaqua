<?php

/**
 * Corteszeta form base class.
 *
 * @method Corteszeta getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCorteszetaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputHidden(),
      'agencia'        => new sfWidgetFormInputHidden(),
      'serial'         => new sfWidgetFormInputHidden(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'marca'          => new sfWidgetFormInputText(),
      'modelo'         => new sfWidgetFormInputText(),
      'estacion'       => new sfWidgetFormInputText(),
      'ubicacion'      => new sfWidgetFormInputText(),
      'numeroz'        => new sfWidgetFormInputText(),
      'fechaz'         => new sfWidgetFormInputHidden(),
      'horaz'          => new sfWidgetFormInputHidden(),
      'razonsocial'    => new sfWidgetFormInputText(),
      'rif'            => new sfWidgetFormInputText(),
      'facexenta'      => new sfWidgetFormInputText(),
      'cantidadfac'    => new sfWidgetFormInputText(),
      'bifacalicgen'   => new sfWidgetFormInputText(),
      'ivafacalicgen'  => new sfWidgetFormInputText(),
      'bifacalicred'   => new sfWidgetFormInputText(),
      'ivafacalicred'  => new sfWidgetFormInputText(),
      'bifacalicaum'   => new sfWidgetFormInputText(),
      'ivafacalicaum'  => new sfWidgetFormInputText(),
      'ncexenta'       => new sfWidgetFormInputText(),
      'cantidadnc'     => new sfWidgetFormInputText(),
      'bincalicgen'    => new sfWidgetFormInputText(),
      'ivancalicgen'   => new sfWidgetFormInputText(),
      'bincalicred'    => new sfWidgetFormInputText(),
      'ivancalicred'   => new sfWidgetFormInputText(),
      'bincalicaum'    => new sfWidgetFormInputText(),
      'ivancalicaum'   => new sfWidgetFormInputText(),
      'descexento'     => new sfWidgetFormInputText(),
      'cantidaddesc'   => new sfWidgetFormInputText(),
      'bidescalicgen'  => new sfWidgetFormInputText(),
      'ivadescalicgen' => new sfWidgetFormInputText(),
      'bidescalicred'  => new sfWidgetFormInputText(),
      'ivadescalicred' => new sfWidgetFormInputText(),
      'bidescalicaum'  => new sfWidgetFormInputText(),
      'ivadescalicaum' => new sfWidgetFormInputText(),
      'primfact'       => new sfWidgetFormInputText(),
      'ultifact'       => new sfWidgetFormInputText(),
      'fechultfac'     => new sfWidgetFormDate(),
      'horaultfac'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'serial'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'serial', 'required' => false)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'marca'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'modelo'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'estacion'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'ubicacion'      => new sfValidatorString(array('max_length' => 80)),
      'numeroz'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'fechaz'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'fechaz', 'required' => false)),
      'horaz'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'horaz', 'required' => false)),
      'razonsocial'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'rif'            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'facexenta'      => new sfValidatorNumber(array('required' => false)),
      'cantidadfac'    => new sfValidatorNumber(array('required' => false)),
      'bifacalicgen'   => new sfValidatorNumber(array('required' => false)),
      'ivafacalicgen'  => new sfValidatorNumber(array('required' => false)),
      'bifacalicred'   => new sfValidatorNumber(array('required' => false)),
      'ivafacalicred'  => new sfValidatorNumber(array('required' => false)),
      'bifacalicaum'   => new sfValidatorNumber(array('required' => false)),
      'ivafacalicaum'  => new sfValidatorNumber(array('required' => false)),
      'ncexenta'       => new sfValidatorNumber(array('required' => false)),
      'cantidadnc'     => new sfValidatorNumber(array('required' => false)),
      'bincalicgen'    => new sfValidatorNumber(array('required' => false)),
      'ivancalicgen'   => new sfValidatorNumber(array('required' => false)),
      'bincalicred'    => new sfValidatorNumber(array('required' => false)),
      'ivancalicred'   => new sfValidatorNumber(array('required' => false)),
      'bincalicaum'    => new sfValidatorNumber(array('required' => false)),
      'ivancalicaum'   => new sfValidatorNumber(array('required' => false)),
      'descexento'     => new sfValidatorNumber(array('required' => false)),
      'cantidaddesc'   => new sfValidatorNumber(array('required' => false)),
      'bidescalicgen'  => new sfValidatorNumber(array('required' => false)),
      'ivadescalicgen' => new sfValidatorNumber(array('required' => false)),
      'bidescalicred'  => new sfValidatorNumber(array('required' => false)),
      'ivadescalicred' => new sfValidatorNumber(array('required' => false)),
      'bidescalicaum'  => new sfValidatorNumber(array('required' => false)),
      'ivadescalicaum' => new sfValidatorNumber(array('required' => false)),
      'primfact'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'ultifact'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'fechultfac'     => new sfValidatorDate(array('required' => false)),
      'horaultfac'     => new sfValidatorString(array('max_length' => 5, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('corteszeta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Corteszeta';
  }

}
