<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tipoprov', 'premium');

/**
 * BaseTipoprov
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $nombre
 * @property float $prcretenc
 * @property string $codigocont
 * 
 * @method string   getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string   getAgencia()    Returns the current record's "agencia" value
 * @method string   getCodigo()     Returns the current record's "codigo" value
 * @method string   getNombre()     Returns the current record's "nombre" value
 * @method float    getPrcretenc()  Returns the current record's "prcretenc" value
 * @method string   getCodigocont() Returns the current record's "codigocont" value
 * @method Tipoprov setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Tipoprov setAgencia()    Sets the current record's "agencia" value
 * @method Tipoprov setCodigo()     Sets the current record's "codigo" value
 * @method Tipoprov setNombre()     Sets the current record's "nombre" value
 * @method Tipoprov setPrcretenc()  Sets the current record's "prcretenc" value
 * @method Tipoprov setCodigocont() Sets the current record's "codigocont" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTipoprov extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipoprov');
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
        $this->hasColumn('nombre', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('prcretenc', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('codigocont', 'string', 40, array(
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