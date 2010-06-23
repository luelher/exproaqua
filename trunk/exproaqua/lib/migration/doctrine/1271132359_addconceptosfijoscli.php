<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addconceptosfijoscli extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('conceptosfijoscli', array(
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
             'codcliente' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'codigoart' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'almacen' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 2,
             ),
             'cantidad' => 
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
             'aplicamora' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'ultimaemision' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
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
              0 => 'codcliente',
              1 => 'codigoart',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('conceptosfijoscli');
    }
}