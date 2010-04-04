<?php

/**
 * SeqNodos form base class.
 *
 * @method SeqNodos getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqNodosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'ncredito'   => new sfWidgetFormInputText(),
      'ndebito'    => new sfWidgetFormInputText(),
      'nrecibo'    => new sfWidgetFormInputText(),
      'numero'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'ncredito'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'ndebito'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nrecibo'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'numero'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seq_nodos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqNodos';
  }

}
