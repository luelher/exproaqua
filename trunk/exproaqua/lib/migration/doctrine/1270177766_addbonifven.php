<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addbonifven extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('bonifven', array(
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
             'relacion' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 8,
             ),
             'vendedor' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 8,
             ),
             'agencia' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 3,
             ),
             'tipodoc' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'documento' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 8,
             ),
             'codcli' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 15,
             ),
             'cliente' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 50,
             ),
             'fecha' => 
             array(
              'type' => 'date',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0000-00-00',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'grupo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 6,
             ),
             'codigo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 25,
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
              'length' => 150,
             ),
             'monto' => 
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
             'prccomi' => 
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
             'comision' => 
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
             'fpago' => 
             array(
              'type' => 'date',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0000-00-00',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'mtopagado' => 
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
             'status' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 1,
             ),
             'tipoprecio' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 2,
             ),
             'seleccion' => 
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
             'id' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 12,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'vendedor',
              1 => 'tipodoc',
              2 => 'documento',
              3 => 'codigo',
              4 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('bonifven');
    }
}