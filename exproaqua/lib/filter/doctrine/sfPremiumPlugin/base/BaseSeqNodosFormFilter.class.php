<?php

/**
 * SeqNodos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqNodosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'ncredito'   => new sfWidgetFormFilterInput(),
      'ndebito'    => new sfWidgetFormFilterInput(),
      'nrecibo'    => new sfWidgetFormFilterInput(),
      'numero'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'ncredito'   => new sfValidatorPass(array('required' => false)),
      'ndebito'    => new sfValidatorPass(array('required' => false)),
      'nrecibo'    => new sfValidatorPass(array('required' => false)),
      'numero'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seq_nodos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqNodos';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'estacion'   => 'Text',
      'ncredito'   => 'Text',
      'ndebito'    => 'Text',
      'nrecibo'    => 'Text',
      'numero'     => 'Text',
    );
  }
}
