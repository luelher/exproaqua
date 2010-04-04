<?php

/**
 * Relretenciones filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelretencionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'documento'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montoretenido' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'documento'     => new sfValidatorPass(array('required' => false)),
      'montoretenido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('relretenciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relretenciones';
  }

  public function getFields()
  {
    return array(
      'nroretencion'  => 'Text',
      'documento'     => 'Text',
      'montoretenido' => 'Number',
    );
  }
}
