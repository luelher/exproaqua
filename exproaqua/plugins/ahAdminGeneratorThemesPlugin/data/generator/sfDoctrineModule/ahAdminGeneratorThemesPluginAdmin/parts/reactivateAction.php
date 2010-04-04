  public function executeReactivate(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    
    $this-><?php echo $this->getSingularName() ?> = $this->getRoute()->getObject();

    $this->dispatcher->notify(new sfEvent($this, 'admin.reactivate_object', array('object' => $this-><?php echo $this->getSingularName() ?>)));
    
    $this-><?php echo $this->getSingularName() ?>->setIsArchived(false);
    
    $this-><?php echo $this->getSingularName() ?>->save();
    
    ahToolkit::setFlash(ucfirst(Doctrine::getTable('<?php echo $this->getModelClass() ?>')->getSingularName()).' %1% successfully reactivated', 
      array('%1%' => '&raquo;'.$this-><?php echo $this->getSingularName() ?>.'&laquo;'));

    $this->redirect($this->getUser()->getNextRedirect());
  }
