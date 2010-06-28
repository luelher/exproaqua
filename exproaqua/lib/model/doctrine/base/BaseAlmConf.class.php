<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AlmConf', 'premium');

/**
 * BaseAlmConf
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $almmatpri
 * @property string $almpropro
 * @property string $almproter
 * @property string $usuario
 * @property integer $condoc
 * @property string $tipent
 * @property string $tipsal
 * @property Almacene $MatPri
 * @property Almacene $ProPro
 * @property Almacene $ProTer
 * @property Usuarios $Usuarios
 * @property Tipoentradasalida $TipoEntrada
 * @property Tipoentradasalida $TipoSalida
 * 
 * @method integer           getId()          Returns the current record's "id" value
 * @method string            getAlmmatpri()   Returns the current record's "almmatpri" value
 * @method string            getAlmpropro()   Returns the current record's "almpropro" value
 * @method string            getAlmproter()   Returns the current record's "almproter" value
 * @method string            getUsuario()     Returns the current record's "usuario" value
 * @method integer           getCondoc()      Returns the current record's "condoc" value
 * @method string            getTipent()      Returns the current record's "tipent" value
 * @method string            getTipsal()      Returns the current record's "tipsal" value
 * @method Almacene          getMatPri()      Returns the current record's "MatPri" value
 * @method Almacene          getProPro()      Returns the current record's "ProPro" value
 * @method Almacene          getProTer()      Returns the current record's "ProTer" value
 * @method Usuarios          getUsuarios()    Returns the current record's "Usuarios" value
 * @method Tipoentradasalida getTipoEntrada() Returns the current record's "TipoEntrada" value
 * @method Tipoentradasalida getTipoSalida()  Returns the current record's "TipoSalida" value
 * @method AlmConf           setId()          Sets the current record's "id" value
 * @method AlmConf           setAlmmatpri()   Sets the current record's "almmatpri" value
 * @method AlmConf           setAlmpropro()   Sets the current record's "almpropro" value
 * @method AlmConf           setAlmproter()   Sets the current record's "almproter" value
 * @method AlmConf           setUsuario()     Sets the current record's "usuario" value
 * @method AlmConf           setCondoc()      Sets the current record's "condoc" value
 * @method AlmConf           setTipent()      Sets the current record's "tipent" value
 * @method AlmConf           setTipsal()      Sets the current record's "tipsal" value
 * @method AlmConf           setMatPri()      Sets the current record's "MatPri" value
 * @method AlmConf           setProPro()      Sets the current record's "ProPro" value
 * @method AlmConf           setProTer()      Sets the current record's "ProTer" value
 * @method AlmConf           setUsuarios()    Sets the current record's "Usuarios" value
 * @method AlmConf           setTipoEntrada() Sets the current record's "TipoEntrada" value
 * @method AlmConf           setTipoSalida()  Sets the current record's "TipoSalida" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAlmConf extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('almconf');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('almmatpri', 'string', 2, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '2',
             ));
        $this->hasColumn('almpropro', 'string', 2, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '2',
             ));
        $this->hasColumn('almproter', 'string', 2, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '2',
             ));
        $this->hasColumn('usuario', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '20',
             ));
        $this->hasColumn('condoc', 'integer', 4, array(
             'type' => 'integer',
             'primary' => false,
             'length' => '4',
             ));
        $this->hasColumn('tipent', 'string', 6, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '6',
             ));
        $this->hasColumn('tipsal', 'string', 6, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '6',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Almacene as MatPri', array(
             'local' => 'almmatpri',
             'foreign' => 'codigo'));

        $this->hasOne('Almacene as ProPro', array(
             'local' => 'almpropro',
             'foreign' => 'codigo'));

        $this->hasOne('Almacene as ProTer', array(
             'local' => 'almproter',
             'foreign' => 'codigo'));

        $this->hasOne('Usuarios', array(
             'local' => 'usuario',
             'foreign' => 'username'));

        $this->hasOne('Tipoentradasalida as TipoEntrada', array(
             'local' => 'tipent',
             'foreign' => 'codigo'));

        $this->hasOne('Tipoentradasalida as TipoSalida', array(
             'local' => 'tipsal',
             'foreign' => 'codigo'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}