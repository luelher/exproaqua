  public function executeShow(sfWebRequest $request)
  {
    $this-><?php echo $this->getSingularName() ?> = $this->getRoute()->getObject();
    $this->getUser()->setNextRedirect($this->getController()->genUrl(array('sf_route' => '<?php echo $this->getUrlForAction('show') ?>', 'sf_subject' => $this-><?php echo $this->getSingularName() ?>)));
  }
