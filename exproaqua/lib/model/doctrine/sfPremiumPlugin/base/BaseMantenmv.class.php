<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Mantenmv', 'premium');

/**
 * BaseMantenmv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $placa
 * @property string $codigo
 * @property string $nombre
 * @property string $unidad
 * @property float $cant
 * @property date $fechareq
 * @property date $fechaela
 * 
 * @method string   getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string   getAgencia()    Returns the current record's "agencia" value
 * @method string   getPlaca()      Returns the current record's "placa" value
 * @method string   getCodigo()     Returns the current record's "codigo" value
 * @method string   getNombre()     Returns the current record's "nombre" value
 * @method string   getUnidad()     Returns the current record's "unidad" value
 * @method float    getCant()       Returns the current record's "cant" value
 * @method date     getFechareq()   Returns the current record's "fechareq" value
 * @method date     getFechaela()   Returns the current record's "fechaela" value
 * @method Mantenmv setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Mantenmv setAgencia()    Sets the current record's "agencia" value
 * @method Mantenmv setPlaca()      Sets the current record's "placa" value
 * @method Mantenmv setCodigo()     Sets the current record's "codigo" value
 * @method Mantenmv setNombre()     Sets the current record's "nombre" value
 * @method Mantenmv setUnidad()     Sets the current record's "unidad" value
 * @method Mantenmv setCant()       Sets the current record's "cant" value
 * @method Mantenmv setFechareq()   Sets the current record's "fechareq" value
 * @method Mantenmv setFechaela()   Sets the current record's "fechaela" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseMantenmv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mantenmv');
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
        $this->hasColumn('placa', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('codigo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('unidad', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('cant', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('fechareq', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('fechaela', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}