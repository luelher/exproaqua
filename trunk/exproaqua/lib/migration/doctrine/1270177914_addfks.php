<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addfks extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('almacene', 'almacene_codigo_almconf_almmatpri', array(
             'name' => 'almacene_codigo_almconf_almmatpri',
             'local' => 'codigo',
             'foreign' => 'almmatpri',
             'foreignTable' => 'almconf',
             ));
        $this->createForeignKey('almconf', 'almconf_almmatpri_almacene_codigo', array(
             'name' => 'almconf_almmatpri_almacene_codigo',
             'local' => 'almmatpri',
             'foreign' => 'codigo',
             'foreignTable' => 'almacene',
             ));
        $this->createForeignKey('almconf', 'almconf_almpropro_almacene_codigo', array(
             'name' => 'almconf_almpropro_almacene_codigo',
             'local' => 'almpropro',
             'foreign' => 'codigo',
             'foreignTable' => 'almacene',
             ));
        $this->createForeignKey('almconf', 'almconf_almproter_almacene_codigo', array(
             'name' => 'almconf_almproter_almacene_codigo',
             'local' => 'almproter',
             'foreign' => 'codigo',
             'foreignTable' => 'almacene',
             ));
        $this->createForeignKey('ordpromatpri', 'ordpromatpri_ordpro_id_ordpro_id', array(
             'name' => 'ordpromatpri_ordpro_id_ordpro_id',
             'local' => 'ordpro_id',
             'foreign' => 'id',
             'foreignTable' => 'ordpro',
             ));
        $this->createForeignKey('ordpromatpri', 'ordpromatpri_artcomp_articulo_codigo', array(
             'name' => 'ordpromatpri_artcomp_articulo_codigo',
             'local' => 'artcomp',
             'foreign' => 'codigo',
             'foreignTable' => 'articulo',
             ));
        $this->createForeignKey('ordpropro', 'ordpropro_ordpro_id_ordpro_id', array(
             'name' => 'ordpropro_ordpro_id_ordpro_id',
             'local' => 'ordpro_id',
             'foreign' => 'id',
             'foreignTable' => 'ordpro',
             ));
        $this->createForeignKey('ordpropro', 'ordpropro_artcomp_articulo_codigo', array(
             'name' => 'ordpropro_artcomp_articulo_codigo',
             'local' => 'artcomp',
             'foreign' => 'codigo',
             'foreignTable' => 'articulo',
             ));
        $this->createForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_group_id_sf_guard_group_id', array(
             'name' => 'sf_guard_group_permission_group_id_sf_guard_group_id',
             'local' => 'group_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_group',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_permission_id_sf_guard_permission_id', array(
             'name' => 'sf_guard_group_permission_permission_id_sf_guard_permission_id',
             'local' => 'permission_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_permission',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_remember_key', 'sf_guard_remember_key_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_remember_key_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_group', 'sf_guard_user_group_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_user_group_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_group', 'sf_guard_user_group_group_id_sf_guard_group_id', array(
             'name' => 'sf_guard_user_group_group_id_sf_guard_group_id',
             'local' => 'group_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_group',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_user_permission_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_permission_id_sf_guard_permission_id', array(
             'name' => 'sf_guard_user_permission_permission_id_sf_guard_permission_id',
             'local' => 'permission_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_permission',
             'onUpdate' => NULL,
             'onDelete' => 'CASCADE',
             ));
    }

    public function down()
    {
        $this->dropForeignKey('almacene', 'almacene_codigo_almconf_almmatpri');
        $this->dropForeignKey('almconf', 'almconf_almmatpri_almacene_codigo');
        $this->dropForeignKey('almconf', 'almconf_almpropro_almacene_codigo');
        $this->dropForeignKey('almconf', 'almconf_almproter_almacene_codigo');
        $this->dropForeignKey('ordpromatpri', 'ordpromatpri_ordpro_id_ordpro_id');
        $this->dropForeignKey('ordpromatpri', 'ordpromatpri_artcomp_articulo_codigo');
        $this->dropForeignKey('ordpropro', 'ordpropro_ordpro_id_ordpro_id');
        $this->dropForeignKey('ordpropro', 'ordpropro_artcomp_articulo_codigo');
        $this->dropForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_group_id_sf_guard_group_id');
        $this->dropForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_permission_id_sf_guard_permission_id');
        $this->dropForeignKey('sf_guard_remember_key', 'sf_guard_remember_key_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_group', 'sf_guard_user_group_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_group', 'sf_guard_user_group_group_id_sf_guard_group_id');
        $this->dropForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_permission_id_sf_guard_permission_id');
    }
}