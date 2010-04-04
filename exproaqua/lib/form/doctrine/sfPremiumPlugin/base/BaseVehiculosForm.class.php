<?php

/**
 * Vehiculos form base class.
 *
 * @method Vehiculos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVehiculosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormInputText(),
      'agencia'     => new sfWidgetFormInputText(),
      'placa'       => new sfWidgetFormInputHidden(),
      'referencia'  => new sfWidgetFormInputText(),
      'codclien'    => new sfWidgetFormInputText(),
      'nomclien'    => new sfWidgetFormInputText(),
      'rifclien'    => new sfWidgetFormInputText(),
      'nitclien'    => new sfWidgetFormInputText(),
      'codmarca'    => new sfWidgetFormInputText(),
      'nommarca'    => new sfWidgetFormInputText(),
      'codmodelo'   => new sfWidgetFormInputText(),
      'nommodelo'   => new sfWidgetFormInputText(),
      'codtipo'     => new sfWidgetFormInputText(),
      'nomtipo'     => new sfWidgetFormInputText(),
      'anno'        => new sfWidgetFormInputText(),
      'color'       => new sfWidgetFormInputText(),
      'puestos'     => new sfWidgetFormInputText(),
      'fventa'      => new sfWidgetFormDate(),
      'serial1'     => new sfWidgetFormInputText(),
      'serial2'     => new sfWidgetFormInputText(),
      'serial3'     => new sfWidgetFormInputText(),
      'serial4'     => new sfWidgetFormInputText(),
      'foto1'       => new sfWidgetFormInputText(),
      'foto2'       => new sfWidgetFormInputText(),
      'foto3'       => new sfWidgetFormInputText(),
      'foto4'       => new sfWidgetFormInputText(),
      'notas'       => new sfWidgetFormTextarea(),
      'userreg'     => new sfWidgetFormInputText(),
      'fechareg'    => new sfWidgetFormDate(),
      'paralaventa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorString(array('max_length' => 6)),
      'agencia'     => new sfValidatorString(array('max_length' => 3)),
      'placa'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'placa', 'required' => false)),
      'referencia'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'codclien'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomclien'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'rifclien'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nitclien'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'codmarca'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nommarca'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codmodelo'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nommodelo'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codtipo'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nomtipo'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'anno'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'color'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'puestos'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fventa'      => new sfValidatorDate(array('required' => false)),
      'serial1'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'serial2'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'serial3'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'serial4'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'foto1'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'foto2'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'foto3'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'foto4'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'notas'       => new sfValidatorString(array('required' => false)),
      'userreg'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'fechareg'    => new sfValidatorDate(array('required' => false)),
      'paralaventa' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehiculos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehiculos';
  }

}
