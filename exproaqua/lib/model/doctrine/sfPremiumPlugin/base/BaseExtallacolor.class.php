<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Extallacolor', 'premium');

/**
 * BaseExtallacolor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $grupo
 * @property string $almacen
 * @property string $tallas
 * @property string $colores
 * @property float $existencia
 * 
 * @method string       getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string       getAgencia()    Returns the current record's "agencia" value
 * @method string       getCodigo()     Returns the current record's "codigo" value
 * @method string       getGrupo()      Returns the current record's "grupo" value
 * @method string       getAlmacen()    Returns the current record's "almacen" value
 * @method string       getTallas()     Returns the current record's "tallas" value
 * @method string       getColores()    Returns the current record's "colores" value
 * @method float        getExistencia() Returns the current record's "existencia" value
 * @method Extallacolor setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Extallacolor setAgencia()    Sets the current record's "agencia" value
 * @method Extallacolor setCodigo()     Sets the current record's "codigo" value
 * @method Extallacolor setGrupo()      Sets the current record's "grupo" value
 * @method Extallacolor setAlmacen()    Sets the current record's "almacen" value
 * @method Extallacolor setTallas()     Sets the current record's "tallas" value
 * @method Extallacolor setColores()    Sets the current record's "colores" value
 * @method Extallacolor setExistencia() Sets the current record's "existencia" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseExtallacolor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('extallacolor');
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
        $this->hasColumn('codigo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('grupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('almacen', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('tallas', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('colores', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('existencia', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}