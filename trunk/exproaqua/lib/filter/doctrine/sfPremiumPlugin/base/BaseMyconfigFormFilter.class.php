<?php

/**
 * Myconfig filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMyconfigFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutadesde'  => new sfWidgetFormFilterInput(),
      'rutahasta'  => new sfWidgetFormFilterInput(),
      'lastfecha'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cfactura1'  => new sfWidgetFormFilterInput(),
      'cfactura2'  => new sfWidgetFormFilterInput(),
      'cfactura3'  => new sfWidgetFormFilterInput(),
      'cfactura4'  => new sfWidgetFormFilterInput(),
      'cfactura5'  => new sfWidgetFormFilterInput(),
      'cfactura6'  => new sfWidgetFormFilterInput(),
      'crecibo'    => new sfWidgetFormFilterInput(),
      'cnotadeb'   => new sfWidgetFormFilterInput(),
      'cnotacre'   => new sfWidgetFormFilterInput(),
      'cdevolven'  => new sfWidgetFormFilterInput(),
      'cdevolcom'  => new sfWidgetFormFilterInput(),
      'porcenaju'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montoaju'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rela_histo' => new sfWidgetFormFilterInput(),
      'serialdisc' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa' => new sfValidatorPass(array('required' => false)),
      'agencia'    => new sfValidatorPass(array('required' => false)),
      'rutadesde'  => new sfValidatorPass(array('required' => false)),
      'rutahasta'  => new sfValidatorPass(array('required' => false)),
      'lastfecha'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cfactura1'  => new sfValidatorPass(array('required' => false)),
      'cfactura2'  => new sfValidatorPass(array('required' => false)),
      'cfactura3'  => new sfValidatorPass(array('required' => false)),
      'cfactura4'  => new sfValidatorPass(array('required' => false)),
      'cfactura5'  => new sfValidatorPass(array('required' => false)),
      'cfactura6'  => new sfValidatorPass(array('required' => false)),
      'crecibo'    => new sfValidatorPass(array('required' => false)),
      'cnotadeb'   => new sfValidatorPass(array('required' => false)),
      'cnotacre'   => new sfValidatorPass(array('required' => false)),
      'cdevolven'  => new sfValidatorPass(array('required' => false)),
      'cdevolcom'  => new sfValidatorPass(array('required' => false)),
      'porcenaju'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'montoaju'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rela_histo' => new sfValidatorPass(array('required' => false)),
      'serialdisc' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('myconfig_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Myconfig';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'id_empresa' => 'Text',
      'agencia'    => 'Text',
      'rutadesde'  => 'Text',
      'rutahasta'  => 'Text',
      'lastfecha'  => 'Date',
      'cfactura1'  => 'Text',
      'cfactura2'  => 'Text',
      'cfactura3'  => 'Text',
      'cfactura4'  => 'Text',
      'cfactura5'  => 'Text',
      'cfactura6'  => 'Text',
      'crecibo'    => 'Text',
      'cnotadeb'   => 'Text',
      'cnotacre'   => 'Text',
      'cdevolven'  => 'Text',
      'cdevolcom'  => 'Text',
      'porcenaju'  => 'Number',
      'montoaju'   => 'Number',
      'rela_histo' => 'Text',
      'serialdisc' => 'Text',
    );
  }
}
