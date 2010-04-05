<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addbancotab extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('bancotab', array(
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
              'notnull' => false,
              'autoincrement' => false,
              'length' => 60,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'codigo',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('bancotab');
    }
}