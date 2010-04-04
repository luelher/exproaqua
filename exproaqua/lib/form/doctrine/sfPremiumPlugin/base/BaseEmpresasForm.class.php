<?php

/**
 * Empresas form base class.
 *
 * @method Empresas getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEmpresasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'    => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'telefonos'     => new sfWidgetFormInputText(),
      'fax'           => new sfWidgetFormInputText(),
      'numerorif'     => new sfWidgetFormInputText(),
      'numeronit'     => new sfWidgetFormInputText(),
      'website'       => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'contacto'      => new sfWidgetFormInputText(),
      'predeter'      => new sfWidgetFormInputText(),
      'soporte1'      => new sfWidgetFormInputText(),
      'soporte2'      => new sfWidgetFormInputText(),
      'soporte3'      => new sfWidgetFormInputText(),
      'data_usaweb'   => new sfWidgetFormInputText(),
      'data_servidor' => new sfWidgetFormInputText(),
      'data_usuario'  => new sfWidgetFormInputText(),
      'data_password' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'telefonos'     => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'fax'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'numerorif'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'numeronit'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'website'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'contacto'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'predeter'      => new sfValidatorNumber(array('required' => false)),
      'soporte1'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'soporte2'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'soporte3'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'data_usaweb'   => new sfValidatorNumber(array('required' => false)),
      'data_servidor' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'data_usuario'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'data_password' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresas';
  }

}
