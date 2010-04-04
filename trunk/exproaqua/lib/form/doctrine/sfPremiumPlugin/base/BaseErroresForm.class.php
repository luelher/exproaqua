<?php

/**
 * Errores form base class.
 *
 * @method Errores getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseErroresForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormInputText(),
      'programa'   => new sfWidgetFormInputText(),
      'metodo'     => new sfWidgetFormInputText(),
      'lineanro'   => new sfWidgetFormInputText(),
      'nroerror'   => new sfWidgetFormInputText(),
      'tipoerror'  => new sfWidgetFormTextarea(),
      'quehiso'    => new sfWidgetFormInputText(),
      'descripcio' => new sfWidgetFormInputText(),
      'dbfname'    => new sfWidgetFormInputText(),
      'clave'      => new sfWidgetFormInputText(),
      'nrecno'     => new sfWidgetFormInputText(),
      'memfree'    => new sfWidgetFormInputText(),
      'ncurdir'    => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'espacedisk' => new sfWidgetFormInputText(),
      'reclong'    => new sfWidgetFormInputText(),
      'basedato'   => new sfWidgetFormInputText(),
      'paginacode' => new sfWidgetFormInputText(),
      'ventana'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'programa'   => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'metodo'     => new sfValidatorString(array('max_length' => 106, 'required' => false)),
      'lineanro'   => new sfValidatorNumber(array('required' => false)),
      'nroerror'   => new sfValidatorNumber(array('required' => false)),
      'tipoerror'  => new sfValidatorString(array('required' => false)),
      'quehiso'    => new sfValidatorNumber(array('required' => false)),
      'descripcio' => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'dbfname'    => new sfValidatorString(array('max_length' => 122, 'required' => false)),
      'clave'      => new sfValidatorString(array('max_length' => 90, 'required' => false)),
      'nrecno'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'memfree'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'ncurdir'    => new sfValidatorString(array('max_length' => 115, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'espacedisk' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'reclong'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'basedato'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'paginacode' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'ventana'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('errores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Errores';
  }

}
