<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Conceptosfijoscli', 'premium');

/**
 * BaseConceptosfijoscli
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codcliente
 * @property string $codigoart
 * @property string $almacen
 * @property float $cantidad
 * @property float $aplicamora
 * @property float $ultimaemision
 * 
 * @method string            getIdEmpresa()     Returns the current record's "id_empresa" value
 * @method string            getAgencia()       Returns the current record's "agencia" value
 * @method string            getCodcliente()    Returns the current record's "codcliente" value
 * @method string            getCodigoart()     Returns the current record's "codigoart" value
 * @method string            getAlmacen()       Returns the current record's "almacen" value
 * @method float             getCantidad()      Returns the current record's "cantidad" value
 * @method float             getAplicamora()    Returns the current record's "aplicamora" value
 * @method float             getUltimaemision() Returns the current record's "ultimaemision" value
 * @method Conceptosfijoscli setIdEmpresa()     Sets the current record's "id_empresa" value
 * @method Conceptosfijoscli setAgencia()       Sets the current record's "agencia" value
 * @method Conceptosfijoscli setCodcliente()    Sets the current record's "codcliente" value
 * @method Conceptosfijoscli setCodigoart()     Sets the current record's "codigoart" value
 * @method Conceptosfijoscli setAlmacen()       Sets the current record's "almacen" value
 * @method Conceptosfijoscli setCantidad()      Sets the current record's "cantidad" value
 * @method Conceptosfijoscli setAplicamora()    Sets the current record's "aplicamora" value
 * @method Conceptosfijoscli setUltimaemision() Sets the current record's "ultimaemision" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseConceptosfijoscli extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('conceptosfijoscli');
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
        $this->hasColumn('codcliente', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('codigoart', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('almacen', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('aplicamora', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('ultimaemision', 'float', 7, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '7',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}