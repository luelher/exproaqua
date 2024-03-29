<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tallas', 'premium');

/**
 * BaseTallas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $grupo
 * @property string $talla
 * @property string $nomtalla
 * @property float $marca
 * 
 * @method string getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string getAgencia()    Returns the current record's "agencia" value
 * @method string getGrupo()      Returns the current record's "grupo" value
 * @method string getTalla()      Returns the current record's "talla" value
 * @method string getNomtalla()   Returns the current record's "nomtalla" value
 * @method float  getMarca()      Returns the current record's "marca" value
 * @method Tallas setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Tallas setAgencia()    Sets the current record's "agencia" value
 * @method Tallas setGrupo()      Sets the current record's "grupo" value
 * @method Tallas setTalla()      Sets the current record's "talla" value
 * @method Tallas setNomtalla()   Sets the current record's "nomtalla" value
 * @method Tallas setMarca()      Sets the current record's "marca" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTallas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tallas');
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
        $this->hasColumn('grupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('talla', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('nomtalla', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('marca', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}