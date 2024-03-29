<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Marcas', 'premium');

/**
 * BaseMarcas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $codigo
 * @property string $descrip
 * 
 * @method string getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string getAgencia()    Returns the current record's "agencia" value
 * @method string getCodigo()     Returns the current record's "codigo" value
 * @method string getDescrip()    Returns the current record's "descrip" value
 * @method Marcas setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Marcas setAgencia()    Sets the current record's "agencia" value
 * @method Marcas setCodigo()     Sets the current record's "codigo" value
 * @method Marcas setDescrip()    Sets the current record's "descrip" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseMarcas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('marcas');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('agencia', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('codigo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('descrip', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}