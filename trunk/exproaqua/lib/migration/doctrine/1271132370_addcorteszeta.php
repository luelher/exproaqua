<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcorteszeta extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('corteszeta', array(
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
             'serial' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 50,
             ),
             'codigo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 6,
             ),
             'nombre' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 50,
             ),
             'marca' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 50,
             ),
             'modelo' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 50,
             ),
             'estacion' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 3,
             ),
             'ubicacion' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 80,
             ),
             'numeroz' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 8,
             ),
             'fechaz' => 
             array(
              'type' => 'date',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'horaz' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 5,
             ),
             'razonsocial' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 100,
             ),
             'rif' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 20,
             ),
             'facexenta' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'cantidadfac' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 10,
             ),
             'bifacalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivafacalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bifacalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivafacalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bifacalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivafacalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ncexenta' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'cantidadnc' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bincalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivancalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bincalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivancalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bincalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivancalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'descexento' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'cantidaddesc' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 10,
             ),
             'bidescalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivadescalicgen' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bidescalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivadescalicred' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'bidescalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ivadescalicaum' => 
             array(
              'type' => 'float',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0.0000000',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'primfact' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'ultifact' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 15,
             ),
             'fechultfac' => 
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
             'horaultfac' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 5,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id_empresa',
              1 => 'agencia',
              2 => 'serial',
              3 => 'codigo',
              4 => 'fechaz',
              5 => 'horaz',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('corteszeta');
    }
}