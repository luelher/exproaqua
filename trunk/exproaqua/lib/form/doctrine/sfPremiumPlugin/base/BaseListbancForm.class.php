<?php

/**
 * Listbanc form base class.
 *
 * @method Listbanc getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseListbancForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputHidden(),
      'banco'      => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormInputText(),
      'represent'  => new sfWidgetFormInputText(),
      'telefonos'  => new sfWidgetFormInputText(),
      'cuentaban'  => new sfWidgetFormInputText(),
      'tipocta'    => new sfWidgetFormInputText(),
      'titular'    => new sfWidgetFormInputText(),
      'apertura'   => new sfWidgetFormDate(),
      'moneda'     => new sfWidgetFormInputText(),
      'porcent'    => new sfWidgetFormInputText(),
      'wwwsite'    => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'cuentacon'  => new sfWidgetFormInputText(),
      'naturaleza' => new sfWidgetFormInputText(),
      'topenat'    => new sfWidgetFormInputText(),
      'formato'    => new sfWidgetFormInputText(),
      'proximoch'  => new sfWidgetFormInputText(),
      'notacred'   => new sfWidgetFormInputText(),
      'notadeb'    => new sfWidgetFormInputText(),
      'ultconcil'  => new sfWidgetFormInputText(),
      'ultmescon'  => new sfWidgetFormInputText(),
      'concil_ene' => new sfWidgetFormInputText(),
      'concil_feb' => new sfWidgetFormInputText(),
      'concil_mar' => new sfWidgetFormInputText(),
      'concil_abr' => new sfWidgetFormInputText(),
      'concil_may' => new sfWidgetFormInputText(),
      'concil_jun' => new sfWidgetFormInputText(),
      'concil_jul' => new sfWidgetFormInputText(),
      'concil_ago' => new sfWidgetFormInputText(),
      'concil_sep' => new sfWidgetFormInputText(),
      'concil_oct' => new sfWidgetFormInputText(),
      'concil_nov' => new sfWidgetFormInputText(),
      'concil_dic' => new sfWidgetFormInputText(),
      'actualyear' => new sfWidgetFormInputText(),
      'cuentanac'  => new sfWidgetFormInputText(),
      'asientcont' => new sfWidgetFormInputText(),
      'difmisban'  => new sfWidgetFormInputText(),
      'difplaza'   => new sfWidgetFormInputText(),
      'diffuerapl' => new sfWidgetFormInputText(),
      'codigocont' => new sfWidgetFormInputText(),
      'idconcilia' => new sfWidgetFormInputText(),
      'ctadebban'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'banco'      => new sfValidatorString(array('max_length' => 59, 'required' => false)),
      'direccion'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'represent'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cuentaban'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tipocta'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'titular'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'apertura'   => new sfValidatorDate(array('required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'porcent'    => new sfValidatorNumber(array('required' => false)),
      'wwwsite'    => new sfValidatorString(array('max_length' => 81, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cuentacon'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'naturaleza' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'topenat'    => new sfValidatorNumber(array('required' => false)),
      'formato'    => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'proximoch'  => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'notacred'   => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'notadeb'    => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'ultconcil'  => new sfValidatorNumber(array('required' => false)),
      'ultmescon'  => new sfValidatorNumber(array('required' => false)),
      'concil_ene' => new sfValidatorNumber(array('required' => false)),
      'concil_feb' => new sfValidatorNumber(array('required' => false)),
      'concil_mar' => new sfValidatorNumber(array('required' => false)),
      'concil_abr' => new sfValidatorNumber(array('required' => false)),
      'concil_may' => new sfValidatorNumber(array('required' => false)),
      'concil_jun' => new sfValidatorNumber(array('required' => false)),
      'concil_jul' => new sfValidatorNumber(array('required' => false)),
      'concil_ago' => new sfValidatorNumber(array('required' => false)),
      'concil_sep' => new sfValidatorNumber(array('required' => false)),
      'concil_oct' => new sfValidatorNumber(array('required' => false)),
      'concil_nov' => new sfValidatorNumber(array('required' => false)),
      'concil_dic' => new sfValidatorNumber(array('required' => false)),
      'actualyear' => new sfValidatorNumber(array('required' => false)),
      'cuentanac'  => new sfValidatorNumber(array('required' => false)),
      'asientcont' => new sfValidatorNumber(array('required' => false)),
      'difmisban'  => new sfValidatorNumber(array('required' => false)),
      'difplaza'   => new sfValidatorNumber(array('required' => false)),
      'diffuerapl' => new sfValidatorNumber(array('required' => false)),
      'codigocont' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'idconcilia' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'ctadebban'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listbanc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listbanc';
  }

}
