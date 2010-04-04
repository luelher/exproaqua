<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addordpropro extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ordpropro', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'ordpro_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'artcomp' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 25,
             ),
             'cantidad' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ordpropro');
    }
}