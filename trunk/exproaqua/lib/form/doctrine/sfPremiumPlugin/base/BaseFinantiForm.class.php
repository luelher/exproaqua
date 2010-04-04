<?php

/**
 * Finanti form base class.
 *
 * @method Finanti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFinantiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'finan'      => new sfWidgetFormInputHidden(),
      'cliente'    => new sfWidgetFormInputHidden(),
      'nombrecli'  => new sfWidgetFormInputText(),
      'fiador'     => new sfWidgetFormInputText(),
      'cedula'     => new sfWidgetFormInputText(),
      'dirhab'     => new sfWidgetFormInputText(),
      'dirtrab'    => new sfWidgetFormInputText(),
      'telefonos'  => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'monto'      => new sfWidgetFormInputText(),
      'inicialprc' => new sfWidgetFormInputText(),
      'inicial'    => new sfWidgetFormInputText(),
      'saldoneto'  => new sfWidgetFormInputText(),
      'interesprc' => new sfWidgetFormInputText(),
      'interes'    => new sfWidgetFormInputText(),
      'gestionprc' => new sfWidgetFormInputText(),
      'gestion'    => new sfWidgetFormInputText(),
      'gastosprc'  => new sfWidgetFormInputText(),
      'gastos'     => new sfWidgetFormInputText(),
      'tinicial'   => new sfWidgetFormInputText(),
      'tfinanciar' => new sfWidgetFormInputText(),
      'periodos'   => new sfWidgetFormInputText(),
      'intervalo'  => new sfWidgetFormInputText(),
      'fdesde'     => new sfWidgetFormDate(),
      'fechaproc'  => new sfWidgetFormDate(),
      'usuario'    => new sfWidgetFormInputText(),
      'nodo'       => new sfWidgetFormInputText(),
      'fcuota1'    => new sfWidgetFormDate(),
      'fcuota2'    => new sfWidgetFormDate(),
      'mtocuota1'  => new sfWidgetFormInputText(),
      'mtocuota2'  => new sfWidgetFormInputText(),
      'vendedor'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'finan'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'finan', 'required' => false)),
      'cliente'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cliente', 'required' => false)),
      'nombrecli'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fiador'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cedula'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'dirhab'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'dirtrab'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tipodoc'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'documento'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'inicialprc' => new sfValidatorNumber(array('required' => false)),
      'inicial'    => new sfValidatorNumber(array('required' => false)),
      'saldoneto'  => new sfValidatorNumber(array('required' => false)),
      'interesprc' => new sfValidatorNumber(array('required' => false)),
      'interes'    => new sfValidatorNumber(array('required' => false)),
      'gestionprc' => new sfValidatorNumber(array('required' => false)),
      'gestion'    => new sfValidatorNumber(array('required' => false)),
      'gastosprc'  => new sfValidatorNumber(array('required' => false)),
      'gastos'     => new sfValidatorNumber(array('required' => false)),
      'tinicial'   => new sfValidatorNumber(array('required' => false)),
      'tfinanciar' => new sfValidatorNumber(array('required' => false)),
      'periodos'   => new sfValidatorNumber(array('required' => false)),
      'intervalo'  => new sfValidatorNumber(array('required' => false)),
      'fdesde'     => new sfValidatorDate(array('required' => false)),
      'fechaproc'  => new sfValidatorDate(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nodo'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fcuota1'    => new sfValidatorDate(array('required' => false)),
      'fcuota2'    => new sfValidatorDate(array('required' => false)),
      'mtocuota1'  => new sfValidatorNumber(array('required' => false)),
      'mtocuota2'  => new sfValidatorNumber(array('required' => false)),
      'vendedor'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('finanti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Finanti';
  }

}
