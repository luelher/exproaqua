<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addtmpmv extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('tmpmv', array(
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
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 3,
             ),
             'documento' => 
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
             'subgrupo' => 
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
             'origen' => 
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
             'codigo' => 
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
             'codhijo' => 
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
             'pid' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 12,
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
              'length' => 80,
             ),
             'costounit' => 
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
             'preciounit' => 
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
             'diferencia' => 
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
             'dsctounit' => 
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
             'dsctoprc' => 
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
             'dsctoendm' => 
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
             'dsctoendp' => 
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
             'preciofin' => 
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
             'prcrecargo' => 
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
             'recargouni' => 
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
             'precioorig' => 
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
             'cntdevuelt' => 
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
             'cntentrega' => 
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
             'tallas' => 
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
             'colores' => 
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
             'montoneto' => 
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
             'montototal' => 
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
             'proveedor' => 
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
             'fechadoc' => 
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
             'impuesto1' => 
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
             'impuesto2' => 
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
             'impuesto3' => 
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
             'impuesto4' => 
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
             'impuesto5' => 
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
             'impuesto6' => 
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
             'timpueprc' => 
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
             'impu_mto' => 
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
             'comisprc' => 
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
             'vendedor' => 
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
             'emisor' => 
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
             'usaserial' => 
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
             'unidad' => 
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
             'agrupado' => 
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
             'cntagrupad' => 
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
             'seimporto' => 
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
             'desdeimpor' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 11,
             ),
             'notas' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => NULL,
             ),
             'oferta' => 
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
             'compuesto' => 
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
             'usaexist' => 
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
             'marca' => 
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
             'aux1' => 
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
             'estacion' => 
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
             'clasifica' => 
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
             'cuentacont' => 
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
             'placa' => 
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
             'udinamica' => 
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
             'cantref' => 
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
             'unidadref' => 
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
             'baseimpo1' => 
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
             'baseimpo2' => 
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
             'baseimpo3' => 
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
             'lote' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => ' ',
              'notnull' => false,
              'autoincrement' => false,
              'length' => 30,
             ),
             'imp_nacion' => 
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
             'imp_produc' => 
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
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('tmpmv');
    }
}