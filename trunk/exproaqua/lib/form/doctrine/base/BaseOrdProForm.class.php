<?php

/**
 * OrdPro form base class.
 *
 * @method OrdPro getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdProForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'numord'     => new sfWidgetFormInputText(),
      'desord'     => new sfWidgetFormInputText(),
      'fecord'     => new sfWidgetFormDateTime(),
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'fecanu'     => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'numord'     => new sfValidatorInteger(),
      'desord'     => new sfValidatorString(array('max_length' => 100)),
      'fecord'     => new sfValidatorDateTime(),
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'fecanu'     => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'OrdPro', 'column' => array('numord')))
    );

    $this->widgetSchema->setNameFormat('ord_pro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdPro';
  }

}
