<?php

/**
 * Serialmv form base class.
 *
 * @method Serialmv getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSerialmvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'serial'     => new sfWidgetFormInputText(),
      'almacen'    => new sfWidgetFormInputText(),
      'estatus'    => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipodoc'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputText(),
      'sumaresta'  => new sfWidgetFormInputText(),
      'doc_id'     => new sfWidgetFormInputText(),
      'fecha_doc'  => new sfWidgetFormDate(),
      'destino'    => new sfWidgetFormInputText(),
      'cliente'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'codigo'     => new sfValidatorString(array('max_length' => 25)),
      'serial'     => new sfValidatorString(array('max_length' => 30)),
      'almacen'    => new sfValidatorString(array('max_length' => 2)),
      'estatus'    => new sfValidatorString(array('max_length' => 1)),
      'agencia'    => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipodoc'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorString(array('max_length' => 8)),
      'sumaresta'  => new sfValidatorNumber(array('required' => false)),
      'doc_id'     => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'fecha_doc'  => new sfValidatorDate(array('required' => false)),
      'destino'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cliente'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('serialmv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Serialmv';
  }

}
