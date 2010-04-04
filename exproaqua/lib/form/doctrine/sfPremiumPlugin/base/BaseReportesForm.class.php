<?php

/**
 * Reportes form base class.
 *
 * @method Reportes getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseReportesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'namereport' => new sfWidgetFormInputText(),
      'titulo'     => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormTextarea(),
      'condicion'  => new sfWidgetFormTextarea(),
      'tipocond'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'tipo'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'namereport' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'descrip'    => new sfValidatorString(array('required' => false)),
      'condicion'  => new sfValidatorString(array('required' => false)),
      'tipocond'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reportes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reportes';
  }

}
