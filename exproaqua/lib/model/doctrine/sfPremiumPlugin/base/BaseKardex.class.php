<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Kardex', 'premium');

/**
 * BaseKardex
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $documento
 * @property string $codigo
 * @property string $hora
 * @property string $grupo
 * @property string $origen
 * @property string $concepto
 * @property float $cantidad
 * @property string $estacion
 * @property string $almacen
 * @property float $sumaresta
 * @property string $emisor
 * @property date $fecha
 * @property float $aux1
 * @property float $aux2
 * @property float $aux3
 * @property float $tipo_resta
 * @property string $idvalidacion
 * 
 * @method string getIdEmpresa()    Returns the current record's "id_empresa" value
 * @method string getAgencia()      Returns the current record's "agencia" value
 * @method string getDocumento()    Returns the current record's "documento" value
 * @method string getCodigo()       Returns the current record's "codigo" value
 * @method string getHora()         Returns the current record's "hora" value
 * @method string getGrupo()        Returns the current record's "grupo" value
 * @method string getOrigen()       Returns the current record's "origen" value
 * @method string getConcepto()     Returns the current record's "concepto" value
 * @method float  getCantidad()     Returns the current record's "cantidad" value
 * @method string getEstacion()     Returns the current record's "estacion" value
 * @method string getAlmacen()      Returns the current record's "almacen" value
 * @method float  getSumaresta()    Returns the current record's "sumaresta" value
 * @method string getEmisor()       Returns the current record's "emisor" value
 * @method date   getFecha()        Returns the current record's "fecha" value
 * @method float  getAux1()         Returns the current record's "aux1" value
 * @method float  getAux2()         Returns the current record's "aux2" value
 * @method float  getAux3()         Returns the current record's "aux3" value
 * @method float  getTipoResta()    Returns the current record's "tipo_resta" value
 * @method string getIdvalidacion() Returns the current record's "idvalidacion" value
 * @method Kardex setIdEmpresa()    Sets the current record's "id_empresa" value
 * @method Kardex setAgencia()      Sets the current record's "agencia" value
 * @method Kardex setDocumento()    Sets the current record's "documento" value
 * @method Kardex setCodigo()       Sets the current record's "codigo" value
 * @method Kardex setHora()         Sets the current record's "hora" value
 * @method Kardex setGrupo()        Sets the current record's "grupo" value
 * @method Kardex setOrigen()       Sets the current record's "origen" value
 * @method Kardex setConcepto()     Sets the current record's "concepto" value
 * @method Kardex setCantidad()     Sets the current record's "cantidad" value
 * @method Kardex setEstacion()     Sets the current record's "estacion" value
 * @method Kardex setAlmacen()      Sets the current record's "almacen" value
 * @method Kardex setSumaresta()    Sets the current record's "sumaresta" value
 * @method Kardex setEmisor()       Sets the current record's "emisor" value
 * @method Kardex setFecha()        Sets the current record's "fecha" value
 * @method Kardex setAux1()         Sets the current record's "aux1" value
 * @method Kardex setAux2()         Sets the current record's "aux2" value
 * @method Kardex setAux3()         Sets the current record's "aux3" value
 * @method Kardex setTipoResta()    Sets the current record's "tipo_resta" value
 * @method Kardex setIdvalidacion() Sets the current record's "idvalidacion" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseKardex extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('kardex');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
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
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('codigo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('hora', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('grupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('origen', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('concepto', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
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
        $this->hasColumn('estacion', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('almacen', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('sumaresta', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('emisor', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('aux1', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('aux2', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('aux3', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('tipo_resta', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('idvalidacion', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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