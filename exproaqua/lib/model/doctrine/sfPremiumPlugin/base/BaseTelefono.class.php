<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Telefono', 'premium');

/**
 * BaseTelefono
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $nombre
 * @property string $apellido
 * @property string $empresa
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $website
 * @property string $email
 * @property string $notas
 * @property float $confiden
 * @property string $usuario
 * 
 * @method integer  getId()         Returns the current record's "id" value
 * @method string   getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string   getAgencia()    Returns the current record's "agencia" value
 * @method string   getNombre()     Returns the current record's "nombre" value
 * @method string   getApellido()   Returns the current record's "apellido" value
 * @method string   getEmpresa()    Returns the current record's "empresa" value
 * @method string   getDireccion()  Returns the current record's "direccion" value
 * @method string   getTelefono()   Returns the current record's "telefono" value
 * @method string   getFax()        Returns the current record's "fax" value
 * @method string   getWebsite()    Returns the current record's "website" value
 * @method string   getEmail()      Returns the current record's "email" value
 * @method string   getNotas()      Returns the current record's "notas" value
 * @method float    getConfiden()   Returns the current record's "confiden" value
 * @method string   getUsuario()    Returns the current record's "usuario" value
 * @method Telefono setId()         Sets the current record's "id" value
 * @method Telefono setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Telefono setAgencia()    Sets the current record's "agencia" value
 * @method Telefono setNombre()     Sets the current record's "nombre" value
 * @method Telefono setApellido()   Sets the current record's "apellido" value
 * @method Telefono setEmpresa()    Sets the current record's "empresa" value
 * @method Telefono setDireccion()  Sets the current record's "direccion" value
 * @method Telefono setTelefono()   Sets the current record's "telefono" value
 * @method Telefono setFax()        Sets the current record's "fax" value
 * @method Telefono setWebsite()    Sets the current record's "website" value
 * @method Telefono setEmail()      Sets the current record's "email" value
 * @method Telefono setNotas()      Sets the current record's "notas" value
 * @method Telefono setConfiden()   Sets the current record's "confiden" value
 * @method Telefono setUsuario()    Sets the current record's "usuario" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTelefono extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('telefono');
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('nombre', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('apellido', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('empresa', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('direccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('telefono', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('fax', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('website', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('email', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
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
        $this->hasColumn('confiden', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('usuario', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
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