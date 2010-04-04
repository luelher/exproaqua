<?php

/**
 * Ordenesreq form base class.
 *
 * @method Ordenesreq getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdenesreqForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'orden'      => new sfWidgetFormInputHidden(),
      'status'     => new sfWidgetFormInputText(),
      'despachado' => new sfWidgetFormInputText(),
      'codalmacen' => new sfWidgetFormInputText(),
      'nomalmacen' => new sfWidgetFormInputText(),
      'codtecnico' => new sfWidgetFormInputText(),
      'nomtecnico' => new sfWidgetFormInputText(),
      'fechaemis'  => new sfWidgetFormDate(),
      'horaemis'   => new sfWidgetFormInputText(),
      'fechaentr'  => new sfWidgetFormDate(),
      'notas'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'orden'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'orden', 'required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'despachado' => new sfValidatorNumber(array('required' => false)),
      'codalmacen' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nomalmacen' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codtecnico' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nomtecnico' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fechaemis'  => new sfValidatorDate(array('required' => false)),
      'horaemis'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fechaentr'  => new sfValidatorDate(array('required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenesreq[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ordenesreq';
  }

}
