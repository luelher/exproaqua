<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tcretab', 'premium');

/**
 * BaseTcretab
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $nombre
 * @property string $banco
 * @property float $prcretencion
 * @property float $comision
 * @property string $cuentacont
 * @property string $cuentacont_comi
 * 
 * @method string  getIdEmpresa()       Returns the current record's "id_empresa" value
 * @method string  getAgencia()         Returns the current record's "agencia" value
 * @method string  getCodigo()          Returns the current record's "codigo" value
 * @method string  getNombre()          Returns the current record's "nombre" value
 * @method string  getBanco()           Returns the current record's "banco" value
 * @method float   getPrcretencion()    Returns the current record's "prcretencion" value
 * @method float   getComision()        Returns the current record's "comision" value
 * @method string  getCuentacont()      Returns the current record's "cuentacont" value
 * @method string  getCuentacontComi()  Returns the current record's "cuentacont_comi" value
 * @method Tcretab setIdEmpresa()       Sets the current record's "id_empresa" value
 * @method Tcretab setAgencia()         Sets the current record's "agencia" value
 * @method Tcretab setCodigo()          Sets the current record's "codigo" value
 * @method Tcretab setNombre()          Sets the current record's "nombre" value
 * @method Tcretab setBanco()           Sets the current record's "banco" value
 * @method Tcretab setPrcretencion()    Sets the current record's "prcretencion" value
 * @method Tcretab setComision()        Sets the current record's "comision" value
 * @method Tcretab setCuentacont()      Sets the current record's "cuentacont" value
 * @method Tcretab setCuentacontComi()  Sets the current record's "cuentacont_comi" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTcretab extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tcretab');
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
        $this->hasColumn('codigo', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('nombre', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('banco', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('prcretencion', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('comision', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cuentacont', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('cuentacont_comi', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}