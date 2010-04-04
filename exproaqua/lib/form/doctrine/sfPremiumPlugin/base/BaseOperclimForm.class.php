<?php

/**
 * Operclim form base class.
 *
 * @method Operclim getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOperclimForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputHidden(),
      'agencia'    => new sfWidgetFormInputHidden(),
      'tiporec'    => new sfWidgetFormInputText(),
      'recibo'     => new sfWidgetFormInputHidden(),
      'monto'      => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputHidden(),
      'saldo'      => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'tranferido' => new sfWidgetFormInputText(),
      'procedecre' => new sfWidgetFormInputText(),
      'integrado'  => new sfWidgetFormInputText(),
      'fac_emi'    => new sfWidgetFormDate(),
      'reci_emi'   => new sfWidgetFormDate(),
      'almacen'    => new sfWidgetFormInputText(),
      'vendedor'   => new sfWidgetFormInputText(),
      'cliente'    => new sfWidgetFormInputText(),
      'sector'     => new sfWidgetFormInputText(),
      'horadocum'  => new sfWidgetFormInputText(),
      'ampm'       => new sfWidgetFormInputText(),
      'caja'       => new sfWidgetFormInputText(),
      'statusrec'  => new sfWidgetFormInputText(),
      'turno'      => new sfWidgetFormInputText(),
      'fechayhora' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'tiporec'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'recibo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'recibo', 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'tipodoc'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipodoc', 'required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'tranferido' => new sfValidatorNumber(array('required' => false)),
      'procedecre' => new sfValidatorNumber(array('required' => false)),
      'integrado'  => new sfValidatorNumber(array('required' => false)),
      'fac_emi'    => new sfValidatorDate(array('required' => false)),
      'reci_emi'   => new sfValidatorDate(array('required' => false)),
      'almacen'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'vendedor'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cliente'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'sector'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'horadocum'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ampm'       => new sfValidatorNumber(array('required' => false)),
      'caja'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'statusrec'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'turno'      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fechayhora' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('operclim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Operclim';
  }

}
