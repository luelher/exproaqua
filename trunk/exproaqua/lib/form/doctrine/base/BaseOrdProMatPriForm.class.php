<?php

/**
 * OrdProMatPri form base class.
 *
 * @method OrdProMatPri getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdProMatPriForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'), 'add_empty' => false)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MateriaPrima'), 'add_empty' => false)),
      'cantidad'   => new sfWidgetFormInputText(),
      'resultado'  => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'ordpro_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'))),
      'artcomp'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MateriaPrima'))),
      'cantidad'   => new sfValidatorNumber(),
      'resultado'  => new sfValidatorNumber(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_mat_pri[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdProMatPri';
  }

}
