<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tipoentradasalida', 'premium');

/**
 * BaseTipoentradasalida
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $nombre
 * @property Doctrine_Collection $AlmConf
 * 
 * @method string              getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string              getAgencia()    Returns the current record's "agencia" value
 * @method string              getCodigo()     Returns the current record's "codigo" value
 * @method string              getNombre()     Returns the current record's "nombre" value
 * @method Doctrine_Collection getAlmConf()    Returns the current record's "AlmConf" collection
 * @method Tipoentradasalida   setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Tipoentradasalida   setAgencia()    Sets the current record's "agencia" value
 * @method Tipoentradasalida   setCodigo()     Sets the current record's "codigo" value
 * @method Tipoentradasalida   setNombre()     Sets the current record's "nombre" value
 * @method Tipoentradasalida   setAlmConf()    Sets the current record's "AlmConf" collection
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTipoentradasalida extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipoentradasalida');
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
        $this->hasColumn('codigo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AlmConf', array(
             'local' => 'codigo',
             'foreign' => 'tipent'));
    }
}