<?php 
class sfValidatorReportesProduccion extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
  }

  protected function doClean($value)
  {

    $ordpropro = $value['list_productos'];

    $ordpromatpri = $value['list_materia_prima'];

    foreach($ordpropro as $propro){
      if(is_numeric($propro['resultado'])){
        if(!is_integer((integer)$propro['resultado'])) throw new sfValidatorError($this, 'El valor del producto producido no es un numero entero ', array('value' => $value));
      }else throw new sfValidatorError($this, 'El valor del producto producido no es un numero entero ', array('value' => $value));
    }


    foreach($ordpromatpri as $matpri){
      if(is_numeric($matpri['resultado'])){
        if(!is_float((float)$matpri['resultado']))
          throw new sfValidatorError($this, 'El valor de la materia en proceso no es un numero decimal ', array('value' => $value));
      }else new sfValidatorError($this, 'El valor de la materia en proceso no es un numero decimal ', array('value' => $value));
    }

    $value['fecrep'] = date('Y-m-d H:m:s');
    $value['reportada'] = true;

    return $value;
    
  }

  public function isEmpty($value)
  {
    return false;
  }
}
