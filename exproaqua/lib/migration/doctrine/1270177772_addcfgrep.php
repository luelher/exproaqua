<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfgrep extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cfgrep', array(
             'id' => 
             array(
              'type' => 'integer',
              'autoincrement' => true,
              'primary' => true,
              'length' => 8,
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
             'reporte' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 20,
             ),
             'titulo' => 
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
             'rutarep' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 200,
             ),
             'modulo' => 
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
             'campo1' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo2' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo3' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo4' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo5' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo6' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo7' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo8' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo9' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'campo10' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp1' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp2' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp3' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp4' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp5' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp6' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp7' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp8' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp9' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'resp10' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 40,
             ),
             'condicion1' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 254,
             ),
             'operador' => 
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
             'condicion2' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 254,
             ),
             'comentario' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 254,
             ),
             'alcance' => 
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
             'clave' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 10,
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
        $this->dropTable('cfgrep');
    }
}