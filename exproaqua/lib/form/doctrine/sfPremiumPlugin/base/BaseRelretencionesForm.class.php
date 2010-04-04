<?php

/**
 * Relretenciones form base class.
 *
 * @method Relretenciones getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelretencionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nroretencion'  => new sfWidgetFormInputHidden(),
      'documento'     => new sfWidgetFormInputText(),
      'montoretenido' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nroretencion'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nroretencion', 'required' => false)),
      'documento'     => new sfValidatorString(array('max_length' => 8)),
      'montoretenido' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('relretenciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relretenciones';
  }

}
