<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addconcil extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('concil', array(
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
             'codbanco' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'mes' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 10,
             ),
             'nmes' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'saldo' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 20,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'codbanco',
              1 => 'mes',
              2 => 'nmes',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('concil');
    }
}