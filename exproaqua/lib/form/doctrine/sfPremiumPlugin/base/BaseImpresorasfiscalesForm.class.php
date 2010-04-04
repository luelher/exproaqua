<?php

/**
 * Impresorasfiscales form base class.
 *
 * @method Impresorasfiscales getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseImpresorasfiscalesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'marca'      => new sfWidgetFormInputText(),
      'modelo'     => new sfWidgetFormInputText(),
      'serial'     => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'ubicacion'  => new sfWidgetFormInputText(),
      'estatus'    => new sfWidgetFormInputText(),
      'notas'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'marca'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'modelo'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'serial'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'ubicacion'  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'estatus'    => new sfValidatorNumber(array('required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('impresorasfiscales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Impresorasfiscales';
  }

}
