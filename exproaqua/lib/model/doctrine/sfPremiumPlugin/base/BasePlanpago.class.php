<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Planpago', 'premium');

/**
 * BasePlanpago
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $plan
 * @property string $tipodoc
 * @property string $documento
 * @property string $codprov
 * @property string $nombre
 * @property date $emision
 * @property date $vence
 * @property date $fechaplan
 * @property float $totaldoc
 * @property float $totpagos
 * @property float $totalret
 * 
 * @method integer  getId()         Returns the current record's "id" value
 * @method string   getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string   getAgencia()    Returns the current record's "agencia" value
 * @method string   getPlan()       Returns the current record's "plan" value
 * @method string   getTipodoc()    Returns the current record's "tipodoc" value
 * @method string   getDocumento()  Returns the current record's "documento" value
 * @method string   getCodprov()    Returns the current record's "codprov" value
 * @method string   getNombre()     Returns the current record's "nombre" value
 * @method date     getEmision()    Returns the current record's "emision" value
 * @method date     getVence()      Returns the current record's "vence" value
 * @method date     getFechaplan()  Returns the current record's "fechaplan" value
 * @method float    getTotaldoc()   Returns the current record's "totaldoc" value
 * @method float    getTotpagos()   Returns the current record's "totpagos" value
 * @method float    getTotalret()   Returns the current record's "totalret" value
 * @method Planpago setId()         Sets the current record's "id" value
 * @method Planpago setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Planpago setAgencia()    Sets the current record's "agencia" value
 * @method Planpago setPlan()       Sets the current record's "plan" value
 * @method Planpago setTipodoc()    Sets the current record's "tipodoc" value
 * @method Planpago setDocumento()  Sets the current record's "documento" value
 * @method Planpago setCodprov()    Sets the current record's "codprov" value
 * @method Planpago setNombre()     Sets the current record's "nombre" value
 * @method Planpago setEmision()    Sets the current record's "emision" value
 * @method Planpago setVence()      Sets the current record's "vence" value
 * @method Planpago setFechaplan()  Sets the current record's "fechaplan" value
 * @method Planpago setTotaldoc()   Sets the current record's "totaldoc" value
 * @method Planpago setTotpagos()   Sets the current record's "totpagos" value
 * @method Planpago setTotalret()   Sets the current record's "totalret" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasePlanpago extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('planpago');
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
        $this->hasColumn('plan', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('tipodoc', 'string', 3, array(
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
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('codprov', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '15',
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
        $this->hasColumn('emision', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('vence', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('fechaplan', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('totaldoc', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('totpagos', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('totalret', 'float', 20, array(
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