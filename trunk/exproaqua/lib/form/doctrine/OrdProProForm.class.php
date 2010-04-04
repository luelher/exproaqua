<?php

/**
 * OrdProPro form.
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrdProProForm extends BaseOrdProProForm
{

  public function setup()
  {
    parent::setup();

    $query =  Doctrine_Query::create()
                ->from('Articulo a')
                ->innerJoin('a.Compuestos c');

//    $query = Doctrine_Core::getTable($this->getRelatedModelName('OrdenProduccion'))->createQuery()
//                ->innerJoin('Compuestos');


    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
#      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => 'OrdPro', 'add_empty' => false)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticuloCompuesto'), 'add_empty' => false, 'query' => $query)),
      'cantidad'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'ordpro_id'  => new sfValidatorDoctrineChoice(array('model' => 'OrdPro')),
      'artcomp'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ArticuloCompuesto'))),
      'cantidad'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_pro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

  }

  public function configure()
  {
  }
}
