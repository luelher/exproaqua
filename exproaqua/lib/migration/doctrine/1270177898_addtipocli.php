<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addtipocli extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('tipocli', array(
             'id_empresa' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 6,
             ),
             'agencia' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'codigo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'nombre' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 40,
             ),
             'codigocont' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 45,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id_empresa',
              1 => 'agencia',
              2 => 'codigo',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('tipocli');
    }
}