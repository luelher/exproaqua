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
      'almmatpri'  => new sfValidatorDoctrineChoice(array('model' => 'Almacene', 'column' => 'codigo', 'required' => true)),
      'almpropro'  => new sfValidatorDoctrineChoice(array('model' => 'Almacene', 'column' => 'codigo', 'required' => true)),
      'almproter'  => new sfValidatorDoctrineChoice(array('model' => 'Almacene', 'column' => 'codigo', 'required' => true)),
      'usuario'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'))),
      'condoc'     => new sfValidatorInteger(array('required' => false)),
      'tipent'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEntrada'))),
      'tipsal'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoSalida'))),
    ));

  }
  public function configure()
  {
  }
}
