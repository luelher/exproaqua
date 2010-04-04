<?php

/**
 * Clicomp form base class.
 *
 * @method Clicomp getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClicompForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputText(),
      'agencia'        => new sfWidgetFormInputText(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'cedula'         => new sfWidgetFormInputHidden(),
      'rutafoto'       => new sfWidgetFormInputText(),
      'fechanac'       => new sfWidgetFormDate(),
      'clasificacion'  => new sfWidgetFormInputText(),
      'referencia'     => new sfWidgetFormInputText(),
      'fvence'         => new sfWidgetFormDate(),
      'direccion'      => new sfWidgetFormInputText(),
      'telefono_movil' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorString(array('max_length' => 6)),
      'agencia'        => new sfValidatorString(array('max_length' => 3)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cedula'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cedula', 'required' => false)),
      'rutafoto'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fechanac'       => new sfValidatorDate(array('required' => false)),
      'clasificacion'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'referencia'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fvence'         => new sfValidatorDate(array('required' => false)),
      'direccion'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'telefono_movil' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('clicomp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clicomp';
  }

}
