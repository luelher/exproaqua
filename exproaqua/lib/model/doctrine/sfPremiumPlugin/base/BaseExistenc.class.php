<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Existenc', 'premium');

/**
 * BaseExistenc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $grupo
 * @property string $almacen
 * @property float $existencia
 * @property string $ubicacion
 * @property string $usuario
 * @property string $documento
 * @property string $tipodoc
 * @property date $fechacrea
 * @property Articulo $Existencias
 * @property Almacene $Almacenes
 * 
 * @method string   getIdEmpresa()   Returns the current record's "id_empresa" value
 * @method string   getAgencia()     Returns the current record's "agencia" value
 * @method string   getCodigo()      Returns the current record's "codigo" value
 * @method string   getGrupo()       Returns the current record's "grupo" value
 * @method string   getAlmacen()     Returns the current record's "almacen" value
 * @method float    getExistencia()  Returns the current record's "existencia" value
 * @method string   getUbicacion()   Returns the current record's "ubicacion" value
 * @method string   getUsuario()     Returns the current record's "usuario" value
 * @method string   getDocumento()   Returns the current record's "documento" value
 * @method string   getTipodoc()     Returns the current record's "tipodoc" value
 * @method date     getFechacrea()   Returns the current record's "fechacrea" value
 * @method Articulo getExistencias() Returns the current record's "Existencias" value
 * @method Almacene getAlmacenes()   Returns the current record's "Almacenes" value
 * @method Existenc setIdEmpresa()   Sets the current record's "id_empresa" value
 * @method Existenc setAgencia()     Sets the current record's "agencia" value
 * @method Existenc setCodigo()      Sets the current record's "codigo" value
 * @method Existenc setGrupo()       Sets the current record's "grupo" value
 * @method Existenc setAlmacen()     Sets the current record's "almacen" value
 * @method Existenc setExistencia()  Sets the current record's "existencia" value
 * @method Existenc setUbicacion()   Sets the current record's "ubicacion" value
 * @method Existenc setUsuario()     Sets the current record's "usuario" value
 * @method Existenc setDocumento()   Sets the current record's "documento" value
 * @method Existenc setTipodoc()     Sets the current record's "tipodoc" value
 * @method Existenc setFechacrea()   Sets the current record's "fechacrea" value
 * @method Existenc setExistencias() Sets the current record's "Existencias" value
 * @method Existenc setAlmacenes()   Sets the current record's "Almacenes" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseExistenc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('existenc');
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
        $this->hasColumn('ubicacion', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('usuario', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('documento', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('tipodoc', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('fechacrea', 'date', 25, array(
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
        $this->hasOne('Articulo as Existencias', array(
             'local' => 'codigo',
             'foreign' => 'codigo'));

        $this->hasOne('Almacene as Almacenes', array(
             'local' => 'almacen',
             'foreign' => 'codigo'));
    }
}