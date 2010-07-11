<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfPremiumPlugin');
    $this->enablePlugins('ahAdminGeneratorThemesPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('ahDoctrineEasyEmbeddedRelationsPlugin');
    $this->enablePlugins('sfAdminThemejRollerPlugin');
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfProtoculousPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
