<?php

/**
 * Integracont filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIntegracontFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'integrado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'int_linea_cont'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ruta_cont'        => new sfWidgetFormFilterInput(),
      'detallagas'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codcontivavent'   => new sfWidgetFormFilterInput(),
      'codcontventaneta' => new sfWidgetFormFilterInput(),
      'codcontndven'     => new sfWidgetFormFilterInput(),
      'codcontncven'     => new sfWidgetFormFilterInput(),
      'codcontcaja'      => new sfWidgetFormFilterInput(),
      'codcontivacomp'   => new sfWidgetFormFilterInput(),
      'codcontnetocomp'  => new sfWidgetFormFilterInput(),
      'codcontndcomp'    => new sfWidgetFormFilterInput(),
      'codcontnccomp'    => new sfWidgetFormFilterInput(),
      'codcontartbal'    => new sfWidgetFormFilterInput(),
      'codcontartneto'   => new sfWidgetFormFilterInput(),
      'codcontartgyp'    => new sfWidgetFormFilterInput(),
      'codcontartcnet'   => new sfWidgetFormFilterInput(),
      'codcontndban'     => new sfWidgetFormFilterInput(),
      'codcontncban'     => new sfWidgetFormFilterInput(),
      'codcontgastneto'  => new sfWidgetFormFilterInput(),
      'codcontcxc'       => new sfWidgetFormFilterInput(),
      'codcontcxp'       => new sfWidgetFormFilterInput(),
      'codcontbanco'     => new sfWidgetFormFilterInput(),
      'contabpresup'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ruta_contp'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empresa'       => new sfValidatorPass(array('required' => false)),
      'integrado'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'int_linea_cont'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ruta_cont'        => new sfValidatorPass(array('required' => false)),
      'detallagas'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'codcontivavent'   => new sfValidatorPass(array('required' => false)),
      'codcontventaneta' => new sfValidatorPass(array('required' => false)),
      'codcontndven'     => new sfValidatorPass(array('required' => false)),
      'codcontncven'     => new sfValidatorPass(array('required' => false)),
      'codcontcaja'      => new sfValidatorPass(array('required' => false)),
      'codcontivacomp'   => new sfValidatorPass(array('required' => false)),
      'codcontnetocomp'  => new sfValidatorPass(array('required' => false)),
      'codcontndcomp'    => new sfValidatorPass(array('required' => false)),
      'codcontnccomp'    => new sfValidatorPass(array('required' => false)),
      'codcontartbal'    => new sfValidatorPass(array('required' => false)),
      'codcontartneto'   => new sfValidatorPass(array('required' => false)),
      'codcontartgyp'    => new sfValidatorPass(array('required' => false)),
      'codcontartcnet'   => new sfValidatorPass(array('required' => false)),
      'codcontndban'     => new sfValidatorPass(array('required' => false)),
      'codcontncban'     => new sfValidatorPass(array('required' => false)),
      'codcontgastneto'  => new sfValidatorPass(array('required' => false)),
      'codcontcxc'       => new sfValidatorPass(array('required' => false)),
      'codcontcxp'       => new sfValidatorPass(array('required' => false)),
      'codcontbanco'     => new sfValidatorPass(array('required' => false)),
      'contabpresup'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ruta_contp'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('integracont_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Integracont';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_empresa'       => 'Text',
      'integrado'        => 'Number',
      'int_linea_cont'   => 'Number',
      'ruta_cont'        => 'Text',
      'detallagas'       => 'Number',
      'codcontivavent'   => 'Text',
      'codcontventaneta' => 'Text',
      'codcontndven'     => 'Text',
      'codcontncven'     => 'Text',
      'codcontcaja'      => 'Text',
      'codcontivacomp'   => 'Text',
      'codcontnetocomp'  => 'Text',
      'codcontndcomp'    => 'Text',
      'codcontnccomp'    => 'Text',
      'codcontartbal'    => 'Text',
      'codcontartneto'   => 'Text',
      'codcontartgyp'    => 'Text',
      'codcontartcnet'   => 'Text',
      'codcontndban'     => 'Text',
      'codcontncban'     => 'Text',
      'codcontgastneto'  => 'Text',
      'codcontcxc'       => 'Text',
      'codcontcxp'       => 'Text',
      'codcontbanco'     => 'Text',
      'contabpresup'     => 'Number',
      'ruta_contp'       => 'Text',
    );
  }
}
