<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ordenescargas', 'premium');

/**
 * BaseOrdenescargas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $documento
 * @property string $ordentrab
 * @property string $despacho
 * @property string $realizador
 * @property date $fecha
 * @property string $estacion
 * 
 * @method string        getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string        getAgencia()    Returns the current record's "agencia" value
 * @method string        getDocumento()  Returns the current record's "documento" value
 * @method string        getOrdentrab()  Returns the current record's "ordentrab" value
 * @method string        getDespacho()   Returns the current record's "despacho" value
 * @method string        getRealizador() Returns the current record's "realizador" value
 * @method date          getFecha()      Returns the current record's "fecha" value
 * @method string        getEstacion()   Returns the current record's "estacion" value
 * @method Ordenescargas setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Ordenescargas setAgencia()    Sets the current record's "agencia" value
 * @method Ordenescargas setDocumento()  Sets the current record's "documento" value
 * @method Ordenescargas setOrdentrab()  Sets the current record's "ordentrab" value
 * @method Ordenescargas setDespacho()   Sets the current record's "despacho" value
 * @method Ordenescargas setRealizador() Sets the current record's "realizador" value
 * @method Ordenescargas setFecha()      Sets the current record's "fecha" value
 * @method Ordenescargas setEstacion()   Sets the current record's "estacion" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseOrdenescargas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ordenescargas');
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
        $this->hasColumn('documento', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('ordentrab', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('despacho', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('realizador', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}