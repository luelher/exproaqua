<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ordenesreq', 'premium');

/**
 * BaseOrdenesreq
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $documento
 * @property string $orden
 * @property float $status
 * @property float $despachado
 * @property string $codalmacen
 * @property string $nomalmacen
 * @property string $codtecnico
 * @property string $nomtecnico
 * @property date $fechaemis
 * @property string $horaemis
 * @property date $fechaentr
 * @property string $notas
 * 
 * @method string     getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string     getAgencia()    Returns the current record's "agencia" value
 * @method string     getDocumento()  Returns the current record's "documento" value
 * @method string     getOrden()      Returns the current record's "orden" value
 * @method float      getStatus()     Returns the current record's "status" value
 * @method float      getDespachado() Returns the current record's "despachado" value
 * @method string     getCodalmacen() Returns the current record's "codalmacen" value
 * @method string     getNomalmacen() Returns the current record's "nomalmacen" value
 * @method string     getCodtecnico() Returns the current record's "codtecnico" value
 * @method string     getNomtecnico() Returns the current record's "nomtecnico" value
 * @method date       getFechaemis()  Returns the current record's "fechaemis" value
 * @method string     getHoraemis()   Returns the current record's "horaemis" value
 * @method date       getFechaentr()  Returns the current record's "fechaentr" value
 * @method string     getNotas()      Returns the current record's "notas" value
 * @method Ordenesreq setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Ordenesreq setAgencia()    Sets the current record's "agencia" value
 * @method Ordenesreq setDocumento()  Sets the current record's "documento" value
 * @method Ordenesreq setOrden()      Sets the current record's "orden" value
 * @method Ordenesreq setStatus()     Sets the current record's "status" value
 * @method Ordenesreq setDespachado() Sets the current record's "despachado" value
 * @method Ordenesreq setCodalmacen() Sets the current record's "codalmacen" value
 * @method Ordenesreq setNomalmacen() Sets the current record's "nomalmacen" value
 * @method Ordenesreq setCodtecnico() Sets the current record's "codtecnico" value
 * @method Ordenesreq setNomtecnico() Sets the current record's "nomtecnico" value
 * @method Ordenesreq setFechaemis()  Sets the current record's "fechaemis" value
 * @method Ordenesreq setHoraemis()   Sets the current record's "horaemis" value
 * @method Ordenesreq setFechaentr()  Sets the current record's "fechaentr" value
 * @method Ordenesreq setNotas()      Sets the current record's "notas" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseOrdenesreq extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ordenesreq');
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
        $this->hasColumn('orden', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('status', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('despachado', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('codalmacen', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('nomalmacen', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('codtecnico', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nomtecnico', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('fechaemis', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('horaemis', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('fechaentr', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
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