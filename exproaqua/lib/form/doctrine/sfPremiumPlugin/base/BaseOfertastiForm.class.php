<?php

/**
 * Ofertasti form base class.
 *
 * @method Ofertasti getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOfertastiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'   => new sfWidgetFormInputText(),
      'agencia'      => new sfWidgetFormInputText(),
      'idoferta'     => new sfWidgetFormInputHidden(),
      'titulo'       => new sfWidgetFormInputText(),
      'fechadesde'   => new sfWidgetFormDate(),
      'fechahasta'   => new sfWidgetFormDate(),
      'usuario_crea' => new sfWidgetFormInputText(),
      'estacion'     => new sfWidgetFormInputText(),
      'fecha_crea'   => new sfWidgetFormDate(),
      'dias_semana'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_empresa'   => new sfValidatorString(array('max_length' => 6)),
      'agencia'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'idoferta'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'idoferta', 'required' => false)),
      'titulo'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fechadesde'   => new sfValidatorDate(array('required' => false)),
      'fechahasta'   => new sfValidatorDate(array('required' => false)),
      'usuario_crea' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'estacion'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fecha_crea'   => new sfValidatorDate(array('required' => false)),
      'dias_semana'  => new sfValidatorString(array('max_length' => 7, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ofertasti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ofertasti';
  }

}
