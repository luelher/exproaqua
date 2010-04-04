<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addmsgmvlog extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('msg_mv_log', array(
             'id_mensaje' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             'id_destinatario' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id_mensaje',
              1 => 'id_destinatario',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('msg_mv_log');
    }
}