<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Banmov', 'premium');

/**
 * BaseBanmov
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_empresa
 * @property string $codigoban
 * @property date $fechaban
 * @property date $fechalibe
 * @property string $tipomov
 * @property string $numero
 * @property string $concepto
 * @property string $proveed
 * @property string $beneficiar
 * @property float $conciliad
 * @property string $nroconcil
 * @property date $fconcilia
 * @property float $monto
 * @property string $cuenta
 * @property string $comprob
 * @property float $nmes
 * @property string $mes
 * @property float $montoplaza
 * @property float $montobanco
 * @property float $montofplaz
 * @property date $fechaplaza
 * @property date $fechabanco
 * @property date $fechafplaz
 * @property float $tarjeta
 * @property float $tarjetadeb
 * @property float $cheque
 * @property float $efectivo
 * @property float $debitoban
 * @property float $endosable
 * @property string $comentario
 * @property string $usuario
 * @property string $nodo
 * @property date $fechaini
 * @property float $anulado
 * @property string $id
 * @property float $tranferido
 * @property float $status
 * @property float $impreso
 * @property string $referencia
 * @property string $compcont
 * @property string $agencia
 * @property string $recibo
 * @property string $idconcilia
 * @property float $comision
 * @property float $impuesto
 * @property string $cuentacont
 * 
 * @method string getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string getCodigoban()  Returns the current record's "codigoban" value
 * @method date   getFechaban()   Returns the current record's "fechaban" value
 * @method date   getFechalibe()  Returns the current record's "fechalibe" value
 * @method string getTipomov()    Returns the current record's "tipomov" value
 * @method string getNumero()     Returns the current record's "numero" value
 * @method string getConcepto()   Returns the current record's "concepto" value
 * @method string getProveed()    Returns the current record's "proveed" value
 * @method string getBeneficiar() Returns the current record's "beneficiar" value
 * @method float  getConciliad()  Returns the current record's "conciliad" value
 * @method string getNroconcil()  Returns the current record's "nroconcil" value
 * @method date   getFconcilia()  Returns the current record's "fconcilia" value
 * @method float  getMonto()      Returns the current record's "monto" value
 * @method string getCuenta()     Returns the current record's "cuenta" value
 * @method string getComprob()    Returns the current record's "comprob" value
 * @method float  getNmes()       Returns the current record's "nmes" value
 * @method string getMes()        Returns the current record's "mes" value
 * @method float  getMontoplaza() Returns the current record's "montoplaza" value
 * @method float  getMontobanco() Returns the current record's "montobanco" value
 * @method float  getMontofplaz() Returns the current record's "montofplaz" value
 * @method date   getFechaplaza() Returns the current record's "fechaplaza" value
 * @method date   getFechabanco() Returns the current record's "fechabanco" value
 * @method date   getFechafplaz() Returns the current record's "fechafplaz" value
 * @method float  getTarjeta()    Returns the current record's "tarjeta" value
 * @method float  getTarjetadeb() Returns the current record's "tarjetadeb" value
 * @method float  getCheque()     Returns the current record's "cheque" value
 * @method float  getEfectivo()   Returns the current record's "efectivo" value
 * @method float  getDebitoban()  Returns the current record's "debitoban" value
 * @method float  getEndosable()  Returns the current record's "endosable" value
 * @method string getComentario() Returns the current record's "comentario" value
 * @method string getUsuario()    Returns the current record's "usuario" value
 * @method string getNodo()       Returns the current record's "nodo" value
 * @method date   getFechaini()   Returns the current record's "fechaini" value
 * @method float  getAnulado()    Returns the current record's "anulado" value
 * @method string getId()         Returns the current record's "id" value
 * @method float  getTranferido() Returns the current record's "tranferido" value
 * @method float  getStatus()     Returns the current record's "status" value
 * @method float  getImpreso()    Returns the current record's "impreso" value
 * @method string getReferencia() Returns the current record's "referencia" value
 * @method string getCompcont()   Returns the current record's "compcont" value
 * @method string getAgencia()    Returns the current record's "agencia" value
 * @method string getRecibo()     Returns the current record's "recibo" value
 * @method string getIdconcilia() Returns the current record's "idconcilia" value
 * @method float  getComision()   Returns the current record's "comision" value
 * @method float  getImpuesto()   Returns the current record's "impuesto" value
 * @method string getCuentacont() Returns the current record's "cuentacont" value
 * @method Banmov setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Banmov setCodigoban()  Sets the current record's "codigoban" value
 * @method Banmov setFechaban()   Sets the current record's "fechaban" value
 * @method Banmov setFechalibe()  Sets the current record's "fechalibe" value
 * @method Banmov setTipomov()    Sets the current record's "tipomov" value
 * @method Banmov setNumero()     Sets the current record's "numero" value
 * @method Banmov setConcepto()   Sets the current record's "concepto" value
 * @method Banmov setProveed()    Sets the current record's "proveed" value
 * @method Banmov setBeneficiar() Sets the current record's "beneficiar" value
 * @method Banmov setConciliad()  Sets the current record's "conciliad" value
 * @method Banmov setNroconcil()  Sets the current record's "nroconcil" value
 * @method Banmov setFconcilia()  Sets the current record's "fconcilia" value
 * @method Banmov setMonto()      Sets the current record's "monto" value
 * @method Banmov setCuenta()     Sets the current record's "cuenta" value
 * @method Banmov setComprob()    Sets the current record's "comprob" value
 * @method Banmov setNmes()       Sets the current record's "nmes" value
 * @method Banmov setMes()        Sets the current record's "mes" value
 * @method Banmov setMontoplaza() Sets the current record's "montoplaza" value
 * @method Banmov setMontobanco() Sets the current record's "montobanco" value
 * @method Banmov setMontofplaz() Sets the current record's "montofplaz" value
 * @method Banmov setFechaplaza() Sets the current record's "fechaplaza" value
 * @method Banmov setFechabanco() Sets the current record's "fechabanco" value
 * @method Banmov setFechafplaz() Sets the current record's "fechafplaz" value
 * @method Banmov setTarjeta()    Sets the current record's "tarjeta" value
 * @method Banmov setTarjetadeb() Sets the current record's "tarjetadeb" value
 * @method Banmov setCheque()     Sets the current record's "cheque" value
 * @method Banmov setEfectivo()   Sets the current record's "efectivo" value
 * @method Banmov setDebitoban()  Sets the current record's "debitoban" value
 * @method Banmov setEndosable()  Sets the current record's "endosable" value
 * @method Banmov setComentario() Sets the current record's "comentario" value
 * @method Banmov setUsuario()    Sets the current record's "usuario" value
 * @method Banmov setNodo()       Sets the current record's "nodo" value
 * @method Banmov setFechaini()   Sets the current record's "fechaini" value
 * @method Banmov setAnulado()    Sets the current record's "anulado" value
 * @method Banmov setId()         Sets the current record's "id" value
 * @method Banmov setTranferido() Sets the current record's "tranferido" value
 * @method Banmov setStatus()     Sets the current record's "status" value
 * @method Banmov setImpreso()    Sets the current record's "impreso" value
 * @method Banmov setReferencia() Sets the current record's "referencia" value
 * @method Banmov setCompcont()   Sets the current record's "compcont" value
 * @method Banmov setAgencia()    Sets the current record's "agencia" value
 * @method Banmov setRecibo()     Sets the current record's "recibo" value
 * @method Banmov setIdconcilia() Sets the current record's "idconcilia" value
 * @method Banmov setComision()   Sets the current record's "comision" value
 * @method Banmov setImpuesto()   Sets the current record's "impuesto" value
 * @method Banmov setCuentacont() Sets the current record's "cuentacont" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseBanmov extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banmov');
        $this->hasColumn('id_empresa', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('codigoban', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('fechaban', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('fechalibe', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('tipomov', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('numero', 'string', 14, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '14',
             ));
        $this->hasColumn('concepto', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('proveed', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('beneficiar', 'string', 69, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '69',
             ));
        $this->hasColumn('conciliad', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('nroconcil', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('fconcilia', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('monto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cuenta', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('comprob', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nmes', 'float', 3, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('mes', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('montoplaza', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('montobanco', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('montofplaz', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('fechaplaza', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('fechabanco', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('fechafplaz', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('tarjeta', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('tarjetadeb', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cheque', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('efectivo', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('debitoban', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('endosable', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('comentario', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('usuario', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('nodo', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('fechaini', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('anulado', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('tranferido', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('status', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('impreso', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('referencia', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('compcont', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '20',
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
        $this->hasColumn('recibo', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('idconcilia', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '11',
             ));
        $this->hasColumn('comision', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cuentacont', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '40',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}