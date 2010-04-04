<?php

require_once dirname(__FILE__).'/../lib/configuracionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/configuracionGeneratorHelper.class.php';

/**
 * configuracion actions.
 *
 * @package    exproaqua
 * @subpackage configuracion
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class configuracionActions extends autoConfiguracionActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $config = Doctrine::getTable('AlmConf')->find(1);
    if($config)
      $this->redirect(array('sf_route' => 'alm_conf_edit', 'sf_subject' => $config));
    else
      $this->forward('configuracion', 'new');
  }
}
