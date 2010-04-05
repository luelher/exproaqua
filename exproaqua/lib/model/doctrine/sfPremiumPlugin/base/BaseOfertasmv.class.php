<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ofertasmv', 'premium');

/**
 * BaseOfertasmv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $idoferta
 * @property string $grupo
 * @property string $subgrupo
 * @property string $codigoart
 * @property float $tipoprecio
 * @property float $precioneto_normal
 * @property float $precio_oferta_neto
 * @property float $cantidadminima
 * @property float $canitdadmaxima
 * @property float $empaque
 * @property float $grp_precio_normal
 * @property float $grp_precio_oferta
 * 
 * @method string    getIdEmpresa()          Returns the current record's "id_empresa" value
 * @method string    getAgencia()            Returns the current record's "agencia" value
 * @method string    getIdoferta()           Returns the current record's "idoferta" value
 * @method string    getGrupo()              Returns the current record's "grupo" value
 * @method string    getSubgrupo()           Returns the current record's "subgrupo" value
 * @method string    getCodigoart()          Returns the current record's "codigoart" value
 * @method float     getTipoprecio()         Returns the current record's "tipoprecio" value
 * @method float     getPrecionetoNormal()   Returns the current record's "precioneto_normal" value
 * @method float     getPrecioOfertaNeto()   Returns the current record's "precio_oferta_neto" value
 * @method float     getCantidadminima()     Returns the current record's "cantidadminima" value
 * @method float     getCanitdadmaxima()     Returns the current record's "canitdadmaxima" value
 * @method float     getEmpaque()            Returns the current record's "empaque" value
 * @method float     getGrpPrecioNormal()    Returns the current record's "grp_precio_normal" value
 * @method float     getGrpPrecioOferta()    Returns the current record's "grp_precio_oferta" value
 * @method Ofertasmv setIdEmpresa()          Sets the current record's "id_empresa" value
 * @method Ofertasmv setAgencia()            Sets the current record's "agencia" value
 * @method Ofertasmv setIdoferta()           Sets the current record's "idoferta" value
 * @method Ofertasmv setGrupo()              Sets the current record's "grupo" value
 * @method Ofertasmv setSubgrupo()           Sets the current record's "subgrupo" value
 * @method Ofertasmv setCodigoart()          Sets the current record's "codigoart" value
 * @method Ofertasmv setTipoprecio()         Sets the current record's "tipoprecio" value
 * @method Ofertasmv setPrecionetoNormal()   Sets the current record's "precioneto_normal" value
 * @method Ofertasmv setPrecioOfertaNeto()   Sets the current record's "precio_oferta_neto" value
 * @method Ofertasmv setCantidadminima()     Sets the current record's "cantidadminima" value
 * @method Ofertasmv setCanitdadmaxima()     Sets the current record's "canitdadmaxima" value
 * @method Ofertasmv setEmpaque()            Sets the current record's "empaque" value
 * @method Ofertasmv setGrpPrecioNormal()    Sets the current record's "grp_precio_normal" value
 * @method Ofertasmv setGrpPrecioOferta()    Sets the current record's "grp_precio_oferta" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseOfertasmv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ofertasmv');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('agencia', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('idoferta', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('grupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('subgrupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('codigoart', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('tipoprecio', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('precioneto_normal', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('precio_oferta_neto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cantidadminima', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('canitdadmaxima', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('empaque', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('grp_precio_normal', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('grp_precio_oferta', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}