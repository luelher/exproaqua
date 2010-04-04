<?php

/**
 * Configtaller form base class.
 *
 * @method Configtaller getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigtallerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'id_empresa'    => new sfWidgetFormInputText(),
      'nplaca'        => new sfWidgetFormInputText(),
      'nvehiculo'     => new sfWidgetFormInputText(),
      'vehising'      => new sfWidgetFormInputText(),
      'nserial1'      => new sfWidgetFormInputText(),
      'h_serial1'     => new sfWidgetFormInputText(),
      'nserial2'      => new sfWidgetFormInputText(),
      'h_serial2'     => new sfWidgetFormInputText(),
      'nserial3'      => new sfWidgetFormInputText(),
      'h_serial3'     => new sfWidgetFormInputText(),
      'nserial4'      => new sfWidgetFormInputText(),
      'h_serial4'     => new sfWidgetFormInputText(),
      'nameorden'     => new sfWidgetFormInputText(),
      'npresup'       => new sfWidgetFormInputText(),
      'norden'        => new sfWidgetFormInputText(),
      'nreq'          => new sfWidgetFormInputText(),
      'ncarga'        => new sfWidgetFormInputText(),
      'cambiatipo'    => new sfWidgetFormInputText(),
      'rutareporte'   => new sfWidgetFormInputText(),
      'rutaquery'     => new sfWidgetFormInputText(),
      'marca'         => new sfWidgetFormInputText(),
      'h_marca'       => new sfWidgetFormInputText(),
      'modelo'        => new sfWidgetFormInputText(),
      'h_modelo'      => new sfWidgetFormInputText(),
      'tipo'          => new sfWidgetFormInputText(),
      'h_tipo'        => new sfWidgetFormInputText(),
      'colorart'      => new sfWidgetFormInputText(),
      'h_colorart'    => new sfWidgetFormInputText(),
      'anno'          => new sfWidgetFormInputText(),
      'h_anno'        => new sfWidgetFormInputText(),
      'puestos'       => new sfWidgetFormInputText(),
      'h_puestos'     => new sfWidgetFormInputText(),
      'kilometraje'   => new sfWidgetFormInputText(),
      'h_kilometraje' => new sfWidgetFormInputText(),
      'trasladose'    => new sfWidgetFormInputText(),
      'p_directo'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa'    => new sfValidatorString(array('max_length' => 6)),
      'nplaca'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nvehiculo'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'vehising'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nserial1'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'h_serial1'     => new sfValidatorInteger(array('required' => false)),
      'nserial2'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'h_serial2'     => new sfValidatorInteger(array('required' => false)),
      'nserial3'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'h_serial3'     => new sfValidatorInteger(array('required' => false)),
      'nserial4'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'h_serial4'     => new sfValidatorInteger(array('required' => false)),
      'nameorden'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'npresup'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'norden'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nreq'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'ncarga'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cambiatipo'    => new sfValidatorNumber(array('required' => false)),
      'rutareporte'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'rutaquery'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'marca'         => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_marca'       => new sfValidatorInteger(array('required' => false)),
      'modelo'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_modelo'      => new sfValidatorInteger(array('required' => false)),
      'tipo'          => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_tipo'        => new sfValidatorInteger(array('required' => false)),
      'colorart'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_colorart'    => new sfValidatorInteger(array('required' => false)),
      'anno'          => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_anno'        => new sfValidatorInteger(array('required' => false)),
      'puestos'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_puestos'     => new sfValidatorInteger(array('required' => false)),
      'kilometraje'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'h_kilometraje' => new sfValidatorInteger(array('required' => false)),
      'trasladose'    => new sfValidatorInteger(array('required' => false)),
      'p_directo'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configtaller[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configtaller';
  }

}
