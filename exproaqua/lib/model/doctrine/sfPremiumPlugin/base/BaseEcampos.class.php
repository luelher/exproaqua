<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ecampos', 'premium');

/**
 * BaseEcampos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $tipodoc
 * @property string $documento
 * @property string $respuesta1
 * @property string $respuesta2
 * @property string $respuesta3
 * @property string $respuesta4
 * @property string $respuesta5
 * 
 * @method string  getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string  getAgencia()    Returns the current record's "agencia" value
 * @method string  getTipodoc()    Returns the current record's "tipodoc" value
 * @method string  getDocumento()  Returns the current record's "documento" value
 * @method string  getRespuesta1() Returns the current record's "respuesta1" value
 * @method string  getRespuesta2() Returns the current record's "respuesta2" value
 * @method string  getRespuesta3() Returns the current record's "respuesta3" value
 * @method string  getRespuesta4() Returns the current record's "respuesta4" value
 * @method string  getRespuesta5() Returns the current record's "respuesta5" value
 * @method Ecampos setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Ecampos setAgencia()    Sets the current record's "agencia" value
 * @method Ecampos setTipodoc()    Sets the current record's "tipodoc" value
 * @method Ecampos setDocumento()  Sets the current record's "documento" value
 * @method Ecampos setRespuesta1() Sets the current record's "respuesta1" value
 * @method Ecampos setRespuesta2() Sets the current record's "respuesta2" value
 * @method Ecampos setRespuesta3() Sets the current record's "respuesta3" value
 * @method Ecampos setRespuesta4() Sets the current record's "respuesta4" value
 * @method Ecampos setRespuesta5() Sets the current record's "respuesta5" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEcampos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ecampos');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('agencia', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('tipodoc', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('documento', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('respuesta1', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('respuesta2', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('respuesta3', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('respuesta4', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('respuesta5', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}