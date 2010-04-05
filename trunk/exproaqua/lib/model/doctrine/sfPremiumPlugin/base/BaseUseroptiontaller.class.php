<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Useroptiontaller', 'premium');

/**
 * BaseUseroptiontaller
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $username
 * @property string $codigo
 * @property string $nombre
 * @property float $asignada
 * 
 * @method integer          getId()         Returns the current record's "id" value
 * @method string           getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string           getAgencia()    Returns the current record's "agencia" value
 * @method string           getUsername()   Returns the current record's "username" value
 * @method string           getCodigo()     Returns the current record's "codigo" value
 * @method string           getNombre()     Returns the current record's "nombre" value
 * @method float            getAsignada()   Returns the current record's "asignada" value
 * @method Useroptiontaller setId()         Sets the current record's "id" value
 * @method Useroptiontaller setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Useroptiontaller setAgencia()    Sets the current record's "agencia" value
 * @method Useroptiontaller setUsername()   Sets the current record's "username" value
 * @method Useroptiontaller setCodigo()     Sets the current record's "codigo" value
 * @method Useroptiontaller setNombre()     Sets the current record's "nombre" value
 * @method Useroptiontaller setAsignada()   Sets the current record's "asignada" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseUseroptiontaller extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('useroptiontaller');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('username', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('codigo', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('nombre', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('asignada', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}