<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cfgrep', 'premium');

/**
 * BaseCfgrep
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $reporte
 * @property string $titulo
 * @property string $rutarep
 * @property float $modulo
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $campo9
 * @property string $campo10
 * @property string $resp1
 * @property string $resp2
 * @property string $resp3
 * @property string $resp4
 * @property string $resp5
 * @property string $resp6
 * @property string $resp7
 * @property string $resp8
 * @property string $resp9
 * @property string $resp10
 * @property string $condicion1
 * @property float $operador
 * @property string $condicion2
 * @property string $comentario
 * @property float $alcance
 * @property string $clave
 * 
 * @method integer getId()         Returns the current record's "id" value
 * @method string  getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string  getAgencia()    Returns the current record's "agencia" value
 * @method string  getReporte()    Returns the current record's "reporte" value
 * @method string  getTitulo()     Returns the current record's "titulo" value
 * @method string  getRutarep()    Returns the current record's "rutarep" value
 * @method float   getModulo()     Returns the current record's "modulo" value
 * @method string  getCampo1()     Returns the current record's "campo1" value
 * @method string  getCampo2()     Returns the current record's "campo2" value
 * @method string  getCampo3()     Returns the current record's "campo3" value
 * @method string  getCampo4()     Returns the current record's "campo4" value
 * @method string  getCampo5()     Returns the current record's "campo5" value
 * @method string  getCampo6()     Returns the current record's "campo6" value
 * @method string  getCampo7()     Returns the current record's "campo7" value
 * @method string  getCampo8()     Returns the current record's "campo8" value
 * @method string  getCampo9()     Returns the current record's "campo9" value
 * @method string  getCampo10()    Returns the current record's "campo10" value
 * @method string  getResp1()      Returns the current record's "resp1" value
 * @method string  getResp2()      Returns the current record's "resp2" value
 * @method string  getResp3()      Returns the current record's "resp3" value
 * @method string  getResp4()      Returns the current record's "resp4" value
 * @method string  getResp5()      Returns the current record's "resp5" value
 * @method string  getResp6()      Returns the current record's "resp6" value
 * @method string  getResp7()      Returns the current record's "resp7" value
 * @method string  getResp8()      Returns the current record's "resp8" value
 * @method string  getResp9()      Returns the current record's "resp9" value
 * @method string  getResp10()     Returns the current record's "resp10" value
 * @method string  getCondicion1() Returns the current record's "condicion1" value
 * @method float   getOperador()   Returns the current record's "operador" value
 * @method string  getCondicion2() Returns the current record's "condicion2" value
 * @method string  getComentario() Returns the current record's "comentario" value
 * @method float   getAlcance()    Returns the current record's "alcance" value
 * @method string  getClave()      Returns the current record's "clave" value
 * @method Cfgrep  setId()         Sets the current record's "id" value
 * @method Cfgrep  setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Cfgrep  setAgencia()    Sets the current record's "agencia" value
 * @method Cfgrep  setReporte()    Sets the current record's "reporte" value
 * @method Cfgrep  setTitulo()     Sets the current record's "titulo" value
 * @method Cfgrep  setRutarep()    Sets the current record's "rutarep" value
 * @method Cfgrep  setModulo()     Sets the current record's "modulo" value
 * @method Cfgrep  setCampo1()     Sets the current record's "campo1" value
 * @method Cfgrep  setCampo2()     Sets the current record's "campo2" value
 * @method Cfgrep  setCampo3()     Sets the current record's "campo3" value
 * @method Cfgrep  setCampo4()     Sets the current record's "campo4" value
 * @method Cfgrep  setCampo5()     Sets the current record's "campo5" value
 * @method Cfgrep  setCampo6()     Sets the current record's "campo6" value
 * @method Cfgrep  setCampo7()     Sets the current record's "campo7" value
 * @method Cfgrep  setCampo8()     Sets the current record's "campo8" value
 * @method Cfgrep  setCampo9()     Sets the current record's "campo9" value
 * @method Cfgrep  setCampo10()    Sets the current record's "campo10" value
 * @method Cfgrep  setResp1()      Sets the current record's "resp1" value
 * @method Cfgrep  setResp2()      Sets the current record's "resp2" value
 * @method Cfgrep  setResp3()      Sets the current record's "resp3" value
 * @method Cfgrep  setResp4()      Sets the current record's "resp4" value
 * @method Cfgrep  setResp5()      Sets the current record's "resp5" value
 * @method Cfgrep  setResp6()      Sets the current record's "resp6" value
 * @method Cfgrep  setResp7()      Sets the current record's "resp7" value
 * @method Cfgrep  setResp8()      Sets the current record's "resp8" value
 * @method Cfgrep  setResp9()      Sets the current record's "resp9" value
 * @method Cfgrep  setResp10()     Sets the current record's "resp10" value
 * @method Cfgrep  setCondicion1() Sets the current record's "condicion1" value
 * @method Cfgrep  setOperador()   Sets the current record's "operador" value
 * @method Cfgrep  setCondicion2() Sets the current record's "condicion2" value
 * @method Cfgrep  setComentario() Sets the current record's "comentario" value
 * @method Cfgrep  setAlcance()    Sets the current record's "alcance" value
 * @method Cfgrep  setClave()      Sets the current record's "clave" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCfgrep extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cfgrep');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('reporte', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('titulo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('rutarep', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('modulo', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('campo1', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo2', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo3', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo4', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo5', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo6', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo7', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo8', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo9', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('campo10', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp1', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp2', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp3', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp4', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp5', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp6', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp7', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp8', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp9', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('resp10', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('condicion1', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '254',
             ));
        $this->hasColumn('operador', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('condicion2', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '254',
             ));
        $this->hasColumn('comentario', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '254',
             ));
        $this->hasColumn('alcance', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('clave', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}