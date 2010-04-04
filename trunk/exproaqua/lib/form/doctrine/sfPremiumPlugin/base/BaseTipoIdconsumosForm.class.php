<?php

/**
 * TipoIdconsumos form base class.
 *
 * @method TipoIdconsumos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipoIdconsumosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputHidden(),
      'agencia'    => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'capa_max'   => new sfWidgetFormInputText(),
      'capa_nor'   => new sfWidgetFormInputText(),
      'rutafoto1'  => new sfWidgetFormInputText(),
      'rutafoto2'  => new sfWidgetFormInputText(),
      'rutafoto3'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 80)),
      'capa_max'   => new sfValidatorInteger(array('required' => false)),
      'capa_nor'   => new sfValidatorInteger(array('required' => false)),
      'rutafoto1'  => new sfValidatorString(array('max_length' => 200)),
      'rutafoto2'  => new sfValidatorString(array('max_length' => 200)),
      'rutafoto3'  => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('tipo_idconsumos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoIdconsumos';
  }

}
