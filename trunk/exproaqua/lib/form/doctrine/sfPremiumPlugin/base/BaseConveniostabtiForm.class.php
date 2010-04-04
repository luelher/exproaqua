<?php

/**
 * Conveniostabti form base class.
 *
 * @method Conveniostabti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConveniostabtiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'idconvenio' => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'idconvenio' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('conveniostabti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Conveniostabti';
  }

}
