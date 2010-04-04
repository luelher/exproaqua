<?php

/**
 * OrdProPro form base class.
 *
 * @method OrdProPro getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdProProForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'), 'add_empty' => false)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticuloCompuesto'), 'add_empty' => false)),
      'cantidad'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'ordpro_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'))),
      'artcomp'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ArticuloCompuesto'))),
      'cantidad'   => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_pro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdProPro';
  }

}
