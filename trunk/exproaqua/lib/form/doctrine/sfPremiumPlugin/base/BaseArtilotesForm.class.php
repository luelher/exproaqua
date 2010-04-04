<?php

/**
 * Artilotes form base class.
 *
 * @method Artilotes getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArtilotesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormInputText(),
      'agencia'      => new sfWidgetFormInputText(),
      'lote'         => new sfWidgetFormInputHidden(),
      'codigoart'    => new sfWidgetFormInputHidden(),
      'almacen'      => new sfWidgetFormInputHidden(),
      'inactivo'     => new sfWidgetFormInputText(),
      'vence'        => new sfWidgetFormDate(),
      'cantidad'     => new sfWidgetFormInputText(),
      'consumido'    => new sfWidgetFormInputText(),
      'comprometido' => new sfWidgetFormInputText(),
      'costo'        => new sfWidgetFormInputText(),
      'precio1'      => new sfWidgetFormInputText(),
      'precio2'      => new sfWidgetFormInputText(),
      'precio3'      => new sfWidgetFormInputText(),
      'precio4'      => new sfWidgetFormInputText(),
      'precio5'      => new sfWidgetFormInputText(),
      'precio6'      => new sfWidgetFormInputText(),
      'precio7'      => new sfWidgetFormInputText(),
      'precio8'      => new sfWidgetFormInputText(),
      'preciofin1'   => new sfWidgetFormInputText(),
      'preciofin2'   => new sfWidgetFormInputText(),
      'preciofin3'   => new sfWidgetFormInputText(),
      'preciofin4'   => new sfWidgetFormInputText(),
      'preciofin5'   => new sfWidgetFormInputText(),
      'preciofin6'   => new sfWidgetFormInputText(),
      'preciofin7'   => new sfWidgetFormInputText(),
      'preciofin8'   => new sfWidgetFormInputText(),
      'precio1grp'   => new sfWidgetFormInputText(),
      'precio2grp'   => new sfWidgetFormInputText(),
      'precio3grp'   => new sfWidgetFormInputText(),
      'precio4grp'   => new sfWidgetFormInputText(),
      'precio5grp'   => new sfWidgetFormInputText(),
      'precio6grp'   => new sfWidgetFormInputText(),
      'precio7grp'   => new sfWidgetFormInputText(),
      'precio8grp'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorString(array('max_length' => 6)),
      'agencia'      => new sfValidatorString(array('max_length' => 3)),
      'lote'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'lote', 'required' => false)),
      'codigoart'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoart', 'required' => false)),
      'almacen'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'almacen', 'required' => false)),
      'inactivo'     => new sfValidatorNumber(array('required' => false)),
      'vence'        => new sfValidatorDate(array('required' => false)),
      'cantidad'     => new sfValidatorNumber(array('required' => false)),
      'consumido'    => new sfValidatorNumber(array('required' => false)),
      'comprometido' => new sfValidatorNumber(array('required' => false)),
      'costo'        => new sfValidatorNumber(array('required' => false)),
      'precio1'      => new sfValidatorNumber(array('required' => false)),
      'precio2'      => new sfValidatorNumber(array('required' => false)),
      'precio3'      => new sfValidatorNumber(array('required' => false)),
      'precio4'      => new sfValidatorNumber(array('required' => false)),
      'precio5'      => new sfValidatorNumber(array('required' => false)),
      'precio6'      => new sfValidatorNumber(array('required' => false)),
      'precio7'      => new sfValidatorNumber(array('required' => false)),
      'precio8'      => new sfValidatorNumber(array('required' => false)),
      'preciofin1'   => new sfValidatorNumber(array('required' => false)),
      'preciofin2'   => new sfValidatorNumber(array('required' => false)),
      'preciofin3'   => new sfValidatorNumber(array('required' => false)),
      'preciofin4'   => new sfValidatorNumber(array('required' => false)),
      'preciofin5'   => new sfValidatorNumber(array('required' => false)),
      'preciofin6'   => new sfValidatorNumber(array('required' => false)),
      'preciofin7'   => new sfValidatorNumber(array('required' => false)),
      'preciofin8'   => new sfValidatorNumber(array('required' => false)),
      'precio1grp'   => new sfValidatorNumber(array('required' => false)),
      'precio2grp'   => new sfValidatorNumber(array('required' => false)),
      'precio3grp'   => new sfValidatorNumber(array('required' => false)),
      'precio4grp'   => new sfValidatorNumber(array('required' => false)),
      'precio5grp'   => new sfValidatorNumber(array('required' => false)),
      'precio6grp'   => new sfValidatorNumber(array('required' => false)),
      'precio7grp'   => new sfValidatorNumber(array('required' => false)),
      'precio8grp'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artilotes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artilotes';
  }

}
