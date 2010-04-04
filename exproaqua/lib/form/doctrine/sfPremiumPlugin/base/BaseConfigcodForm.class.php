<?php

/**
 * Configcod form base class.
 *
 * @method Configcod getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigcodForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'maximo'     => new sfWidgetFormInputText(),
      'codigo_d'   => new sfWidgetFormInputText(),
      'codigo_h'   => new sfWidgetFormInputText(),
      'marca_d'    => new sfWidgetFormInputText(),
      'marca_h'    => new sfWidgetFormInputText(),
      'modelo_d'   => new sfWidgetFormInputText(),
      'modelo_h'   => new sfWidgetFormInputText(),
      'talla_d'    => new sfWidgetFormInputText(),
      'talla_h'    => new sfWidgetFormInputText(),
      'color_d'    => new sfWidgetFormInputText(),
      'color_h'    => new sfWidgetFormInputText(),
      'codigot'    => new sfWidgetFormInputText(),
      'marcat'     => new sfWidgetFormInputText(),
      'modelot'    => new sfWidgetFormInputText(),
      'tallat'     => new sfWidgetFormInputText(),
      'colort'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'maximo'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'codigo_d'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'codigo_h'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'marca_d'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'marca_h'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'modelo_d'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'modelo_h'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'talla_d'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'talla_h'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'color_d'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'color_h'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'codigot'    => new sfValidatorNumber(array('required' => false)),
      'marcat'     => new sfValidatorNumber(array('required' => false)),
      'modelot'    => new sfValidatorNumber(array('required' => false)),
      'tallat'     => new sfValidatorNumber(array('required' => false)),
      'colort'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configcod[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configcod';
  }

}
