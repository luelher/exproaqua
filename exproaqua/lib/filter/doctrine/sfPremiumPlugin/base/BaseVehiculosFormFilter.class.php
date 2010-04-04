<?php

/**
 * Vehiculos filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVehiculosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'referencia'  => new sfWidgetFormFilterInput(),
      'codclien'    => new sfWidgetFormFilterInput(),
      'nomclien'    => new sfWidgetFormFilterInput(),
      'rifclien'    => new sfWidgetFormFilterInput(),
      'nitclien'    => new sfWidgetFormFilterInput(),
      'codmarca'    => new sfWidgetFormFilterInput(),
      'nommarca'    => new sfWidgetFormFilterInput(),
      'codmodelo'   => new sfWidgetFormFilterInput(),
      'nommodelo'   => new sfWidgetFormFilterInput(),
      'codtipo'     => new sfWidgetFormFilterInput(),
      'nomtipo'     => new sfWidgetFormFilterInput(),
      'anno'        => new sfWidgetFormFilterInput(),
      'color'       => new sfWidgetFormFilterInput(),
      'puestos'     => new sfWidgetFormFilterInput(),
      'fventa'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'serial1'     => new sfWidgetFormFilterInput(),
      'serial2'     => new sfWidgetFormFilterInput(),
      'serial3'     => new sfWidgetFormFilterInput(),
      'serial4'     => new sfWidgetFormFilterInput(),
      'foto1'       => new sfWidgetFormFilterInput(),
      'foto2'       => new sfWidgetFormFilterInput(),
      'foto3'       => new sfWidgetFormFilterInput(),
      'foto4'       => new sfWidgetFormFilterInput(),
      'notas'       => new sfWidgetFormFilterInput(),
      'userreg'     => new sfWidgetFormFilterInput(),
      'fechareg'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'paralaventa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'  => new sfValidatorPass(array('required' => false)),
      'agencia'     => new sfValidatorPass(array('required' => false)),
      'referencia'  => new sfValidatorPass(array('required' => false)),
      'codclien'    => new sfValidatorPass(array('required' => false)),
      'nomclien'    => new sfValidatorPass(array('required' => false)),
      'rifclien'    => new sfValidatorPass(array('required' => false)),
      'nitclien'    => new sfValidatorPass(array('required' => false)),
      'codmarca'    => new sfValidatorPass(array('required' => false)),
      'nommarca'    => new sfValidatorPass(array('required' => false)),
      'codmodelo'   => new sfValidatorPass(array('required' => false)),
      'nommodelo'   => new sfValidatorPass(array('required' => false)),
      'codtipo'     => new sfValidatorPass(array('required' => false)),
      'nomtipo'     => new sfValidatorPass(array('required' => false)),
      'anno'        => new sfValidatorPass(array('required' => false)),
      'color'       => new sfValidatorPass(array('required' => false)),
      'puestos'     => new sfValidatorPass(array('required' => false)),
      'fventa'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'serial1'     => new sfValidatorPass(array('required' => false)),
      'serial2'     => new sfValidatorPass(array('required' => false)),
      'serial3'     => new sfValidatorPass(array('required' => false)),
      'serial4'     => new sfValidatorPass(array('required' => false)),
      'foto1'       => new sfValidatorPass(array('required' => false)),
      'foto2'       => new sfValidatorPass(array('required' => false)),
      'foto3'       => new sfValidatorPass(array('required' => false)),
      'foto4'       => new sfValidatorPass(array('required' => false)),
      'notas'       => new sfValidatorPass(array('required' => false)),
      'userreg'     => new sfValidatorPass(array('required' => false)),
      'fechareg'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'paralaventa' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vehiculos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehiculos';
  }

  public function getFields()
  {
    return array(
      'id_empresa'  => 'Text',
      'agencia'     => 'Text',
      'placa'       => 'Text',
      'referencia'  => 'Text',
      'codclien'    => 'Text',
      'nomclien'    => 'Text',
      'rifclien'    => 'Text',
      'nitclien'    => 'Text',
      'codmarca'    => 'Text',
      'nommarca'    => 'Text',
      'codmodelo'   => 'Text',
      'nommodelo'   => 'Text',
      'codtipo'     => 'Text',
      'nomtipo'     => 'Text',
      'anno'        => 'Text',
      'color'       => 'Text',
      'puestos'     => 'Text',
      'fventa'      => 'Date',
      'serial1'     => 'Text',
      'serial2'     => 'Text',
      'serial3'     => 'Text',
      'serial4'     => 'Text',
      'foto1'       => 'Text',
      'foto2'       => 'Text',
      'foto3'       => 'Text',
      'foto4'       => 'Text',
      'notas'       => 'Text',
      'userreg'     => 'Text',
      'fechareg'    => 'Date',
      'paralaventa' => 'Number',
    );
  }
}
