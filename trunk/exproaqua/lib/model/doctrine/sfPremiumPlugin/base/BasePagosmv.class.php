<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Pagosmv', 'premium');

/**
 * BasePagosmv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigoprov
 * @property string $tipopago
 * @property string $comprobant
 * @property string $tipodoc
 * @property string $documento
 * @property float $monto
 * @property float $saldo
 * 
 * @method string  getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string  getAgencia()    Returns the current record's "agencia" value
 * @method string  getCodigoprov() Returns the current record's "codigoprov" value
 * @method string  getTipopago()   Returns the current record's "tipopago" value
 * @method string  getComprobant() Returns the current record's "comprobant" value
 * @method string  getTipodoc()    Returns the current record's "tipodoc" value
 * @method string  getDocumento()  Returns the current record's "documento" value
 * @method float   getMonto()      Returns the current record's "monto" value
 * @method float   getSaldo()      Returns the current record's "saldo" value
 * @method Pagosmv setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Pagosmv setAgencia()    Sets the current record's "agencia" value
 * @method Pagosmv setCodigoprov() Sets the current record's "codigoprov" value
 * @method Pagosmv setTipopago()   Sets the current record's "tipopago" value
 * @method Pagosmv setComprobant() Sets the current record's "comprobant" value
 * @method Pagosmv setTipodoc()    Sets the current record's "tipodoc" value
 * @method Pagosmv setDocumento()  Sets the current record's "documento" value
 * @method Pagosmv setMonto()      Sets the current record's "monto" value
 * @method Pagosmv setSaldo()      Sets the current record's "saldo" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasePagosmv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pagosmv');
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
        $this->hasColumn('codigoprov', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('tipopago', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('comprobant', 'string', 8, array(
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
             'primary' => true,
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
        $this->hasColumn('monto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('saldo', 'float', 20, array(
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