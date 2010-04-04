<?php

/**
 * Subgrupos form base class.
 *
 * @method Subgrupos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSubgruposForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'      => new sfWidgetFormInputText(),
      'agencia'         => new sfWidgetFormInputText(),
      'codigo'          => new sfWidgetFormInputHidden(),
      'subcodigo'       => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInputText(),
      'ctacontinv'      => new sfWidgetFormInputText(),
      'ctacontcostos'   => new sfWidgetFormInputText(),
      'ctacontingresos' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'      => new sfValidatorString(array('max_length' => 6)),
      'agencia'         => new sfValidatorString(array('max_length' => 3)),
      'codigo'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'subcodigo'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'subcodigo', 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ctacontinv'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'ctacontcostos'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'ctacontingresos' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subgrupos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subgrupos';
  }

}
