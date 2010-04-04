  public function executeArchive(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.archive_object', array('object' => $this->getRoute()->getObject())));

    $this-><?php echo $this->getSingularName() ?> = $this->getRoute()->getObject();
    
    $this-><?php echo $this->getSingularName() ?>->setIsArchived(true);
    
    $this-><?php echo $this->getSingularName() ?>->save();
    
    ahToolkit::setFlash(ucfirst(Doctrine::getTable('<?php echo $this->getModelClass() ?>')->getSingularName()).' %1% successfully archived', 
      array('%1%' => '&raquo;'.$this-><?php echo $this->getSingularName() ?>.'&laquo;'));

    $this->redirect($this->getUser()->getNextRedirect());
  }
