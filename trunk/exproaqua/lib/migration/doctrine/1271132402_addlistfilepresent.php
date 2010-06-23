<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlistfilepresent extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('listfilepresent', array(
             'id' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 25,
             ),
             'id_empresa' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 6,
             ),
             'agencia' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'archivo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 150,
             ),
             'duracion' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 7,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('listfilepresent');
    }
}