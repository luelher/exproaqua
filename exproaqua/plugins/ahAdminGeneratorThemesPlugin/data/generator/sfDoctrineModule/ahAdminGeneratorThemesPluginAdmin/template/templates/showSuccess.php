[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php slot('module_header', <?php echo $this->getI18NString('show.title') ?>) ?]
[?php sfContext::getInstance()->getResponse()->setTitle($<?php echo $this->getSingularName() ?>) ?]

<h2 class="no_top_padding">[?php echo $<?php echo $this->getSingularName() ?> ?]</h2>

[?php include_partial('<?php echo $this->getModuleName() ?>/show', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]

[?php include_partial('<?php echo $this->getModuleName() ?>/show_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'configuration' => $configuration, 'helper' => $helper)) ?]
