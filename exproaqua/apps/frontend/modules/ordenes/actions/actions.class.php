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
    $form = new OrdProForm();
    $this->renderLists($request, $form);
  }

  public function renderLists(sfWebRequest $request, OrdProForm &$form)
  {
    $this->producto = array();
    $this->error = array();
    $this->ordpro = $request->getParameter('ord_pro');
    $this->producto[] = $this->ordpro['new_productos'];

    $ordpropro = $request->getParameter('list_productos');

    $ordpromatpri = $request->getParameter('list_materia_prima');

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
      $form->setObject($form->object->productos=$this->producto);
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
            $form->setObject($form->getObject()->materia_prima=$this->materia_prima);

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

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $ord_pro = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $ord_pro)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@ord_pro_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'ord_pro_edit', 'sf_subject' => $ord_pro));
      }
    }
    else
    {
      $this->renderLists($request, &$form);
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}
