<?php

class sfValidatorIntegerWithCorrelative extends sfValidatorInteger
{

  protected function doClean($value)
  {
    if(substr_count($value, '#')>0){

      $q = Doctrine_Query::create()
            ->select('MAX(a.numord) as max')
            ->from('OrdPro a')->fetchOne();
      $info = $q;
      if($info){
        return $info['max']+1;
      }

    }else return parent::doClean($value);
  }

}