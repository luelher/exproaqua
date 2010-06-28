<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('ordpro', 'documento', 'string', '10', array(
             'notnull' => '',
             ));
        $this->changeColumn('sf_guard_group', 'id', 'integer', '4', array(
             'primary' => '1',
             'autoincrement' => '1',
             ));
        $this->changeColumn('sf_guard_group', 'name', 'string', '255', array(
             'unique' => '1',
             ));
        $this->changeColumn('sf_guard_group', 'description', 'string', '1000', array(
             ));
        $this->changeColumn('sf_guard_group', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_group', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_group_permission', 'group_id', 'integer', '4', array(
             'primary' => '1',
             ));
        $this->changeColumn('sf_guard_group_permission', 'permission_id', 'integer', '4', array(
             'primary' => '1',
             ));
        $this->changeColumn('sf_guard_group_permission', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_group_permission', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_user_group', 'user_id', 'integer', '4', array(
             'primary' => '1',
             ));
        $this->changeColumn('sf_guard_user_group', 'group_id', 'integer', '4', array(
             'primary' => '1',
             ));
        $this->changeColumn('sf_guard_user_group', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_user_group', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->changeColumn('sf_guard_user_permission', 'user_id', 'integer', '4', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '1',
             'autoincrement' => '',
             ));
        $this->changeColumn('sf_guard_user_permission', 'permission_id', 'integer', '4', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '1',
             'autoincrement' => '',
             ));
        $this->changeColumn('sf_guard_user_permission', 'created_at', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '1',
             'autoincrement' => '',
             ));
        $this->changeColumn('sf_guard_user_permission', 'updated_at', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '1',
             'autoincrement' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('ordpro', 'documento');
    }
}