<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Empresas', 'premium');

/**
 * BaseEmpresas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $nombre
 * @property string $direccion
 * @property string $telefonos
 * @property string $fax
 * @property string $numerorif
 * @property string $numeronit
 * @property string $website
 * @property string $email
 * @property string $contacto
 * @property float $predeter
 * @property string $soporte1
 * @property string $soporte2
 * @property string $soporte3
 * @property float $data_usaweb
 * @property string $data_servidor
 * @property string $data_usuario
 * @property string $data_password
 * 
 * @method string   getIdEmpresa()     Returns the current record's "id_empresa" value
 * @method string   getNombre()        Returns the current record's "nombre" value
 * @method string   getDireccion()     Returns the current record's "direccion" value
 * @method string   getTelefonos()     Returns the current record's "telefonos" value
 * @method string   getFax()           Returns the current record's "fax" value
 * @method string   getNumerorif()     Returns the current record's "numerorif" value
 * @method string   getNumeronit()     Returns the current record's "numeronit" value
 * @method string   getWebsite()       Returns the current record's "website" value
 * @method string   getEmail()         Returns the current record's "email" value
 * @method string   getContacto()      Returns the current record's "contacto" value
 * @method float    getPredeter()      Returns the current record's "predeter" value
 * @method string   getSoporte1()      Returns the current record's "soporte1" value
 * @method string   getSoporte2()      Returns the current record's "soporte2" value
 * @method string   getSoporte3()      Returns the current record's "soporte3" value
 * @method float    getDataUsaweb()    Returns the current record's "data_usaweb" value
 * @method string   getDataServidor()  Returns the current record's "data_servidor" value
 * @method string   getDataUsuario()   Returns the current record's "data_usuario" value
 * @method string   getDataPassword()  Returns the current record's "data_password" value
 * @method Empresas setIdEmpresa()     Sets the current record's "id_empresa" value
 * @method Empresas setNombre()        Sets the current record's "nombre" value
 * @method Empresas setDireccion()     Sets the current record's "direccion" value
 * @method Empresas setTelefonos()     Sets the current record's "telefonos" value
 * @method Empresas setFax()           Sets the current record's "fax" value
 * @method Empresas setNumerorif()     Sets the current record's "numerorif" value
 * @method Empresas setNumeronit()     Sets the current record's "numeronit" value
 * @method Empresas setWebsite()       Sets the current record's "website" value
 * @method Empresas setEmail()         Sets the current record's "email" value
 * @method Empresas setContacto()      Sets the current record's "contacto" value
 * @method Empresas setPredeter()      Sets the current record's "predeter" value
 * @method Empresas setSoporte1()      Sets the current record's "soporte1" value
 * @method Empresas setSoporte2()      Sets the current record's "soporte2" value
 * @method Empresas setSoporte3()      Sets the current record's "soporte3" value
 * @method Empresas setDataUsaweb()    Sets the current record's "data_usaweb" value
 * @method Empresas setDataServidor()  Sets the current record's "data_servidor" value
 * @method Empresas setDataUsuario()   Sets the current record's "data_usuario" value
 * @method Empresas setDataPassword()  Sets the current record's "data_password" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEmpresas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresas');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('nombre', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('direccion', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('telefonos', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('fax', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('numerorif', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('numeronit', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('website', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('email', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('contacto', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('predeter', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('soporte1', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('soporte2', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('soporte3', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('data_usaweb', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('data_servidor', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('data_usuario', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('data_password', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}