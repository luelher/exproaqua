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
    $this->renderLists($request, &$ordpro);
  }

  public function renderListsPost(sfWebRequest $request, OrdPro &$obj, $productos = null, $materia_prima = null)
  {
    $this->producto = array();
    $this->error = array();
    $this->ordpro = $request->getParameter('ord_pro');
    $this->producto[] = $this->ordpro['new_productos'];

    if($productos) $ordpropro = $productos;
    else $ordpropro = $this->ordpro['list_productos'];

    if($materia_prima) $ordpromatpri = $materia_prima;
    else $ordpromatpri = $this->ordpro['list_materia_prima'];

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

  public function renderLists(sfWebRequest $request, OrdPro &$obj, $eliminar = array())
  {
    $this->producto = array();
    $this->error = array();
    $this->ordpro = $request->getParameter('ord_pro');
    $this->producto[] = $this->ordpro['new_productos'];

    $ordpropro = isset ($this->ordpro['list_productos']) ? $this->ordpro['list_productos'] : array();

    $ordpromatpri = isset($this->ordpro['list_materia_prima']) ? $this->ordpro['list_materia_prima'] : array();

    $this->productos = new Doctrine_Collection('OrdProPro');
    $this->materia_prima = new Doctrine_Collection('OrdProMatPri');

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

            // Creo la nueva materia prima en base al producto
            foreach($articomp as $comp){
              $ordpromatpri = new OrdProMatPri();
              $ordpromatpri->setCodcomp($articulo->getCodigo());
              $ordpromatpri->setNomcomp($articulo->getNombre());
              $ordpromatpri->setArtcomp($comp->getCodigo());
              $ordpromatpri->setCantidad($comp->getCantidad() * $producto['cantidad']);

              $this->materia_prima->add($ordpromatpri);
            }

          }else{
            $this->error[] = 'El Producto Seleccionado no Existe Como Artículo Compuesto';
          }
        }else{
          $this->error[] = 'El Producto Seleccionado no Existe';
        }

      }else{
          $this->error[] = 'Debe Seleccionar un Producto y la cantidad a producir. La cantidad debe ser entera';
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
    $materia_prima = $ordpro['list_materia_prima'];

    if($producto[$fila]){
      $ordpro = Doctrine::getTable('Articomp')->findBy('compuesto', $producto[$fila]['artcomp']);
      if($ordpro){
        foreach($ordpro as $comp){
          foreach ($materia_prima as $index => $matpri){
            if($matpri['artcomp']==$comp->getCodigo()){
              unset ($materia_prima[$index]);
              break;
            }
          }
        }
        $materia_prima = array_values($materia_prima);
      }
      unset ($producto[$fila]);
      $producto = array_values($producto);
    }


    // Generando variables para la vista
    $ordpro = new OrdPro();
    $this->renderListsPost($request, &$ordpro, $producto, $materia_prima);

  }

  public function executeDeletematpri(sfWebRequest $request)
  {
    // Eliminando las materias primas
    $fila = $request->getParameter('row');

    $ordpro = $request->getParameter('ord_pro');
    $producto = $ordpro['list_productos'];
    $materia_prima = $ordpro['list_materia_prima'];

    unset ($materia_prima[$fila]);
    $materia_prima = array_values($materia_prima);

    // Generando variables para la vista
    $ordpro = new OrdPro();
    $this->renderListsPost($request, &$ordpro, $producto, $materia_prima);

  }


}
