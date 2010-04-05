<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Otrostipocob', 'premium');

/**
 * BaseOtrostipocob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $tipo
 * @property string $recibo
 * @property string $pid
 * @property float $importeunitario
 * @property float $cantidad
 * @property float $importetotal
 * 
 * @method string       getIdEmpresa()       Returns the current record's "id_empresa" value
 * @method string       getAgencia()         Returns the current record's "agencia" value
 * @method string       getTipo()            Returns the current record's "tipo" value
 * @method string       getRecibo()          Returns the current record's "recibo" value
 * @method string       getPid()             Returns the current record's "pid" value
 * @method float        getImporteunitario() Returns the current record's "importeunitario" value
 * @method float        getCantidad()        Returns the current record's "cantidad" value
 * @method float        getImportetotal()    Returns the current record's "importetotal" value
 * @method Otrostipocob setIdEmpresa()       Sets the current record's "id_empresa" value
 * @method Otrostipocob setAgencia()         Sets the current record's "agencia" value
 * @method Otrostipocob setTipo()            Sets the current record's "tipo" value
 * @method Otrostipocob setRecibo()          Sets the current record's "recibo" value
 * @method Otrostipocob setPid()             Sets the current record's "pid" value
 * @method Otrostipocob setImporteunitario() Sets the current record's "importeunitario" value
 * @method Otrostipocob setCantidad()        Sets the current record's "cantidad" value
 * @method Otrostipocob setImportetotal()    Sets the current record's "importetotal" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseOtrostipocob extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('otrostipocob');
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
        $this->hasColumn('tipo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('recibo', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('pid', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('importeunitario', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cantidad', 'float', 11, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '11',
             ));
        $this->hasColumn('importetotal', 'float', 20, array(
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