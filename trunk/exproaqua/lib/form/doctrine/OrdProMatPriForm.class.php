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

    $alm = Almconf::getConfig();

    if($alm){
      $query =  Doctrine_Query::create()
                  ->from('Articulo a')
                  ->innerJoin('a.Existenc c')
                  ->where('c.almacen = ?',$alm->getMatPri()->getCodigo());
    }else{
      $query =  Doctrine_Query::create()
                  ->from('Articulo a')
                  ->where('a.codigo = ?','xxxxxxxxxxxxxxxx');
    }

    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
#      'ordpro_id'  => new sfWidgetFormDoctrineChoice(array('model' => 'OrdPro', 'add_empty' => false)),
      'artcomp'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MateriaPrima'), 'add_empty' => false, 'query' => $query)),
      'cantidad'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'ordpro_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrdPro'))),
      'artcomp'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MateriaPrima'))),
      'cantidad'   => new sfValidatorNumber(array('required' => false)),
      'resultado'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ord_pro_mat_pri[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();


  }

  public function configure()
  {
  }
}
