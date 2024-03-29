<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tmpmv', 'premium');

/**
 * BaseTmpmv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_empresa
 * @property string $agencia
 * @property string $tipodoc
 * @property string $documento
 * @property string $grupo
 * @property string $subgrupo
 * @property float $origen
 * @property string $codigo
 * @property string $codhijo
 * @property string $pid
 * @property string $nombre
 * @property float $costounit
 * @property float $preciounit
 * @property float $diferencia
 * @property float $dsctounit
 * @property float $dsctoprc
 * @property float $dsctoendm
 * @property float $dsctoendp
 * @property float $preciofin
 * @property float $prcrecargo
 * @property float $recargouni
 * @property float $precioorig
 * @property float $cantidad
 * @property float $cntdevuelt
 * @property float $cntentrega
 * @property string $tallas
 * @property string $colores
 * @property float $montoneto
 * @property float $montototal
 * @property string $almacen
 * @property string $proveedor
 * @property date $fechadoc
 * @property float $impuesto1
 * @property float $impuesto2
 * @property float $impuesto3
 * @property float $impuesto4
 * @property float $impuesto5
 * @property float $impuesto6
 * @property float $timpueprc
 * @property float $impu_mto
 * @property float $comision
 * @property float $comisprc
 * @property string $vendedor
 * @property string $emisor
 * @property float $usaserial
 * @property float $tipoprecio
 * @property string $unidad
 * @property float $agrupado
 * @property float $cntagrupad
 * @property float $seimporto
 * @property string $desdeimpor
 * @property string $notas
 * @property float $oferta
 * @property float $compuesto
 * @property float $usaexist
 * @property float $marca
 * @property float $aux1
 * @property string $estacion
 * @property float $clasifica
 * @property string $cuentacont
 * @property string $placa
 * @property float $udinamica
 * @property float $cantref
 * @property string $unidadref
 * @property float $baseimpo1
 * @property float $baseimpo2
 * @property float $baseimpo3
 * @property string $lote
 * @property float $imp_nacion
 * @property float $imp_produc
 * 
 * @method integer getId()         Returns the current record's "id" value
 * @method string  getIdEmpresa()  Returns the current record's "id_empresa" value
 * @method string  getAgencia()    Returns the current record's "agencia" value
 * @method string  getTipodoc()    Returns the current record's "tipodoc" value
 * @method string  getDocumento()  Returns the current record's "documento" value
 * @method string  getGrupo()      Returns the current record's "grupo" value
 * @method string  getSubgrupo()   Returns the current record's "subgrupo" value
 * @method float   getOrigen()     Returns the current record's "origen" value
 * @method string  getCodigo()     Returns the current record's "codigo" value
 * @method string  getCodhijo()    Returns the current record's "codhijo" value
 * @method string  getPid()        Returns the current record's "pid" value
 * @method string  getNombre()     Returns the current record's "nombre" value
 * @method float   getCostounit()  Returns the current record's "costounit" value
 * @method float   getPreciounit() Returns the current record's "preciounit" value
 * @method float   getDiferencia() Returns the current record's "diferencia" value
 * @method float   getDsctounit()  Returns the current record's "dsctounit" value
 * @method float   getDsctoprc()   Returns the current record's "dsctoprc" value
 * @method float   getDsctoendm()  Returns the current record's "dsctoendm" value
 * @method float   getDsctoendp()  Returns the current record's "dsctoendp" value
 * @method float   getPreciofin()  Returns the current record's "preciofin" value
 * @method float   getPrcrecargo() Returns the current record's "prcrecargo" value
 * @method float   getRecargouni() Returns the current record's "recargouni" value
 * @method float   getPrecioorig() Returns the current record's "precioorig" value
 * @method float   getCantidad()   Returns the current record's "cantidad" value
 * @method float   getCntdevuelt() Returns the current record's "cntdevuelt" value
 * @method float   getCntentrega() Returns the current record's "cntentrega" value
 * @method string  getTallas()     Returns the current record's "tallas" value
 * @method string  getColores()    Returns the current record's "colores" value
 * @method float   getMontoneto()  Returns the current record's "montoneto" value
 * @method float   getMontototal() Returns the current record's "montototal" value
 * @method string  getAlmacen()    Returns the current record's "almacen" value
 * @method string  getProveedor()  Returns the current record's "proveedor" value
 * @method date    getFechadoc()   Returns the current record's "fechadoc" value
 * @method float   getImpuesto1()  Returns the current record's "impuesto1" value
 * @method float   getImpuesto2()  Returns the current record's "impuesto2" value
 * @method float   getImpuesto3()  Returns the current record's "impuesto3" value
 * @method float   getImpuesto4()  Returns the current record's "impuesto4" value
 * @method float   getImpuesto5()  Returns the current record's "impuesto5" value
 * @method float   getImpuesto6()  Returns the current record's "impuesto6" value
 * @method float   getTimpueprc()  Returns the current record's "timpueprc" value
 * @method float   getImpuMto()    Returns the current record's "impu_mto" value
 * @method float   getComision()   Returns the current record's "comision" value
 * @method float   getComisprc()   Returns the current record's "comisprc" value
 * @method string  getVendedor()   Returns the current record's "vendedor" value
 * @method string  getEmisor()     Returns the current record's "emisor" value
 * @method float   getUsaserial()  Returns the current record's "usaserial" value
 * @method float   getTipoprecio() Returns the current record's "tipoprecio" value
 * @method string  getUnidad()     Returns the current record's "unidad" value
 * @method float   getAgrupado()   Returns the current record's "agrupado" value
 * @method float   getCntagrupad() Returns the current record's "cntagrupad" value
 * @method float   getSeimporto()  Returns the current record's "seimporto" value
 * @method string  getDesdeimpor() Returns the current record's "desdeimpor" value
 * @method string  getNotas()      Returns the current record's "notas" value
 * @method float   getOferta()     Returns the current record's "oferta" value
 * @method float   getCompuesto()  Returns the current record's "compuesto" value
 * @method float   getUsaexist()   Returns the current record's "usaexist" value
 * @method float   getMarca()      Returns the current record's "marca" value
 * @method float   getAux1()       Returns the current record's "aux1" value
 * @method string  getEstacion()   Returns the current record's "estacion" value
 * @method float   getClasifica()  Returns the current record's "clasifica" value
 * @method string  getCuentacont() Returns the current record's "cuentacont" value
 * @method string  getPlaca()      Returns the current record's "placa" value
 * @method float   getUdinamica()  Returns the current record's "udinamica" value
 * @method float   getCantref()    Returns the current record's "cantref" value
 * @method string  getUnidadref()  Returns the current record's "unidadref" value
 * @method float   getBaseimpo1()  Returns the current record's "baseimpo1" value
 * @method float   getBaseimpo2()  Returns the current record's "baseimpo2" value
 * @method float   getBaseimpo3()  Returns the current record's "baseimpo3" value
 * @method string  getLote()       Returns the current record's "lote" value
 * @method float   getImpNacion()  Returns the current record's "imp_nacion" value
 * @method float   getImpProduc()  Returns the current record's "imp_produc" value
 * @method Tmpmv   setId()         Sets the current record's "id" value
 * @method Tmpmv   setIdEmpresa()  Sets the current record's "id_empresa" value
 * @method Tmpmv   setAgencia()    Sets the current record's "agencia" value
 * @method Tmpmv   setTipodoc()    Sets the current record's "tipodoc" value
 * @method Tmpmv   setDocumento()  Sets the current record's "documento" value
 * @method Tmpmv   setGrupo()      Sets the current record's "grupo" value
 * @method Tmpmv   setSubgrupo()   Sets the current record's "subgrupo" value
 * @method Tmpmv   setOrigen()     Sets the current record's "origen" value
 * @method Tmpmv   setCodigo()     Sets the current record's "codigo" value
 * @method Tmpmv   setCodhijo()    Sets the current record's "codhijo" value
 * @method Tmpmv   setPid()        Sets the current record's "pid" value
 * @method Tmpmv   setNombre()     Sets the current record's "nombre" value
 * @method Tmpmv   setCostounit()  Sets the current record's "costounit" value
 * @method Tmpmv   setPreciounit() Sets the current record's "preciounit" value
 * @method Tmpmv   setDiferencia() Sets the current record's "diferencia" value
 * @method Tmpmv   setDsctounit()  Sets the current record's "dsctounit" value
 * @method Tmpmv   setDsctoprc()   Sets the current record's "dsctoprc" value
 * @method Tmpmv   setDsctoendm()  Sets the current record's "dsctoendm" value
 * @method Tmpmv   setDsctoendp()  Sets the current record's "dsctoendp" value
 * @method Tmpmv   setPreciofin()  Sets the current record's "preciofin" value
 * @method Tmpmv   setPrcrecargo() Sets the current record's "prcrecargo" value
 * @method Tmpmv   setRecargouni() Sets the current record's "recargouni" value
 * @method Tmpmv   setPrecioorig() Sets the current record's "precioorig" value
 * @method Tmpmv   setCantidad()   Sets the current record's "cantidad" value
 * @method Tmpmv   setCntdevuelt() Sets the current record's "cntdevuelt" value
 * @method Tmpmv   setCntentrega() Sets the current record's "cntentrega" value
 * @method Tmpmv   setTallas()     Sets the current record's "tallas" value
 * @method Tmpmv   setColores()    Sets the current record's "colores" value
 * @method Tmpmv   setMontoneto()  Sets the current record's "montoneto" value
 * @method Tmpmv   setMontototal() Sets the current record's "montototal" value
 * @method Tmpmv   setAlmacen()    Sets the current record's "almacen" value
 * @method Tmpmv   setProveedor()  Sets the current record's "proveedor" value
 * @method Tmpmv   setFechadoc()   Sets the current record's "fechadoc" value
 * @method Tmpmv   setImpuesto1()  Sets the current record's "impuesto1" value
 * @method Tmpmv   setImpuesto2()  Sets the current record's "impuesto2" value
 * @method Tmpmv   setImpuesto3()  Sets the current record's "impuesto3" value
 * @method Tmpmv   setImpuesto4()  Sets the current record's "impuesto4" value
 * @method Tmpmv   setImpuesto5()  Sets the current record's "impuesto5" value
 * @method Tmpmv   setImpuesto6()  Sets the current record's "impuesto6" value
 * @method Tmpmv   setTimpueprc()  Sets the current record's "timpueprc" value
 * @method Tmpmv   setImpuMto()    Sets the current record's "impu_mto" value
 * @method Tmpmv   setComision()   Sets the current record's "comision" value
 * @method Tmpmv   setComisprc()   Sets the current record's "comisprc" value
 * @method Tmpmv   setVendedor()   Sets the current record's "vendedor" value
 * @method Tmpmv   setEmisor()     Sets the current record's "emisor" value
 * @method Tmpmv   setUsaserial()  Sets the current record's "usaserial" value
 * @method Tmpmv   setTipoprecio() Sets the current record's "tipoprecio" value
 * @method Tmpmv   setUnidad()     Sets the current record's "unidad" value
 * @method Tmpmv   setAgrupado()   Sets the current record's "agrupado" value
 * @method Tmpmv   setCntagrupad() Sets the current record's "cntagrupad" value
 * @method Tmpmv   setSeimporto()  Sets the current record's "seimporto" value
 * @method Tmpmv   setDesdeimpor() Sets the current record's "desdeimpor" value
 * @method Tmpmv   setNotas()      Sets the current record's "notas" value
 * @method Tmpmv   setOferta()     Sets the current record's "oferta" value
 * @method Tmpmv   setCompuesto()  Sets the current record's "compuesto" value
 * @method Tmpmv   setUsaexist()   Sets the current record's "usaexist" value
 * @method Tmpmv   setMarca()      Sets the current record's "marca" value
 * @method Tmpmv   setAux1()       Sets the current record's "aux1" value
 * @method Tmpmv   setEstacion()   Sets the current record's "estacion" value
 * @method Tmpmv   setClasifica()  Sets the current record's "clasifica" value
 * @method Tmpmv   setCuentacont() Sets the current record's "cuentacont" value
 * @method Tmpmv   setPlaca()      Sets the current record's "placa" value
 * @method Tmpmv   setUdinamica()  Sets the current record's "udinamica" value
 * @method Tmpmv   setCantref()    Sets the current record's "cantref" value
 * @method Tmpmv   setUnidadref()  Sets the current record's "unidadref" value
 * @method Tmpmv   setBaseimpo1()  Sets the current record's "baseimpo1" value
 * @method Tmpmv   setBaseimpo2()  Sets the current record's "baseimpo2" value
 * @method Tmpmv   setBaseimpo3()  Sets the current record's "baseimpo3" value
 * @method Tmpmv   setLote()       Sets the current record's "lote" value
 * @method Tmpmv   setImpNacion()  Sets the current record's "imp_nacion" value
 * @method Tmpmv   setImpProduc()  Sets the current record's "imp_produc" value
 * 
 * @package    exproaqua
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTmpmv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tmpmv');
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
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('tipodoc', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('documento', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('grupo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
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
        $this->hasColumn('origen', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('codigo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('codhijo', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('pid', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('nombre', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('costounit', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('preciounit', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('diferencia', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('dsctounit', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('dsctoprc', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('dsctoendm', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('dsctoendp', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('preciofin', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('prcrecargo', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('recargouni', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('precioorig', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cantidad', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cntdevuelt', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('cntentrega', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('tallas', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('colores', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('montoneto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('montototal', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('almacen', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('proveedor', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('fechadoc', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('impuesto1', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto2', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto3', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto4', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto5', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impuesto6', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('timpueprc', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('impu_mto', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
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
        $this->hasColumn('comisprc', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('vendedor', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('emisor', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('usaserial', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('unidad', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('agrupado', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cntagrupad', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('seimporto', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desdeimpor', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '11',
             ));
        $this->hasColumn('notas', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('oferta', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('compuesto', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('usaexist', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('marca', 'float', 4, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('aux1', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('estacion', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('clasifica', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('placa', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('udinamica', 'float', 2, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cantref', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('unidadref', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('baseimpo1', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('baseimpo2', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('baseimpo3', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('lote', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('imp_nacion', 'float', 20, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.0000000',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('imp_produc', 'float', 20, array(
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