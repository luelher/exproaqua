<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuarios2', 'premium');

/**
 * BaseUsuarios2
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $username
 * @property integer $msg_acceso_panel
 * @property integer $msg_envia_un_destino
 * @property integer $msg_envia_grupos
 * @property integer $msg_crea_grupos
 * @property integer $msg_borra_grupos
 * @property integer $msg_crea_destinatario
 * @property integer $msg_borra_destinatario
 * @property integer $msg_administra_cupo
 * @property integer $msg_acceso_historial
 * @property integer $msg_cupo_mensajes
 * @property integer $msg_mensajes_otorgados
 * @property integer $msg_mensajes_consumidos
 * @property string $pin_nombre_completo
 * @property string $pin_login
 * @property string $pin_password
 * @property string $pin_password_confirmacion
 * @property string $pin_email
 * @property integer $pin_es_publico
 * @property string $pin_numero
 * @property integer $devuelve_excedente
 * @property float $depexcl
 * @property integer $maximizascreen
 * 
 * @method string    getIdEmpresa()                 Returns the current record's "id_empresa" value
 * @method string    getUsername()                  Returns the current record's "username" value
 * @method integer   getMsgAccesoPanel()            Returns the current record's "msg_acceso_panel" value
 * @method integer   getMsgEnviaUnDestino()         Returns the current record's "msg_envia_un_destino" value
 * @method integer   getMsgEnviaGrupos()            Returns the current record's "msg_envia_grupos" value
 * @method integer   getMsgCreaGrupos()             Returns the current record's "msg_crea_grupos" value
 * @method integer   getMsgBorraGrupos()            Returns the current record's "msg_borra_grupos" value
 * @method integer   getMsgCreaDestinatario()       Returns the current record's "msg_crea_destinatario" value
 * @method integer   getMsgBorraDestinatario()      Returns the current record's "msg_borra_destinatario" value
 * @method integer   getMsgAdministraCupo()         Returns the current record's "msg_administra_cupo" value
 * @method integer   getMsgAccesoHistorial()        Returns the current record's "msg_acceso_historial" value
 * @method integer   getMsgCupoMensajes()           Returns the current record's "msg_cupo_mensajes" value
 * @method integer   getMsgMensajesOtorgados()      Returns the current record's "msg_mensajes_otorgados" value
 * @method integer   getMsgMensajesConsumidos()     Returns the current record's "msg_mensajes_consumidos" value
 * @method string    getPinNombreCompleto()         Returns the current record's "pin_nombre_completo" value
 * @method string    getPinLogin()                  Returns the current record's "pin_login" value
 * @method string    getPinPassword()               Returns the current record's "pin_password" value
 * @method string    getPinPasswordConfirmacion()   Returns the current record's "pin_password_confirmacion" value
 * @method string    getPinEmail()                  Returns the current record's "pin_email" value
 * @method integer   getPinEsPublico()              Returns the current record's "pin_es_publico" value
 * @method string    getPinNumero()                 Returns the current record's "pin_numero" value
 * @method integer   getDevuelveExcedente()         Returns the current record's "devuelve_excedente" value
 * @method float     getDepexcl()                   Returns the current record's "depexcl" value
 * @method integer   getMaximizascreen()            Returns the current record's "maximizascreen" value
 * @method Usuarios2 setIdEmpresa()                 Sets the current record's "id_empresa" value
 * @method Usuarios2 setUsername()                  Sets the current record's "username" value
 * @method Usuarios2 setMsgAccesoPanel()            Sets the current record's "msg_acceso_panel" value
 * @method Usuarios2 setMsgEnviaUnDestino()         Sets the current record's "msg_envia_un_destino" value
 * @method Usuarios2 setMsgEnviaGrupos()            Sets the current record's "msg_envia_grupos" value
 * @method Usuarios2 setMsgCreaGrupos()             Sets the current record's "msg_crea_grupos" value
 * @method Usuarios2 setMsgBorraGrupos()            Sets the current record's "msg_borra_grupos" value
 * @method Usuarios2 setMsgCreaDestinatario()       Sets the current record's "msg_crea_destinatario" value
 * @method Usuarios2 setMsgBorraDestinatario()      Sets the current record's "msg_borra_destinatario" value
 * @method Usuarios2 setMsgAdministraCupo()         Sets the current record's "msg_administra_cupo" value
 * @method Usuarios2 setMsgAccesoHistorial()        Sets the current record's "msg_acceso_historial" value
 * @method Usuarios2 setMsgCupoMensajes()           Sets the current record's "msg_cupo_mensajes" value
 * @method Usuarios2 setMsgMensajesOtorgados()      Sets the current record's "msg_mensajes_otorgados" value
 * @method Usuarios2 setMsgMensajesConsumidos()     Sets the current record's "msg_mensajes_consumidos" value
 * @method Usuarios2 setPinNombreCompleto()         Sets the current record's "pin_nombre_completo" value
 * @method Usuarios2 setPinLogin()                  Sets the current record's "pin_login" value
 * @method Usuarios2 setPinPassword()               Sets the current record's "pin_password" value
 * @method Usuarios2 setPinPasswordConfirmacion()   Sets the current record's "pin_password_confirmacion" value
 * @method Usuarios2 setPinEmail()                  Sets the current record's "pin_email" value
 * @method Usuarios2 setPinEsPublico()              Sets the current record's "pin_es_publico" value
 * @method Usuarios2 setPinNumero()                 Sets the current record's "pin_numero" value
 * @method Usuarios2 setDevuelveExcedente()         Sets the current record's "devuelve_excedente" value
 * @method Usuarios2 setDepexcl()                   Sets the current record's "depexcl" value
 * @method Usuarios2 setMaximizascreen()            Sets the current record's "maximizascreen" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseUsuarios2 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuarios2');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('username', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('msg_acceso_panel', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_envia_un_destino', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_envia_grupos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_crea_grupos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_borra_grupos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_crea_destinatario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_borra_destinatario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_administra_cupo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_acceso_historial', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_cupo_mensajes', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_mensajes_otorgados', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('msg_mensajes_consumidos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('pin_nombre_completo', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('pin_login', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('pin_password', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('pin_password_confirmacion', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('pin_email', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('pin_es_publico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('pin_numero', 'string', 7, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '7',
             ));
        $this->hasColumn('devuelve_excedente', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('depexcl', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('maximizascreen', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}