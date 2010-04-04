<?php

/**
 * Tablaturnos form base class.
 *
 * @method Tablaturnos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTablaturnosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'dia'        => new sfWidgetFormInputText(),
      'turno'      => new sfWidgetFormInputText(),
      'serie'      => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'dia'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'turno'      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'serie'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tablaturnos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tablaturnos';
  }

}
