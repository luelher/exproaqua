<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Errores', 'premium');

/**
 * BaseErrores
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $usuario
 * @property date $fecha
 * @property string $hora
 * @property string $programa
 * @property string $metodo
 * @property float $lineanro
 * @property float $nroerror
 * @property string $tipoerror
 * @property float $quehiso
 * @property string $descripcio
 * @property string $dbfname
 * @property string $clave
 * @property string $nrecno
 * @property string $memfree
 * @property string $ncurdir
 * @property string $estacion
 * @property string $espacedisk
 * @property string $reclong
 * @property string $basedato
 * @property string $paginacode
 * @property string $ventana
 * 
 * @method integer getId()         Returns the current record's "id" value
 * @method string  getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string  getAgencia()    Returns the current record's "agencia" value
 * @method string  getUsuario()    Returns the current record's "usuario" value
 * @method date    getFecha()      Returns the current record's "fecha" value
 * @method string  getHora()       Returns the current record's "hora" value
 * @method string  getPrograma()   Returns the current record's "programa" value
 * @method string  getMetodo()     Returns the current record's "metodo" value
 * @method float   getLineanro()   Returns the current record's "lineanro" value
 * @method float   getNroerror()   Returns the current record's "nroerror" value
 * @method string  getTipoerror()  Returns the current record's "tipoerror" value
 * @method float   getQuehiso()    Returns the current record's "quehiso" value
 * @method string  getDescripcio() Returns the current record's "descripcio" value
 * @method string  getDbfname()    Returns the current record's "dbfname" value
 * @method string  getClave()      Returns the current record's "clave" value
 * @method string  getNrecno()     Returns the current record's "nrecno" value
 * @method string  getMemfree()    Returns the current record's "memfree" value
 * @method string  getNcurdir()    Returns the current record's "ncurdir" value
 * @method string  getEstacion()   Returns the current record's "estacion" value
 * @method string  getEspacedisk() Returns the current record's "espacedisk" value
 * @method string  getReclong()    Returns the current record's "reclong" value
 * @method string  getBasedato()   Returns the current record's "basedato" value
 * @method string  getPaginacode() Returns the current record's "paginacode" value
 * @method string  getVentana()    Returns the current record's "ventana" value
 * @method Errores setId()         Sets the current record's "id" value
 * @method Errores setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Errores setAgencia()    Sets the current record's "agencia" value
 * @method Errores setUsuario()    Sets the current record's "usuario" value
 * @method Errores setFecha()      Sets the current record's "fecha" value
 * @method Errores setHora()       Sets the current record's "hora" value
 * @method Errores setPrograma()   Sets the current record's "programa" value
 * @method Errores setMetodo()     Sets the current record's "metodo" value
 * @method Errores setLineanro()   Sets the current record's "lineanro" value
 * @method Errores setNroerror()   Sets the current record's "nroerror" value
 * @method Errores setTipoerror()  Sets the current record's "tipoerror" value
 * @method Errores setQuehiso()    Sets the current record's "quehiso" value
 * @method Errores setDescripcio() Sets the current record's "descripcio" value
 * @method Errores setDbfname()    Sets the current record's "dbfname" value
 * @method Errores setClave()      Sets the current record's "clave" value
 * @method Errores setNrecno()     Sets the current record's "nrecno" value
 * @method Errores setMemfree()    Sets the current record's "memfree" value
 * @method Errores setNcurdir()    Sets the current record's "ncurdir" value
 * @method Errores setEstacion()   Sets the current record's "estacion" value
 * @method Errores setEspacedisk() Sets the current record's "espacedisk" value
 * @method Errores setReclong()    Sets the current record's "reclong" value
 * @method Errores setBasedato()   Sets the current record's "basedato" value
 * @method Errores setPaginacode() Sets the current record's "paginacode" value
 * @method Errores setVentana()    Sets the current record's "ventana" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseErrores extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('errores');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
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
        $this->hasColumn('usuario', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
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
        $this->hasColumn('hora', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('programa', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '254',
             ));
        $this->hasColumn('metodo', 'string', 106, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '106',
             ));
        $this->hasColumn('lineanro', 'float', 10, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('nroerror', 'float', 11, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '11',
             ));
        $this->hasColumn('tipoerror', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('quehiso', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('descripcio', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '128',
             ));
        $this->hasColumn('dbfname', 'string', 122, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '122',
             ));
        $this->hasColumn('clave', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('nrecno', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('memfree', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('ncurdir', 'string', 115, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '115',
             ));
        $this->hasColumn('estacion', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('espacedisk', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('reclong', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('basedato', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('paginacode', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('ventana', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}