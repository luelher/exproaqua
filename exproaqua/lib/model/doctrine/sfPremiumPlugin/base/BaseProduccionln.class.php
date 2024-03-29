<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Produccionln', 'premium');

/**
 * BaseProduccionln
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $documento
 * @property string $codigo
 * @property string $grupo
 * @property string $nombre
 * @property float $cantidadu
 * @property float $cantidadt
 * @property string $unidad
 * 
 * @method string       getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string       getAgencia()    Returns the current record's "agencia" value
 * @method string       getDocumento()  Returns the current record's "documento" value
 * @method string       getCodigo()     Returns the current record's "codigo" value
 * @method string       getGrupo()      Returns the current record's "grupo" value
 * @method string       getNombre()     Returns the current record's "nombre" value
 * @method float        getCantidadu()  Returns the current record's "cantidadu" value
 * @method float        getCantidadt()  Returns the current record's "cantidadt" value
 * @method string       getUnidad()     Returns the current record's "unidad" value
 * @method Produccionln setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Produccionln setAgencia()    Sets the current record's "agencia" value
 * @method Produccionln setDocumento()  Sets the current record's "documento" value
 * @method Produccionln setCodigo()     Sets the current record's "codigo" value
 * @method Produccionln setGrupo()      Sets the current record's "grupo" value
 * @method Produccionln setNombre()     Sets the current record's "nombre" value
 * @method Produccionln setCantidadu()  Sets the current record's "cantidadu" value
 * @method Produccionln setCantidadt()  Sets the current record's "cantidadt" value
 * @method Produccionln setUnidad()     Sets the current record's "unidad" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseProduccionln extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('produccionln');
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
        $this->hasColumn('documento', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
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
        $this->hasColumn('nombre', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('cantidadu', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cantidadt', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('unidad', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}