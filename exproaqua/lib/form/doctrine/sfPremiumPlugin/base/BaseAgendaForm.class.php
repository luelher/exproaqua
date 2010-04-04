<?php

/**
 * Agenda form base class.
 *
 * @method Agenda getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAgendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'manana'     => new sfWidgetFormTextarea(),
      'tarde'      => new sfWidgetFormTextarea(),
      'noche'      => new sfWidgetFormTextarea(),
      'rmanana'    => new sfWidgetFormInputText(),
      'rtarde'     => new sfWidgetFormInputText(),
      'rnoche'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'manana'     => new sfValidatorString(array('required' => false)),
      'tarde'      => new sfValidatorString(array('required' => false)),
      'noche'      => new sfValidatorString(array('required' => false)),
      'rmanana'    => new sfValidatorNumber(array('required' => false)),
      'rtarde'     => new sfValidatorNumber(array('required' => false)),
      'rnoche'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agenda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agenda';
  }

}
