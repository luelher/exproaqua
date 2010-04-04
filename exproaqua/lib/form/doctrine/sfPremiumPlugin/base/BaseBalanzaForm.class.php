<?php

/**
 * Balanza form base class.
 *
 * @method Balanza getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBalanzaForm extends BaseFormDoctrine
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
      'precio_d'   => new sfWidgetFormInputText(),
      'precio_h'   => new sfWidgetFormInputText(),
      'descp_d'    => new sfWidgetFormInputText(),
      'descp_h'    => new sfWidgetFormInputText(),
      'cantidad_d' => new sfWidgetFormInputText(),
      'cantidad_h' => new sfWidgetFormInputText(),
      'descc_d'    => new sfWidgetFormInputText(),
      'descc_h'    => new sfWidgetFormInputText(),
      'char01_d'   => new sfWidgetFormInputText(),
      'char01_h'   => new sfWidgetFormInputText(),
      'char01_v'   => new sfWidgetFormInputText(),
      'char02_d'   => new sfWidgetFormInputText(),
      'char02_h'   => new sfWidgetFormInputText(),
      'char02_v'   => new sfWidgetFormInputText(),
      'char03_d'   => new sfWidgetFormInputText(),
      'char03_h'   => new sfWidgetFormInputText(),
      'char03_v'   => new sfWidgetFormInputText(),
      'char04_d'   => new sfWidgetFormInputText(),
      'char04_h'   => new sfWidgetFormInputText(),
      'char04_v'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'maximo'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codigo_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'codigo_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'precio_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'precio_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descp_d'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descp_h'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cantidad_d' => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cantidad_h' => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descc_d'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descc_h'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char01_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char01_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char01_v'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'char02_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char02_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char02_v'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'char03_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char03_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char03_v'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'char04_d'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char04_h'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'char04_v'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('balanza[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Balanza';
  }

}
