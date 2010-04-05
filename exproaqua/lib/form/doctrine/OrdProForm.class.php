<?php

/**
 * OrdPro form.
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrdProForm extends BaseOrdProForm
{
  public function setup()
  {
    parent::setup();
    
    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'numord'     => new sfValidatorInteger(),
      'desord'     => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorDoctrineUnique(array('model' => 'OrdPro', 'column' => array('numord'))),
      new sfValidatorOrdenesProduccion()
    )));

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);


    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }

  public function configure()
  {
    $this->embedRelations(array(
      'productos' => array(
        'considerNewFormEmptyFields' => array('artcomp', 'cantidad'),
      ),
    ));
  }


  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $con) $con = $this->getConnection();

    $list_materia_prima = $this->taintedValues['list_materia_prima'];
    $list_productos = $this->taintedValues['list_productos'];

    foreach($list_productos as $prod){
      $ordpropro = new OrdProPro();
      $ordpropro->setOrdproId($this->getObject()->getId());
      $ordpropro->setArtcomp($prod['artcomp']);
      $ordpropro->setCantidad($prod['cantidad']);
      $ordpropro->save($con);
    }

    foreach($list_materia_prima as $matpri){
      $ordpromatpri = new OrdProMatPri();
      $ordpromatpri->setOrdproId($this->getObject()->getId());
      $ordpromatpri->setArtcomp($matpri['artcomp']);
      $ordpromatpri->setCantidad($matpri['cantidad']);
      $ordpromatpri->save($con);
    }

  }

  public function setObject($obj)
  {
    $this->object = $obj;
  }


}
