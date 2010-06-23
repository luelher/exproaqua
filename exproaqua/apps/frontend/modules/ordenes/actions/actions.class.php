<?php

require_once dirname(__FILE__).'/../lib/ordenesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ordenesGeneratorHelper.class.php';

/**
 * ordenes actions.
 *
 * @package    exproaqua
 * @subpackage ordenes
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ordenesActions extends autoOrdenesActions
{

  public function executeProducto(sfWebRequest $request)
  {
    $ordpro = new OrdPro();
    $this->renderLists($request, &$ordpro, 'P');
  }

  public function executeMateriaPrima(sfWebRequest $request)
  {
    $ordpro = new OrdPro();
    $this->renderLists($request, &$ordpro, 'M');
  }

  public function renderListsPost(sfWebRequest $request, OrdPro &$obj, $productos = null, $materia_prima = null)
  {
    $this->producto = array();
    $this->error = array();
    $this->ordpro = $request->getParameter('ord_pro');
    $this->producto[] = $this->ordpro['new_productos'];

    if($productos!==null) $ordpropro = $productos;
    else{
      if(isset($this->ordpro['list_productos']))
        $ordpropro = $this->ordpro['list_productos'];
      else $ordpropro = array();
    }

    if($materia_prima!==null) $ordpromatpri = $materia_prima;
    else{
     if(isset($this->ordpro['list_materia_prima']))
       $ordpromatpri = $this->ordpro['list_materia_prima'];
     else $ordpromatpri = array();
    }

    $this->productos = new Doctrine_Collection('OrdProPro');
    $this->materia_prima = new Doctrine_Collection('OrdProMatPri');

    foreach($ordpropro as $producto){
      $ordpropro = new OrdProPro();
      $ordpropro->setArtcomp($producto['artcomp']);
      $ordpropro->setCantidad($producto['cantidad']);
      $this->productos->add($ordpropro);
    }
    $obj->productos=$this->productos;

    foreach($ordpromatpri as $matpri){
      $ordpromatpri = new OrdProMatPri();
      $ordpromatpri->setCodcomp($matpri['codcomp']);
      $ordpromatpri->setNomcomp($matpri['nomcomp']);
      $ordpromatpri->setArtcomp($matpri['artcomp']);
      $ordpromatpri->setCantidad($matpri['cantidad']);

      $this->materia_prima->add($ordpromatpri);
    }
    $obj->materia_prima=$this->materia_prima;


  }

  public function renderLists(sfWebRequest $request, OrdPro &$obj, $validar)
  {
    $almconf = Doctrine_Query::create()->from('AlmConf')->fetchOne(array());
    $almmatpri = $almconf->getMatPri();
    $almproter = $almconf->getProTer();

    $this->producto = array();
    $this->matpri = array();
    $this->error = array();
    $this->ordpro = $request->getParameter('ord_pro');
    $this->producto[] = $this->ordpro['new_productos'];
    $this->matpri[] = $this->ordpro['new_materia_prima'];

    $ordpropro = isset ($this->ordpro['list_productos']) ? $this->ordpro['list_productos'] : array();

    $ordpromatpri = isset($this->ordpro['list_materia_prima']) ? $this->ordpro['list_materia_prima'] : array();

    $this->productos = new Doctrine_Collection('OrdProPro');
    $this->materia_prima = new Doctrine_Collection('OrdProMatPri');

    if($validar=='P'){
      // Verifico que no se haya seleccionado el producto actual
      if($ordpropro){
        foreach($ordpropro as $propro){
          if($propro['artcomp'] == $this->producto[0]['artcomp']){
            $this->error[] = 'El Producto Seleccionado Ya existe, si desea modificarlo, eliminelo y vuelva a ingresalo';
            $this->producto[0] = $propro;
          }else{
            $this->producto[] = array('artcomp' => $propro['artcomp'], 'cantidad' => $propro['cantidad']);
          }
        }
      }

      foreach($this->producto as $producto){

        if(isset($producto['artcomp']) && isset($producto['cantidad']) && is_numeric($producto['cantidad'])){

          $articulo = Doctrine::getTable('Articulo')->findOneBy('codigo', $producto['artcomp']);
          if($articulo){
            $articomp = Doctrine::getTable('Articomp')->findBy('compuesto', $producto['artcomp']);
            if($articomp){

              // Creo el nuevo producto
              $ordpropro = new OrdProPro();
              $ordpropro->setArtcomp($articulo->getCodigo());
              $ordpropro->setCantidad(intval($producto['cantidad']));
              $this->productos->add($ordpropro);

            }else{
              $this->error[] = 'El Producto Seleccionado no Existe Como Artículo Compuesto';
            }
          }else{
            $this->error[] = 'El Producto Seleccionado no Existe en el almacen de materia prima ('.$almmatpri->getCodigo().')';
          }

        }else{
            $this->error[] = 'Debe Seleccionar un Producto y la cantidad a producir. La cantidad debe ser entera';
          }

        }

    }elseif($validar=='M'){
      if($ordpromatpri){
        foreach($ordpromatpri as $matpri){
          if($matpri['artcomp'] == $this->matpri[0]['artcomp']){
            $this->error[] = 'La Materia Prima Seleccionada Ya existe, si desea modificarlo, eliminelo y vuelva a ingresalo';
            $this->matpri[0] = $matpri;
          }else{
            $this->matpri[] = array('artcomp' => $matpri['artcomp'], 'cantidad' => $matpri['cantidad']);
          }
        }
      }

      foreach($this->matpri as $matpri){

        if(isset($matpri['artcomp']) && isset($matpri['cantidad']) && is_numeric($matpri['cantidad'])){

          $articulo = Doctrine_Query::create()->from('Existenc e')->where('e.codigo = ? AND e.almacen= ?', array($matpri['artcomp'],$almmatpri->getCodigo()))->fetchOne();
          if($articulo){
            // Creo el nuevo producto
            $ordpromatpri = new OrdProMatPri();
            $ordpromatpri->setArtcomp($articulo['codigo']);
            $ordpromatpri->setCantidad(intval($matpri['cantidad']));
            $this->materia_prima->add($ordpromatpri);

          }else{
            $this->error_matpri[] = 'El Producto Seleccionado no Existe en el almacen de materia prima ('.$almmatpri->getCodigo().')';
          }

        }else{
            $this->error_matpri[] = 'Debe Seleccionar un Producto y la cantidad a producir. La cantidad debe ser entera';
          }

        }
    }


  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->ord_pro = $this->form->getObject();

    $this->processForm($request, $this->form);

    $ordpro = $this->form->getObject();
    $this->renderListsPost($request, &$ordpro);
    $this->form->setObject($ordpro);

    $this->setTemplate('new');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    $ord_pro = $this->getRoute()->getObject();

    $ord_pro->getProductos()->delete();
    $ord_pro->getMateriaPrima()->delete();
    if ($ord_pro->delete())
    {
      // Agregar Proceso de integración con profit
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@ord_pro');
  }

  public function executeDeleteprod(sfWebRequest $request)
  {
    // Eliminando los productos
    $fila = $request->getParameter('row');

    $ordpro = $request->getParameter('ord_pro');
    $producto = $ordpro['list_productos'];
    //$materia_prima = $ordpro['list_materia_prima'];

    if($producto[$fila]){
      $ordpro = Doctrine::getTable('Articomp')->findBy('compuesto', $producto[$fila]['artcomp']);
//      if($ordpro){
//        foreach($ordpro as $comp){
//          foreach ($materia_prima as $index => $matpri){
//            if($matpri['artcomp']==$comp->getCodigo()){
//              unset ($materia_prima[$index]);
//              break;
//            }
//          }
//        }
//        $materia_prima = array_values($materia_prima);
//      }
      unset ($producto[$fila]);
      $producto = array_values($producto);
    }


    // Generando variables para la vista
    $ordpro = new OrdPro();
    $this->renderListsPost($request, &$ordpro, $producto);

  }

  public function executeDeletematpri(sfWebRequest $request)
  {
    // Eliminando las materias primas
    $fila = $request->getParameter('row');

    $ordpro = $request->getParameter('ord_pro');
    if(isset($ordpro['list_productos']))
      $producto = $ordpro['list_productos'];
    else $producto = array();

    if(isset($ordpro['list_materia_prima']))
      $materia_prima = $ordpro['list_materia_prima'];
    else $materia_prima = array();


    unset ($materia_prima[$fila]);
    $materia_prima = array_values($materia_prima);

    // Generando variables para la vista
    $ordpro = new OrdPro();
    $this->renderListsPost($request, &$ordpro, $producto, $materia_prima);

  }


}
