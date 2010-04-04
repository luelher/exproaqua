<?php

/**
 * Tcretab form base class.
 *
 * @method Tcretab getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTcretabForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'      => new sfWidgetFormInputText(),
      'agencia'         => new sfWidgetFormInputText(),
      'codigo'          => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInputText(),
      'banco'           => new sfWidgetFormInputText(),
      'prcretencion'    => new sfWidgetFormInputText(),
      'comision'        => new sfWidgetFormInputText(),
      'cuentacont'      => new sfWidgetFormInputText(),
      'cuentacont_comi' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'      => new sfValidatorString(array('max_length' => 6)),
      'agencia'         => new sfValidatorString(array('max_length' => 3)),
      'codigo'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'banco'           => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'prcretencion'    => new sfValidatorNumber(array('required' => false)),
      'comision'        => new sfValidatorNumber(array('required' => false)),
      'cuentacont'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cuentacont_comi' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tcretab[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tcretab';
  }

}
