<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Condipag', 'premium');

/**
 * BaseCondipag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $nombre
 * @property float $dias
 * 
 * @method string   getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string   getAgencia()    Returns the current record's "agencia" value
 * @method string   getCodigo()     Returns the current record's "codigo" value
 * @method string   getNombre()     Returns the current record's "nombre" value
 * @method float    getDias()       Returns the current record's "dias" value
 * @method Condipag setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Condipag setAgencia()    Sets the current record's "agencia" value
 * @method Condipag setCodigo()     Sets the current record's "codigo" value
 * @method Condipag setNombre()     Sets the current record's "nombre" value
 * @method Condipag setDias()       Sets the current record's "dias" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCondipag extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('condipag');
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
        $this->hasColumn('codigo', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('dias', 'float', 4, array(
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