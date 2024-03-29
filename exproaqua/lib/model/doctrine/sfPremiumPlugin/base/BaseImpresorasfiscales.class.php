<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Impresorasfiscales', 'premium');

/**
 * BaseImpresorasfiscales
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $serial
 * @property string $estacion
 * @property string $ubicacion
 * @property float $estatus
 * @property string $notas
 * 
 * @method string             getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string             getAgencia()    Returns the current record's "agencia" value
 * @method string             getCodigo()     Returns the current record's "codigo" value
 * @method string             getNombre()     Returns the current record's "nombre" value
 * @method string             getMarca()      Returns the current record's "marca" value
 * @method string             getModelo()     Returns the current record's "modelo" value
 * @method string             getSerial()     Returns the current record's "serial" value
 * @method string             getEstacion()   Returns the current record's "estacion" value
 * @method string             getUbicacion()  Returns the current record's "ubicacion" value
 * @method float              getEstatus()    Returns the current record's "estatus" value
 * @method string             getNotas()      Returns the current record's "notas" value
 * @method Impresorasfiscales setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Impresorasfiscales setAgencia()    Sets the current record's "agencia" value
 * @method Impresorasfiscales setCodigo()     Sets the current record's "codigo" value
 * @method Impresorasfiscales setNombre()     Sets the current record's "nombre" value
 * @method Impresorasfiscales setMarca()      Sets the current record's "marca" value
 * @method Impresorasfiscales setModelo()     Sets the current record's "modelo" value
 * @method Impresorasfiscales setSerial()     Sets the current record's "serial" value
 * @method Impresorasfiscales setEstacion()   Sets the current record's "estacion" value
 * @method Impresorasfiscales setUbicacion()  Sets the current record's "ubicacion" value
 * @method Impresorasfiscales setEstatus()    Sets the current record's "estatus" value
 * @method Impresorasfiscales setNotas()      Sets the current record's "notas" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseImpresorasfiscales extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('impresorasfiscales');
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
        $this->hasColumn('marca', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('modelo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('serial', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
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
        $this->hasColumn('ubicacion', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('estatus', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('notas', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}