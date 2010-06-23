<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Articomp', 'premium');

/**
 * BaseArticomp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $compuesto
 * @property string $grupo
 * @property string $codigo
 * @property string $nombre
 * @property float $preciounit
 * @property float $costounit
 * @property float $cantidad
 * @property string $unidad
 * @property float $semodifica
 * @property float $factor
 * @property string $notas
 * @property integer $tipodotacion
 * @property Articulo $Articulo
 * 
 * @method string   getIdEmpresa()    Returns the current record's "id_empresa" value
 * @method string   getAgencia()      Returns the current record's "agencia" value
 * @method string   getCompuesto()    Returns the current record's "compuesto" value
 * @method string   getGrupo()        Returns the current record's "grupo" value
 * @method string   getCodigo()       Returns the current record's "codigo" value
 * @method string   getNombre()       Returns the current record's "nombre" value
 * @method float    getPreciounit()   Returns the current record's "preciounit" value
 * @method float    getCostounit()    Returns the current record's "costounit" value
 * @method float    getCantidad()     Returns the current record's "cantidad" value
 * @method string   getUnidad()       Returns the current record's "unidad" value
 * @method float    getSemodifica()   Returns the current record's "semodifica" value
 * @method float    getFactor()       Returns the current record's "factor" value
 * @method string   getNotas()        Returns the current record's "notas" value
 * @method integer  getTipodotacion() Returns the current record's "tipodotacion" value
 * @method Articulo getArticulo()     Returns the current record's "Articulo" value
 * @method Articomp setIdEmpresa()    Sets the current record's "id_empresa" value
 * @method Articomp setAgencia()      Sets the current record's "agencia" value
 * @method Articomp setCompuesto()    Sets the current record's "compuesto" value
 * @method Articomp setGrupo()        Sets the current record's "grupo" value
 * @method Articomp setCodigo()       Sets the current record's "codigo" value
 * @method Articomp setNombre()       Sets the current record's "nombre" value
 * @method Articomp setPreciounit()   Sets the current record's "preciounit" value
 * @method Articomp setCostounit()    Sets the current record's "costounit" value
 * @method Articomp setCantidad()     Sets the current record's "cantidad" value
 * @method Articomp setUnidad()       Sets the current record's "unidad" value
 * @method Articomp setSemodifica()   Sets the current record's "semodifica" value
 * @method Articomp setFactor()       Sets the current record's "factor" value
 * @method Articomp setNotas()        Sets the current record's "notas" value
 * @method Articomp setTipodotacion() Sets the current record's "tipodotacion" value
 * @method Articomp setArticulo()     Sets the current record's "Articulo" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseArticomp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('articomp');
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
        $this->hasColumn('compuesto', 'string', 25, array(
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
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('codigo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('nombre', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('preciounit', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('costounit', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cantidad', 'float', 20, array(
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
        $this->hasColumn('semodifica', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('factor', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('notas', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('tipodotacion', 'integer', 4, array(
             'type' => 'integer',
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
        $this->hasOne('Articulo', array(
             'local' => 'codigo',
             'foreign' => 'codigo'));
    }
}