<?php

/**
 * Presupti form base class.
 *
 * @method Presupti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePresuptiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'documento'  => new sfWidgetFormInputHidden(),
      'status'     => new sfWidgetFormInputText(),
      'factura'    => new sfWidgetFormInputText(),
      'tipoorden'  => new sfWidgetFormInputText(),
      'placa'      => new sfWidgetFormInputText(),
      'codmarca'   => new sfWidgetFormInputText(),
      'nommarca'   => new sfWidgetFormInputText(),
      'codmodelo'  => new sfWidgetFormInputText(),
      'nommodelo'  => new sfWidgetFormInputText(),
      'codclien'   => new sfWidgetFormInputText(),
      'nomclien'   => new sfWidgetFormInputText(),
      'rifcli'     => new sfWidgetFormInputText(),
      'nitcli'     => new sfWidgetFormInputText(),
      'codrespo'   => new sfWidgetFormInputText(),
      'nomrespo'   => new sfWidgetFormInputText(),
      'rifresp'    => new sfWidgetFormInputText(),
      'nitresp'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'hora'       => new sfWidgetFormInputText(),
      'referencia' => new sfWidgetFormInputText(),
      'tipoprecio' => new sfWidgetFormInputText(),
      'codtecnico' => new sfWidgetFormInputText(),
      'nomtecnico' => new sfWidgetFormInputText(),
      'codalmacen' => new sfWidgetFormInputText(),
      'nomalmacen' => new sfWidgetFormInputText(),
      'totneto'    => new sfWidgetFormInputText(),
      'totimpu'    => new sfWidgetFormInputText(),
      'totcargos'  => new sfWidgetFormInputText(),
      'totdescu'   => new sfWidgetFormInputText(),
      'totgeneral' => new sfWidgetFormInputText(),
      'montorep'   => new sfWidgetFormInputText(),
      'montomobra' => new sfWidgetFormInputText(),
      'montotot'   => new sfWidgetFormInputText(),
      'totpagado'  => new sfWidgetFormInputText(),
      'notas'      => new sfWidgetFormTextarea(),
      'uemisor'    => new sfWidgetFormInputText(),
      'estacion'   => new sfWidgetFormInputText(),
      'fechacierr' => new sfWidgetFormDate(),
      'horacierr'  => new sfWidgetFormInputText(),
      'usercierr'  => new sfWidgetFormInputText(),
      'estacierr'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'documento'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'documento', 'required' => false)),
      'status'     => new sfValidatorNumber(array('required' => false)),
      'factura'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipoorden'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'placa'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'codmarca'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nommarca'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codmodelo'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nommodelo'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codclien'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomclien'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'rifcli'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nitcli'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'codrespo'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nomrespo'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'rifresp'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nitresp'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fecha'      => new sfValidatorDate(array('required' => false)),
      'hora'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'referencia' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tipoprecio' => new sfValidatorNumber(array('required' => false)),
      'codtecnico' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nomtecnico' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codalmacen' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nomalmacen' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'totneto'    => new sfValidatorNumber(array('required' => false)),
      'totimpu'    => new sfValidatorNumber(array('required' => false)),
      'totcargos'  => new sfValidatorNumber(array('required' => false)),
      'totdescu'   => new sfValidatorNumber(array('required' => false)),
      'totgeneral' => new sfValidatorNumber(array('required' => false)),
      'montorep'   => new sfValidatorNumber(array('required' => false)),
      'montomobra' => new sfValidatorNumber(array('required' => false)),
      'montotot'   => new sfValidatorNumber(array('required' => false)),
      'totpagado'  => new sfValidatorNumber(array('required' => false)),
      'notas'      => new sfValidatorString(array('required' => false)),
      'uemisor'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'estacion'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fechacierr' => new sfValidatorDate(array('required' => false)),
      'horacierr'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'usercierr'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'estacierr'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presupti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Presupti';
  }

}
