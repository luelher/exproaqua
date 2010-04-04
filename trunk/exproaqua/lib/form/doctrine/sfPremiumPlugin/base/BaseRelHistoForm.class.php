<?php

/**
 * RelHisto form base class.
 *
 * @method RelHisto getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelHistoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'relacion'   => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormInputText(),
      'neto_orig'  => new sfWidgetFormInputText(),
      'impu_orig'  => new sfWidgetFormInputText(),
      'total_orig' => new sfWidgetFormInputText(),
      'neto_hist'  => new sfWidgetFormInputText(),
      'impu_hist'  => new sfWidgetFormInputText(),
      'total_hist' => new sfWidgetFormInputText(),
      'serie'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'relacion'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'neto_orig'  => new sfValidatorNumber(array('required' => false)),
      'impu_orig'  => new sfValidatorNumber(array('required' => false)),
      'total_orig' => new sfValidatorNumber(array('required' => false)),
      'neto_hist'  => new sfValidatorNumber(array('required' => false)),
      'impu_hist'  => new sfValidatorNumber(array('required' => false)),
      'total_hist' => new sfValidatorNumber(array('required' => false)),
      'serie'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_histo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelHisto';
  }

}
