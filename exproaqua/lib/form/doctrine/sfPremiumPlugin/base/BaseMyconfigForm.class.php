<?php

/**
 * Myconfig form base class.
 *
 * @method Myconfig getObject() Returns the current form's model object
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMyconfigForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'id_empresa' => new sfWidgetFormInputText(),
      'agencia'    => new sfWidgetFormInputText(),
      'rutadesde'  => new sfWidgetFormInputText(),
      'rutahasta'  => new sfWidgetFormInputText(),
      'lastfecha'  => new sfWidgetFormDate(),
      'cfactura1'  => new sfWidgetFormInputText(),
      'cfactura2'  => new sfWidgetFormInputText(),
      'cfactura3'  => new sfWidgetFormInputText(),
      'cfactura4'  => new sfWidgetFormInputText(),
      'cfactura5'  => new sfWidgetFormInputText(),
      'cfactura6'  => new sfWidgetFormInputText(),
      'crecibo'    => new sfWidgetFormInputText(),
      'cnotadeb'   => new sfWidgetFormInputText(),
      'cnotacre'   => new sfWidgetFormInputText(),
      'cdevolven'  => new sfWidgetFormInputText(),
      'cdevolcom'  => new sfWidgetFormInputText(),
      'porcenaju'  => new sfWidgetFormInputText(),
      'montoaju'   => new sfWidgetFormInputText(),
      'rela_histo' => new sfWidgetFormInputText(),
      'serialdisc' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_empresa' => new sfValidatorString(array('max_length' => 6)),
      'agencia'    => new sfValidatorString(array('max_length' => 3)),
      'rutadesde'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'rutahasta'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'lastfecha'  => new sfValidatorDate(array('required' => false)),
      'cfactura1'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura2'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura3'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura4'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura5'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cfactura6'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'crecibo'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotadeb'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cnotacre'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cdevolven'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cdevolcom'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'porcenaju'  => new sfValidatorNumber(array('required' => false)),
      'montoaju'   => new sfValidatorNumber(array('required' => false)),
      'rela_histo' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'serialdisc' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('myconfig[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Myconfig';
  }

}
