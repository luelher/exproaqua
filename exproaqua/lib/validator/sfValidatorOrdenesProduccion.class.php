<?php 
class sfValidatorOrdenesProduccion extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
  }

  protected function doClean($value)
  {

    $ordpropro = $value['list_productos'];

    $ordpromatpri = $value['list_materia_prima'];

    if(count($ordpropro)==0 || count($ordpromatpri)==0) throw new sfValidatorError($this, 'Debe Agregar al menos un producto y materia prima', array('value' => $value));

    foreach($ordpromatpri as $matpri){
      $articulo = Doctrine::getTable('Articulo')->findOneBy('codigo', $matpri['artcomp']);
      if($articulo->getExistencia()<$matpri['cantidad']) throw new sfValidatorError($this, 'No hay Existencia suficiente para el artículo '.trim($matpri['artcomp']).'(existencia='.$articulo->getExistencia().')', array('value' => $value));
    }

    
  }

  public function isEmpty($value)
  {
    return false;
  }
}
