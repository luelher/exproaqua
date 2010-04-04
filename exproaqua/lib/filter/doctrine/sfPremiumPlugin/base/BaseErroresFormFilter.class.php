<?php

/**
 * Errores filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseErroresFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(),
      'agencia'    => new sfWidgetFormFilterInput(),
      'usuario'    => new sfWidgetFormFilterInput(),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'       => new sfWidgetFormFilterInput(),
      'programa'   => new sfWidgetFormFilterInput(),
      'metodo'     => new sfWidgetFormFilterInput(),
      'lineanro'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nroerror'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipoerror'  => new sfWidgetFormFilterInput(),
      'quehiso'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcio' => new sfWidgetFormFilterInput(),
      'dbfname'    => new sfWidgetFormFilterInput(),
      'clave'      => new sfWidgetFormFilterInput(),
      'nrecno'     => new sfWidgetFormFilterInput(),
      'memfree'    => new sfWidgetFormFilterInput(),
      'ncurdir'    => new sfWidgetFormFilterInput(),
      'estacion'   => new sfWidgetFormFilterInput(),
      'espacedisk' => new sfWidgetFormFilterInput(),
      'reclong'    => new sfWidgetFormFilterInput(),
      'basedato'   => new sfWidgetFormFilterInput(),
      'paginacode' => new sfWidgetFormFilterInput(),
      'ventana'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'       => new sfValidatorPass(array('required' => false)),
      'programa'   => new sfValidatorPass(array('required' => false)),
      'metodo'     => new sfValidatorPass(array('required' => false)),
      'lineanro'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nroerror'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipoerror'  => new sfValidatorPass(array('required' => false)),
      'quehiso'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descripcio' => new sfValidatorPass(array('required' => false)),
      'dbfname'    => new sfValidatorPass(array('required' => false)),
      'clave'      => new sfValidatorPass(array('required' => false)),
      'nrecno'     => new sfValidatorPass(array('required' => false)),
      'memfree'    => new sfValidatorPass(array('required' => false)),
      'ncurdir'    => new sfValidatorPass(array('required' => false)),
      'estacion'   => new sfValidatorPass(array('required' => false)),
      'espacedisk' => new sfValidatorPass(array('required' => false)),
      'reclong'    => new sfValidatorPass(array('required' => false)),
      'basedato'   => new sfValidatorPass(array('required' => false)),
      'paginacode' => new sfValidatorPass(array('required' => false)),
      'ventana'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('errores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Errores';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'usuario'    => 'Text',
      'fecha'      => 'Date',
      'hora'       => 'Text',
      'programa'   => 'Text',
      'metodo'     => 'Text',
      'lineanro'   => 'Number',
      'nroerror'   => 'Number',
      'tipoerror'  => 'Text',
      'quehiso'    => 'Number',
      'descripcio' => 'Text',
      'dbfname'    => 'Text',
      'clave'      => 'Text',
      'nrecno'     => 'Text',
      'memfree'    => 'Text',
      'ncurdir'    => 'Text',
      'estacion'   => 'Text',
      'espacedisk' => 'Text',
      'reclong'    => 'Text',
      'basedato'   => 'Text',
      'paginacode' => 'Text',
      'ventana'    => 'Text',
    );
  }
}
