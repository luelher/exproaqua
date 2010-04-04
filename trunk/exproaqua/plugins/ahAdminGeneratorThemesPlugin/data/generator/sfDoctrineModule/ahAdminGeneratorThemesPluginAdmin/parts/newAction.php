  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getNewForm();
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();
  }
