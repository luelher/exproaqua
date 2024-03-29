<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Idconsumos', 'premium');

/**
 * BaseIdconsumos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $agencia
 * @property string $id_consumo
 * @property string $descripcion
 * @property string $nombre_corto
 * @property string $capacidad
 * @property integer $estatus
 * @property string $notas
 * @property string $rutafoto
 * @property string $codigoarticulo
 * @property string $tipo_idconsumo
 * @property integer $aplica_touch
 * @property string $ubicacion
 * 
 * @method string     getIdEmpresa()      Returns the current record's "id_empresa" value
 * @method string     getAgencia()        Returns the current record's "agencia" value
 * @method string     getIdConsumo()      Returns the current record's "id_consumo" value
 * @method string     getDescripcion()    Returns the current record's "descripcion" value
 * @method string     getNombreCorto()    Returns the current record's "nombre_corto" value
 * @method string     getCapacidad()      Returns the current record's "capacidad" value
 * @method integer    getEstatus()        Returns the current record's "estatus" value
 * @method string     getNotas()          Returns the current record's "notas" value
 * @method string     getRutafoto()       Returns the current record's "rutafoto" value
 * @method string     getCodigoarticulo() Returns the current record's "codigoarticulo" value
 * @method string     getTipoIdconsumo()  Returns the current record's "tipo_idconsumo" value
 * @method integer    getAplicaTouch()    Returns the current record's "aplica_touch" value
 * @method string     getUbicacion()      Returns the current record's "ubicacion" value
 * @method Idconsumos setIdEmpresa()      Sets the current record's "id_empresa" value
 * @method Idconsumos setAgencia()        Sets the current record's "agencia" value
 * @method Idconsumos setIdConsumo()      Sets the current record's "id_consumo" value
 * @method Idconsumos setDescripcion()    Sets the current record's "descripcion" value
 * @method Idconsumos setNombreCorto()    Sets the current record's "nombre_corto" value
 * @method Idconsumos setCapacidad()      Sets the current record's "capacidad" value
 * @method Idconsumos setEstatus()        Sets the current record's "estatus" value
 * @method Idconsumos setNotas()          Sets the current record's "notas" value
 * @method Idconsumos setRutafoto()       Sets the current record's "rutafoto" value
 * @method Idconsumos setCodigoarticulo() Sets the current record's "codigoarticulo" value
 * @method Idconsumos setTipoIdconsumo()  Sets the current record's "tipo_idconsumo" value
 * @method Idconsumos setAplicaTouch()    Sets the current record's "aplica_touch" value
 * @method Idconsumos setUbicacion()      Sets the current record's "ubicacion" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseIdconsumos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('idconsumos');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('agencia', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('id_consumo', 'string', 7, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '7',
             ));
        $this->hasColumn('descripcion', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '150',
             ));
        $this->hasColumn('nombre_corto', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('capacidad', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('estatus', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('notas', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('rutafoto', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('codigoarticulo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('tipo_idconsumo', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('aplica_touch', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('ubicacion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}