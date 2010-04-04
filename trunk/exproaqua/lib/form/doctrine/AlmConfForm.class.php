<?php

/**
 * AlmConf form.
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AlmConfForm extends BaseAlmConfForm
{
  public function setup()
  {
    parent::setup();

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'almmatpri'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AlmMatPri'), 'column' => 'codigo', 'required' => true)),
      'almpropro'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AlmProPro'), 'column' => 'codigo', 'required' => true)),
      'almproter'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AlmProTer'), 'column' => 'codigo', 'required' => true)),
    ));

  }
  public function configure()
  {
  }
}
