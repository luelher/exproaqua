<?php

/**
 * Ftpconfig form base class.
 *
 * @method Ftpconfig getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFtpconfigForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'ftpsite'    => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'puerto'     => new sfWidgetFormInputText(),
      'ftpfolder'  => new sfWidgetFormInputText(),
      'pid'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'ftpsite'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'password'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'puerto'     => new sfValidatorNumber(array('required' => false)),
      'ftpfolder'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pid'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ftpconfig[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ftpconfig';
  }

}
