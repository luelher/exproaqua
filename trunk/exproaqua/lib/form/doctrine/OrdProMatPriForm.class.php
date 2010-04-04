<?php

/**
 * OrdProMatPri form.
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrdProMatPriForm extends BaseOrdProMatPriForm
{
  public function setup()
  {
    parent::setup();

    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
#      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => 'OrdPro', 'add_empty' => false)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MateriaPrima'), 'add_empty' => false)),
      'cantidad'   => new sfWidgetFormInputText(),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_mat_pri[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();


  }

  public function configure()
  {
  }
}
