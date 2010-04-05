<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Listfilepresent', 'premium');

/**
 * BaseListfilepresent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $archivo
 * @property float $duracion
 * 
 * @method string          getId()         Returns the current record's "id" value
 * @method string          getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string          getAgencia()    Returns the current record's "agencia" value
 * @method string          getArchivo()    Returns the current record's "archivo" value
 * @method float           getDuracion()   Returns the current record's "duracion" value
 * @method Listfilepresent setId()         Sets the current record's "id" value
 * @method Listfilepresent setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Listfilepresent setAgencia()    Sets the current record's "agencia" value
 * @method Listfilepresent setArchivo()    Sets the current record's "archivo" value
 * @method Listfilepresent setDuracion()   Sets the current record's "duracion" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseListfilepresent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('listfilepresent');
        $this->hasColumn('id', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
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
        $this->hasColumn('archivo', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '150',
             ));
        $this->hasColumn('duracion', 'float', 7, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '7',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}