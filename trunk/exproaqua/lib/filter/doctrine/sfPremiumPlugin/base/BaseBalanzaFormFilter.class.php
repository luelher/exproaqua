<?php

/**
 * Balanza filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBalanzaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maximo'     => new sfWidgetFormFilterInput(),
      'codigo_d'   => new sfWidgetFormFilterInput(),
      'codigo_h'   => new sfWidgetFormFilterInput(),
      'precio_d'   => new sfWidgetFormFilterInput(),
      'precio_h'   => new sfWidgetFormFilterInput(),
      'descp_d'    => new sfWidgetFormFilterInput(),
      'descp_h'    => new sfWidgetFormFilterInput(),
      'cantidad_d' => new sfWidgetFormFilterInput(),
      'cantidad_h' => new sfWidgetFormFilterInput(),
      'descc_d'    => new sfWidgetFormFilterInput(),
      'descc_h'    => new sfWidgetFormFilterInput(),
      'char01_d'   => new sfWidgetFormFilterInput(),
      'char01_h'   => new sfWidgetFormFilterInput(),
      'char01_v'   => new sfWidgetFormFilterInput(),
      'char02_d'   => new sfWidgetFormFilterInput(),
      'char02_h'   => new sfWidgetFormFilterInput(),
      'char02_v'   => new sfWidgetFormFilterInput(),
      'char03_d'   => new sfWidgetFormFilterInput(),
      'char03_h'   => new sfWidgetFormFilterInput(),
      'char03_v'   => new sfWidgetFormFilterInput(),
      'char04_d'   => new sfWidgetFormFilterInput(),
      'char04_h'   => new sfWidgetFormFilterInput(),
      'char04_v'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'maximo'     => new sfValidatorPass(array('required' => false)),
      'codigo_d'   => new sfValidatorPass(array('required' => false)),
      'codigo_h'   => new sfValidatorPass(array('required' => false)),
      'precio_d'   => new sfValidatorPass(array('required' => false)),
      'precio_h'   => new sfValidatorPass(array('required' => false)),
      'descp_d'    => new sfValidatorPass(array('required' => false)),
      'descp_h'    => new sfValidatorPass(array('required' => false)),
      'cantidad_d' => new sfValidatorPass(array('required' => false)),
      'cantidad_h' => new sfValidatorPass(array('required' => false)),
      'descc_d'    => new sfValidatorPass(array('required' => false)),
      'descc_h'    => new sfValidatorPass(array('required' => false)),
      'char01_d'   => new sfValidatorPass(array('required' => false)),
      'char01_h'   => new sfValidatorPass(array('required' => false)),
      'char01_v'   => new sfValidatorPass(array('required' => false)),
      'char02_d'   => new sfValidatorPass(array('required' => false)),
      'char02_h'   => new sfValidatorPass(array('required' => false)),
      'char02_v'   => new sfValidatorPass(array('required' => false)),
      'char03_d'   => new sfValidatorPass(array('required' => false)),
      'char03_h'   => new sfValidatorPass(array('required' => false)),
      'char03_v'   => new sfValidatorPass(array('required' => false)),
      'char04_d'   => new sfValidatorPass(array('required' => false)),
      'char04_h'   => new sfValidatorPass(array('required' => false)),
      'char04_v'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('balanza_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Balanza';
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
      'precio_d'   => 'Text',
      'precio_h'   => 'Text',
      'descp_d'    => 'Text',
      'descp_h'    => 'Text',
      'cantidad_d' => 'Text',
      'cantidad_h' => 'Text',
      'descc_d'    => 'Text',
      'descc_h'    => 'Text',
      'char01_d'   => 'Text',
      'char01_h'   => 'Text',
      'char01_v'   => 'Text',
      'char02_d'   => 'Text',
      'char02_h'   => 'Text',
      'char02_v'   => 'Text',
      'char03_d'   => 'Text',
      'char03_h'   => 'Text',
      'char03_v'   => 'Text',
      'char04_d'   => 'Text',
      'char04_h'   => 'Text',
      'char04_v'   => 'Text',
    );
  }
}
