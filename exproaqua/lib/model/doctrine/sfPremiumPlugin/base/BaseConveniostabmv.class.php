<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Conveniostabmv', 'premium');

/**
 * BaseConveniostabmv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $idconvenio
 * @property string $codgrupo
 * @property string $codsubgrupo
 * @property float $prcdescuento
 * 
 * @method integer        getId()           Returns the current record's "id" value
 * @method string         getIdEmpresa()    Returns the current record's "id_empresa" value
 * @method string         getAgencia()      Returns the current record's "agencia" value
 * @method string         getIdconvenio()   Returns the current record's "idconvenio" value
 * @method string         getCodgrupo()     Returns the current record's "codgrupo" value
 * @method string         getCodsubgrupo()  Returns the current record's "codsubgrupo" value
 * @method float          getPrcdescuento() Returns the current record's "prcdescuento" value
 * @method Conveniostabmv setId()           Sets the current record's "id" value
 * @method Conveniostabmv setIdEmpresa()    Sets the current record's "id_empresa" value
 * @method Conveniostabmv setAgencia()      Sets the current record's "agencia" value
 * @method Conveniostabmv setIdconvenio()   Sets the current record's "idconvenio" value
 * @method Conveniostabmv setCodgrupo()     Sets the current record's "codgrupo" value
 * @method Conveniostabmv setCodsubgrupo()  Sets the current record's "codsubgrupo" value
 * @method Conveniostabmv setPrcdescuento() Sets the current record's "prcdescuento" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseConveniostabmv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('conveniostabmv');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('agencia', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('idconvenio', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('codgrupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('codsubgrupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('prcdescuento', 'float', 19, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '19',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}