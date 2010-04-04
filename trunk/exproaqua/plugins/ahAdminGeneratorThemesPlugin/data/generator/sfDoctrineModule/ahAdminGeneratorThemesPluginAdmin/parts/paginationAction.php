  protected function getPager()
  {
    $pager = $this->configuration->getPager('<?php echo $this->getModelClass() ?>');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function setPage($page, $submodule = '')
  {
    $this->getUser()->setAttribute('<?php echo $this->getModuleName() ?>'.($submodule != '' ? ('.'.$submodule) : '').'.page', $page, 'admin_module');
  }

  protected function getPage($submodule = '')
  {
    return $this->getUser()->getAttribute('<?php echo $this->getModuleName() ?>'.($submodule != '' ? ('.'.$submodule) : '').'.page', 1, 'admin_module');
  }

  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
<?php if ($this->configuration->hasFilterForm()): ?>
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $this->filters->setTableMethod($tableMethod);

    $query = $this->filters->buildQuery($this->getFilters());
<?php else: ?>
    $query = Doctrine::getTable('<?php echo $this->getModelClass() ?>')
      ->createQuery('a');

    if ($tableMethod)
    {
      $query = Doctrine::getTable('<?php echo $this->getModelClass() ?>')->$tableMethod($query);
    }
<?php endif; ?>

    $query = $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }
