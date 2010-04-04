<?php

/**
 * Integracont form base class.
 *
 * @method Integracont getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIntegracontForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_empresa'       => new sfWidgetFormInputText(),
      'integrado'        => new sfWidgetFormInputText(),
      'int_linea_cont'   => new sfWidgetFormInputText(),
      'ruta_cont'        => new sfWidgetFormInputText(),
      'detallagas'       => new sfWidgetFormInputText(),
      'codcontivavent'   => new sfWidgetFormInputText(),
      'codcontventaneta' => new sfWidgetFormInputText(),
      'codcontndven'     => new sfWidgetFormInputText(),
      'codcontncven'     => new sfWidgetFormInputText(),
      'codcontcaja'      => new sfWidgetFormInputText(),
      'codcontivacomp'   => new sfWidgetFormInputText(),
      'codcontnetocomp'  => new sfWidgetFormInputText(),
      'codcontndcomp'    => new sfWidgetFormInputText(),
      'codcontnccomp'    => new sfWidgetFormInputText(),
      'codcontartbal'    => new sfWidgetFormInputText(),
      'codcontartneto'   => new sfWidgetFormInputText(),
      'codcontartgyp'    => new sfWidgetFormInputText(),
      'codcontartcnet'   => new sfWidgetFormInputText(),
      'codcontndban'     => new sfWidgetFormInputText(),
      'codcontncban'     => new sfWidgetFormInputText(),
      'codcontgastneto'  => new sfWidgetFormInputText(),
      'codcontcxc'       => new sfWidgetFormInputText(),
      'codcontcxp'       => new sfWidgetFormInputText(),
      'codcontbanco'     => new sfWidgetFormInputText(),
      'contabpresup'     => new sfWidgetFormInputText(),
      'ruta_contp'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa'       => new sfValidatorString(array('max_length' => 6)),
      'integrado'        => new sfValidatorNumber(array('required' => false)),
      'int_linea_cont'   => new sfValidatorNumber(array('required' => false)),
      'ruta_cont'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'detallagas'       => new sfValidatorNumber(array('required' => false)),
      'codcontivavent'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontventaneta' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontndven'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontncven'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontcaja'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontivacomp'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontnetocomp'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontndcomp'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontnccomp'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontartbal'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontartneto'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontartgyp'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontartcnet'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontndban'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontncban'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontgastneto'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontcxc'       => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontcxp'       => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'codcontbanco'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'contabpresup'     => new sfValidatorNumber(array('required' => false)),
      'ruta_contp'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('integracont[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Integracont';
  }

}
