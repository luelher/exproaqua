<?php

/**
 * Invcodalternativo form base class.
 *
 * @method Invcodalternativo getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseInvcodalternativoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormInputText(),
      'agencia'        => new sfWidgetFormInputText(),
      'codigo'         => new sfWidgetFormInputHidden(),
      'codalternativo' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorString(array('max_length' => 6)),
      'agencia'        => new sfValidatorString(array('max_length' => 3)),
      'codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'codalternativo' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codalternativo', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('invcodalternativo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Invcodalternativo';
  }

}
