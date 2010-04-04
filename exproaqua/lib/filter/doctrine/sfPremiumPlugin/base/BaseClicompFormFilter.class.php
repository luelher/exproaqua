<?php

/**
 * Clicomp filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClicompFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'         => new sfWidgetFormFilterInput(),
      'rutafoto'       => new sfWidgetFormFilterInput(),
      'fechanac'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'clasificacion'  => new sfWidgetFormFilterInput(),
      'referencia'     => new sfWidgetFormFilterInput(),
      'fvence'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'direccion'      => new sfWidgetFormFilterInput(),
      'telefono_movil' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'     => new sfValidatorPass(array('required' => false)),
      'agencia'        => new sfValidatorPass(array('required' => false)),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'rutafoto'       => new sfValidatorPass(array('required' => false)),
      'fechanac'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'clasificacion'  => new sfValidatorPass(array('required' => false)),
      'referencia'     => new sfValidatorPass(array('required' => false)),
      'fvence'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'telefono_movil' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clicomp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clicomp';
  }

  public function getFields()
  {
    return array(
      'id_empresa'     => 'Text',
      'agencia'        => 'Text',
      'codigo'         => 'Text',
      'nombre'         => 'Text',
      'cedula'         => 'Text',
      'rutafoto'       => 'Text',
      'fechanac'       => 'Date',
      'clasificacion'  => 'Text',
      'referencia'     => 'Text',
      'fvence'         => 'Date',
      'direccion'      => 'Text',
      'telefono_movil' => 'Text',
    );
  }
}
