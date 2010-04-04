<?php

/**
 * Agencias form base class.
 *
 * @method Agencias getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAgenciasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'        => new sfWidgetFormInputHidden(),
      'agencia'           => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'direccion'         => new sfWidgetFormInputText(),
      'telefonos'         => new sfWidgetFormInputText(),
      'represent'         => new sfWidgetFormInputText(),
      'email'             => new sfWidgetFormInputText(),
      'cfactura1'         => new sfWidgetFormInputText(),
      'cfactura2'         => new sfWidgetFormInputText(),
      'seriefac_b'        => new sfWidgetFormInputText(),
      'seriefac_c'        => new sfWidgetFormInputText(),
      'seriefac_d'        => new sfWidgetFormInputText(),
      'seriefac_e'        => new sfWidgetFormInputText(),
      'cnotaent'          => new sfWidgetFormInputText(),
      'cpresup'           => new sfWidgetFormInputText(),
      'pnotacred'         => new sfWidgetFormInputText(),
      'pretencion'        => new sfWidgetFormInputText(),
      'pretencion2'       => new sfWidgetFormInputText(),
      'cconcilia'         => new sfWidgetFormInputText(),
      'cordencomp'        => new sfWidgetFormInputText(),
      'cpedidov'          => new sfWidgetFormInputText(),
      'pedidocom'         => new sfWidgetFormInputText(),
      'cdevolucic'        => new sfWidgetFormInputText(),
      'cnotacred'         => new sfWidgetFormInputText(),
      'cnotacred2'        => new sfWidgetFormInputText(),
      'cretencli'         => new sfWidgetFormInputText(),
      'cretencli2'        => new sfWidgetFormInputText(),
      'ccompegre'         => new sfWidgetFormInputText(),
      'pnotadeb'          => new sfWidgetFormInputText(),
      'cexisten'          => new sfWidgetFormInputText(),
      'ctransac'          => new sfWidgetFormInputText(),
      'creccob'           => new sfWidgetFormInputText(),
      'cajuste'           => new sfWidgetFormInputText(),
      'cordprod'          => new sfWidgetFormInputText(),
      'csolicitud'        => new sfWidgetFormInputText(),
      'cplanpago'         => new sfWidgetFormInputText(),
      'financiar'         => new sfWidgetFormInputText(),
      'cplancobro'        => new sfWidgetFormInputText(),
      'crecibo'           => new sfWidgetFormInputText(),
      'crecibocob'        => new sfWidgetFormInputText(),
      'crelacomi'         => new sfWidgetFormInputText(),
      'cdevoluci'         => new sfWidgetFormInputText(),
      'cnotadeb'          => new sfWidgetFormInputText(),
      'cnotadeb2'         => new sfWidgetFormInputText(),
      'conschq'           => new sfWidgetFormInputText(),
      'formatofac1'       => new sfWidgetFormInputText(),
      'formatofac2'       => new sfWidgetFormInputText(),
      'formatofacb'       => new sfWidgetFormInputText(),
      'formatofacc'       => new sfWidgetFormInputText(),
      'formatofacd'       => new sfWidgetFormInputText(),
      'formatoface'       => new sfWidgetFormInputText(),
      'formatopre'        => new sfWidgetFormInputText(),
      'formatonot'        => new sfWidgetFormInputText(),
      'pagoadelantado'    => new sfWidgetFormInputText(),
      'despacho'          => new sfWidgetFormInputText(),
      'despacho_delivery' => new sfWidgetFormInputText(),
      'cnrodoc2'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_empresa', 'required' => false)),
      'agencia'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'agencia', 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'direccion'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefonos'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'represent'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cfactura1'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura2'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'seriefac_b'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'seriefac_c'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'seriefac_d'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'seriefac_e'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotaent'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cpresup'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'pnotacred'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'pretencion'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'pretencion2'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cconcilia'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cordencomp'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cpedidov'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'pedidocom'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cdevolucic'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotacred'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotacred2'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cretencli'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cretencli2'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'ccompegre'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'pnotadeb'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cexisten'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'ctransac'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'creccob'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cajuste'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cordprod'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'csolicitud'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cplanpago'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'financiar'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cplancobro'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'crecibo'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'crecibocob'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'crelacomi'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cdevoluci'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotadeb'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotadeb2'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'conschq'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'formatofac1'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatofac2'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatofacb'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatofacc'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatofacd'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatoface'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatopre'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'formatonot'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'pagoadelantado'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'despacho'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'despacho_delivery' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnrodoc2'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agencias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agencias';
  }

}
