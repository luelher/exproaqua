<?php

/**
 * OrdPro form.
 *
 * @package    exproaqua
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrdProForm extends BaseOrdProForm
{
  public function setup()
  {
    parent::setup();
    
    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'numord'     => new sfValidatorIntegerWithCorrelative(),
      'desord'     => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorDoctrineUnique(array('model' => 'OrdPro', 'column' => array('numord'))),
      new sfValidatorOrdenesProduccion()
    )));

    $this->setDefault('numord', '######');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);


    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }

  public function configure()
  {
    $this->embedRelations(array(
      'productos' => array(
        'considerNewFormEmptyFields' => array('artcomp', 'cantidad'),
      ),
      'materia_prima' => array(
        'considerNewFormEmptyFields' => array('artcomp', 'cantidad'),
      ),
    ));
  }


  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $con) $con = $this->getConnection();

    $list_materia_prima = $this->taintedValues['list_materia_prima'];
    $list_productos = $this->taintedValues['list_productos'];

    foreach($list_productos as $prod){
      $ordpropro = new OrdProPro();
      $ordpropro->setOrdproId($this->getObject()->getId());
      $ordpropro->setArtcomp($prod['artcomp']);
      $ordpropro->setCantidad($prod['cantidad']);
      $ordpropro->save($con);
    }

    foreach($list_materia_prima as $matpri){
      $ordpromatpri = new OrdProMatPri();
      $ordpromatpri->setOrdproId($this->getObject()->getId());
      $ordpromatpri->setArtcomp($matpri['artcomp']);
      $ordpromatpri->setCantidad($matpri['cantidad']);
      $ordpromatpri->save($con);
    }

    $this->savePremiumMatPri($list_materia_prima, $list_productos);

  }

  private function savePremiumMatPri($list_materia_prima, $list_productos)
  {
    // Obteniendo la informacion basica del registro:
    $idempresa = sfConfig::get('app_premium_empresa');
    $sucursal = sfConfig::get('app_premium_sucursal');

    $ordpro = $this->getObject();

    // Obteniendo la información de configuracion:
    $almconf = Doctrine_Query::create()->from('Almconf')->fetchOne();
    
    if($idempresa!='' && $sucursal!=''){

      $codigo = str_pad($almconf->getCondoc()+1, 8, '0', STR_PAD_LEFT);


      // Maestro de la salida de almacen
      $cargoenc = new Cargoenc();
      $data = array();

      $data['id_empresa']= $idempresa;
      $data['agencia']= $sucursal;
      $data['documento']= $codigo;
      $data['ordentrab']='        ';
      $data['requisicio']='        ';
      $data['cargado']=0;
      $data['status']=0;
      $data['realizador']= 'Gestión de Producción';
      $data['emisor']= $almconf->getUsuario();
      $data['motivo']='Salida De Materia Prima según Orden de Producción Nro. '.$ordpro->getNumord();
      $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
      $data['estacion']= '000';
      $data['tipoentradasalida']=$almconf->getTipsal();

      $cargoenc->merge($data);
      $cargoenc->save();

      // Actualizar la existencia en la tabla existenc
      foreach ($list_materia_prima as $matpri){

        $articulo = Doctrine::getTable('Articulo')->findOneBy('codigo', $matpri['artcomp']);

        if($articulo){
          $existenc = Doctrine_Query::create()
                     ->update('Existenc e')
                     ->set('existencia','existencia - ('.$matpri['cantidad'].')')
                     ->where('codigo = ? AND almacen = ?',array($matpri['artcomp'],$almconf->getAlmmatpri()));
          $existenc->execute();

          $articulo = Doctrine_Query::create()
                     ->update('Articulo e')
                     ->set('existencia','existencia - ('.$matpri['cantidad'].')')
                     ->where('codigo = ?',array($matpri['artcomp']));
          $articulo->execute();

          $kardex = new Kardex();

          $data = array();
          $data['id_empresa']= $idempresa;
          $data['agencia']= $sucursal;
          $data['documento']= $codigo;
          $data['codigo']= $matpri['artcomp'];
          $data['hora']= date('h:i a');
          $data['grupo']= $articulo->getGrupo();
          $data['origen']= 'C&D';
          $data['concepto']= 'Cargo y descargo # '.$codigo;
          $data['cantidad']= $matpri['cantidad'];
          $data['estacion']= '000';
          $data['almacen']= $almconf->getAlmmatpri();
          $data['sumaresta']= 2;
          $data['emisor']= $almconf->getUsuario();
          $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
          $data['aux1']= 0.0;
          $data['aux2']= 0.0;
          $data['aux3']= 0.0;
          $data['tipo_resta']= 0;
          $data['idvalidacion']= '                    ';

          $kardex->merge($data);
          //$kardex->assignIdentifier();
          $kardex->save();

          $cargodet = new Cargodet();

          $data = array();
          $data['id_empresa']= $idempresa;
          $data['agencia']= $sucursal;
          $data['documento']= $codigo;
          $data['status']= 0.0;
          $data['ordentrab']= '        ';
          $data['codigo']= $matpri['artcomp'];
          $data['idvalidacion']= $this->getIdCampo();
          $data['nombre']= $articulo->getNombre();
          $data['grupo']= $articulo->getGrupo();
          $data['subgrupo']= $articulo->getSubgrupo();
          $data['proceso']= 2.0;
          $data['cantidad']= $matpri['cantidad'];
          $data['tallas']= '   ';
          $data['colores']= '   ';
          $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
          $data['almacen']= $almconf->getAlmmatpri();
          $data['emisor']= $almconf->getUsuario();
          $data['estacion']= '000';
          $data['usaserial']= 2;
          $data['seriales']= '';
          $data['ubicacion']= '';
          $data['almacenhas']= '';
          $data['precio']= 0.0;
          $data['fechanul']= '0000-00-00';
          $data['useranul']= '               ';
          $data['motivoanul']= '               ';
          $data['lote']= '';
          $data['costo']= 0.0;
          $data['costopromfecha']= 0.0;
          $data['factor']= 0.0;
          $data['tipo']= 0.0;

          $cargodet->merge($data);
          $cargodet->save();

        }


      }

      // actualizamos OrdPro
      $ordpro->setDocumento($codigo);
      $ordpro->save();

      // Actualizamos el contador de documentos
      $almconf->setCondoc($almconf->getCondoc()+1);
      $almconf->save();

    }

  }

  public static function deletePremium(OrdPro $ordpro)
  {

    // Eliminamos primero la entrada en produccion y luego la salida en materia prima
    try{
      for($i=0;$i<2;$i++){
        if($i==0) $cargoenc = $ordpro->getDocpro();
        else $cargoenc = $ordpro->getDocmatpri();

        if($cargoenc){
          $cargodets = $cargoenc->getDetalles();

          foreach($cargodets as $det){

            $existenc = Doctrine_Query::create()
                       ->update('Existenc e')
                       ->set('existencia','existencia '.($i==0 ? '-' : '+').' ('.$det->getCantidad() .')')
                       ->where('codigo = ? AND almacen = ?',array($det->getCodigo(),$det->getAlmacen()));
            $existenc->execute();

            $art = Doctrine_Query::create()
                       ->update('Articulo e')
                       ->set('existencia','existencia '.($i==0 ? '-' : '+').' ('.$det->getCantidad().')')
                       ->where('codigo = ?',array($det->getCodigo()));
            $art->execute();

            $det->delete();
          }
          $cargoenc->delete();

        }

      }
      return true;
    }catch(Exception $ex){
      return false;
    }

  }


  public static function getIdCampo()
  {
    $DesdeLetra = "a";
    $HastaLetra = "z";
    $DesdeNumero = 0;
    $HastaNumero = 9;
    $c = '';

    for($i=0;$i < 12; $i++){

      $letranumero = rand(1, 2);
      if($letranumero==1) $cod = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
      $cod = rand($DesdeNumero, $HastaNumero);

      $c .= $cod;

    }

    return $c;
  }


  public function setObject($obj)
  {
    $this->object = $obj;
  }


}


class RepProForm extends BaseOrdProForm
{
  public function setup()
  {
    parent::setup();

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'numord'     => new sfValidatorIntegerWithCorrelative(),
      'desord'     => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorDoctrineUnique(array('model' => 'OrdPro', 'column' => array('numord'))),
      new sfValidatorReportesProduccion()
    )));

    $this->setDefault('numord', '######');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);


    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }

  public function configure()
  {
  }


  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $con) $con = $this->getConnection();

    $list_materia_prima = $this->taintedValues['list_materia_prima'];
    $list_productos = $this->taintedValues['list_productos'];

    foreach($list_productos as $prod){
      $ordpropro = Doctrine::getTable('OrdProPro')->find($prod['id']);
      if($ordpropro){
        $ordpropro->setResultado($prod['resultado']);
        $ordpropro->save($con);
      }
    }

    foreach($list_materia_prima as $matpri){

      $ordpromatpri = Doctrine::getTable('OrdProMatPri')->find($matpri['id']);
      if($ordpromatpri){
        $ordpromatpri->setResultado($matpri['resultado']);
        $ordpromatpri->save($con);
      }

    }

    $this->savePremiumProductos($list_materia_prima, $list_productos);

  }

  private function savePremiumProductos($list_materia_prima, $list_productos)
  {
    // Obteniendo la informacion basica del registro:
    $idempresa = sfConfig::get('app_premium_empresa');
    $sucursal = sfConfig::get('app_premium_sucursal');

    $ordpro = $this->getObject();

    // Obteniendo la información de configuracion:
    $almconf = Doctrine_Query::create()->from('Almconf')->fetchOne();

    if($idempresa!='' && $sucursal!=''){

      $codigo = str_pad($almconf->getCondoc()+1, 8, '0', STR_PAD_LEFT);


      // Maestro de la salida de almacen
      $cargoenc = new Cargoenc();
      $data = array();

      $data['id_empresa']= $idempresa;
      $data['agencia']= $sucursal;
      $data['documento']= $codigo;
      $data['ordentrab']='        ';
      $data['requisicio']='        ';
      $data['cargado']=0;
      $data['status']=0;
      $data['realizador']= 'Gestión de Producción';
      $data['emisor']= $almconf->getUsuario();
      $data['motivo']='Entradas de Produccion segun Orden de Producción Nro. '.$ordpro->getNumord();
      $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
      $data['estacion']= '000';
      $data['tipoentradasalida']=$almconf->getTipent();

      $cargoenc->merge($data);
      $cargoenc->save();

      // Actualizar la existencia en la tabla existenc
      foreach ($list_productos as $prod){

        $articulo = Doctrine::getTable('Articulo')->findOneBy('codigo', $prod['artcomp']);

        if($articulo){
          $existenc = Doctrine_Query::create()
                     ->update('Existenc e')
                     ->set('existencia','existencia + ('.$prod['cantidad'].')')
                     ->where('codigo = ? AND almacen = ?',array($prod['artcomp'],$almconf->getAlmmatpri()));
          $existenc->execute();

          $art = Doctrine_Query::create()
                     ->update('Articulo e')
                     ->set('existencia','existencia + ('.$prod['cantidad'].')')
                     ->where('codigo = ?',array($prod['artcomp']));
          $art->execute();

          $kardex = new Kardex();

          $data = array();
          $data['id_empresa']= $idempresa;
          $data['agencia']= $sucursal;
          $data['documento']= $codigo;
          $data['codigo']= $prod['artcomp'];
          $data['hora']= date('h:i a');
          $data['grupo']= $articulo->getGrupo();
          $data['origen']= 'C&D';
          $data['concepto']= 'Cargo y descargo # '.$codigo;
          $data['cantidad']= $prod['cantidad'];
          $data['estacion']= '000';
          $data['almacen']= $almconf->getAlmmatpri();
          $data['sumaresta']= 1;
          $data['emisor']= $almconf->getUsuario();
          $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
          $data['aux1']= 0.0;
          $data['aux2']= 0.0;
          $data['aux3']= 0.0;
          $data['tipo_resta']= 0;
          $data['idvalidacion']= '                    ';

          $kardex->merge($data);
          //$kardex->assignIdentifier();
          $kardex->save();

          $cargodet = new Cargodet();

          $data = array();
          $data['id_empresa']= $idempresa;
          $data['agencia']= $sucursal;
          $data['documento']= $codigo;
          $data['status']= 0.0;
          $data['ordentrab']= '        ';
          $data['codigo']= $prod['artcomp'];
          $data['idvalidacion']= OrdProForm::getIdCampo();
          $data['nombre']= $articulo->getNombre();
          $data['grupo']= $articulo->getGrupo();
          $data['subgrupo']= $articulo->getSubgrupo();
          $data['proceso']= 1.0;
          $data['cantidad']= $prod['cantidad'];
          $data['tallas']= '   ';
          $data['colores']= '   ';
          $data['fecha']= date('Y-m-d',strtotime($ordpro->getFecord()));
          $data['almacen']= $almconf->getAlmmatpri();
          $data['emisor']= $almconf->getUsuario();
          $data['estacion']= '000';
          $data['usaserial']= 2;
          $data['seriales']= '';
          $data['ubicacion']= '';
          $data['almacenhas']= '';
          $data['precio']= 0.0;
          $data['fechanul']= '0000-00-00';
          $data['useranul']= '               ';
          $data['motivoanul']= '               ';
          $data['lote']= '';
          $data['costo']= 0.0;
          $data['costopromfecha']= 0.0;
          $data['factor']= 0.0;
          $data['tipo']= 0.0;

          $cargodet->merge($data);
          $cargodet->save();

        }
      }

      $ordpro->setDocumentopro($codigo);
      $ordpro->save();

    }


  }


  public function setObject($obj)
  {
    $this->object = $obj;
  }


}
