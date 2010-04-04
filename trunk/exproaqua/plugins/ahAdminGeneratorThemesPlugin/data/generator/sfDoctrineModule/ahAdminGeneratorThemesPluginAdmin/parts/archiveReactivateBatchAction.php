  protected function executeBatchArchiveReactivate(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');
    
    $model_class = '<?php echo $this->getModelClass() ?>';
    $model_plural_name = Doctrine::getTable($model_class)->getPluralName();
 
    $q = Doctrine_Query::create()
      ->from($model_class.' ba')
      ->whereIn('ba.id', $ids);
 
    foreach ($q->execute() as $object)
    {
      $object->setIsArchived(!$object->getIsArchived());
      $object->save();
    }
    
    ahToolkit::setFlash('The selected '.$model_plural_name.' have been archived/reactivated successfully.');

    $this->redirect($this->getUser()->getNextRedirect());
  }
