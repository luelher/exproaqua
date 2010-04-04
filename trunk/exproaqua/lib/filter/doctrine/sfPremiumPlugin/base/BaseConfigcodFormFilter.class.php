<?php

/**
 * Configcod filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfigcodFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maximo'     => new sfWidgetFormFilterInput(),
      'codigo_d'   => new sfWidgetFormFilterInput(),
      'codigo_h'   => new sfWidgetFormFilterInput(),
      'marca_d'    => new sfWidgetFormFilterInput(),
      'marca_h'    => new sfWidgetFormFilterInput(),
      'modelo_d'   => new sfWidgetFormFilterInput(),
      'modelo_h'   => new sfWidgetFormFilterInput(),
      'talla_d'    => new sfWidgetFormFilterInput(),
      'talla_h'    => new sfWidgetFormFilterInput(),
      'color_d'    => new sfWidgetFormFilterInput(),
      'color_h'    => new sfWidgetFormFilterInput(),
      'codigot'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marcat'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelot'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tallat'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colort'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'maximo'     => new sfValidatorPass(array('required' => false)),
      'codigo_d'   => new sfValidatorPass(array('required' => false)),
      'codigo_h'   => new sfValidatorPass(array('required' => false)),
      'marca_d'    => new sfValidatorPass(array('required' => false)),
      'marca_h'    => new sfValidatorPass(array('required' => false)),
      'modelo_d'   => new sfValidatorPass(array('required' => false)),
      'modelo_h'   => new sfValidatorPass(array('required' => false)),
      'talla_d'    => new sfValidatorPass(array('required' => false)),
      'talla_h'    => new sfValidatorPass(array('required' => false)),
      'color_d'    => new sfValidatorPass(array('required' => false)),
      'color_h'    => new sfValidatorPass(array('required' => false)),
      'codigot'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'marcat'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'modelot'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tallat'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'colort'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('configcod_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configcod';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'maximo'     => 'Text',
      'codigo_d'   => 'Text',
      'codigo_h'   => 'Text',
      'marca_d'    => 'Text',
      'marca_h'    => 'Text',
      'modelo_d'   => 'Text',
      'modelo_h'   => 'Text',
      'talla_d'    => 'Text',
      'talla_h'    => 'Text',
      'color_d'    => 'Text',
      'color_h'    => 'Text',
      'codigot'    => 'Number',
      'marcat'     => 'Number',
      'modelot'    => 'Number',
      'tallat'     => 'Number',
      'colort'     => 'Number',
    );
  }
}
