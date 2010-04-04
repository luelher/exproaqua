<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SfGuardPermission', 'premium');

/**
 * BaseSfGuardPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $SfGuardGroupPermission
 * @property Doctrine_Collection $SfGuardUserPermission
 * 
 * @method integer             getId()                     Returns the current record's "id" value
 * @method string              getName()                   Returns the current record's "name" value
 * @method string              getDescription()            Returns the current record's "description" value
 * @method timestamp           getCreatedAt()              Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()              Returns the current record's "updated_at" value
 * @method Doctrine_Collection getSfGuardGroupPermission() Returns the current record's "SfGuardGroupPermission" collection
 * @method Doctrine_Collection getSfGuardUserPermission()  Returns the current record's "SfGuardUserPermission" collection
 * @method SfGuardPermission   setId()                     Sets the current record's "id" value
 * @method SfGuardPermission   setName()                   Sets the current record's "name" value
 * @method SfGuardPermission   setDescription()            Sets the current record's "description" value
 * @method SfGuardPermission   setCreatedAt()              Sets the current record's "created_at" value
 * @method SfGuardPermission   setUpdatedAt()              Sets the current record's "updated_at" value
 * @method SfGuardPermission   setSfGuardGroupPermission() Sets the current record's "SfGuardGroupPermission" collection
 * @method SfGuardPermission   setSfGuardUserPermission()  Sets the current record's "SfGuardUserPermission" collection
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSfGuardPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_permission');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SfGuardGroupPermission', array(
             'local' => 'id',
             'foreign' => 'permission_id'));

        $this->hasMany('SfGuardUserPermission', array(
             'local' => 'id',
             'foreign' => 'permission_id'));
    }
}