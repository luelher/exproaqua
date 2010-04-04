<?php

/**
 * ComprobBan form base class.
 *
 * @method ComprobBan getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseComprobBanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'comprobant' => new sfWidgetFormInputHidden(),
      'tipomov'    => new sfWidgetFormInputHidden(),
      'codigoban'  => new sfWidgetFormInputHidden(),
      'codigocta'  => new sfWidgetFormInputHidden(),
      'pid'        => new sfWidgetFormInputHidden(),
      'nombrecta'  => new sfWidgetFormInputText(),
      'debito'     => new sfWidgetFormInputText(),
      'credito'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'comprobant' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'comprobant', 'required' => false)),
      'tipomov'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipomov', 'required' => false)),
      'codigoban'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigoban', 'required' => false)),
      'codigocta'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigocta', 'required' => false)),
      'pid'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'pid', 'required' => false)),
      'nombrecta'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'debito'     => new sfValidatorNumber(array('required' => false)),
      'credito'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comprob_ban[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ComprobBan';
  }

}
