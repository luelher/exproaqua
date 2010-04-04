  <!--<div class="clearfix">-->
  [?php if (has_component_slot('show_header')) include_component_slot('show_header') ?]
  <table>
    <tbody>
      [?php include_partial('<?php echo $this->getModuleName() ?>/show_tr_<?php echo $this->configuration->getValue('list.layout') ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]
    </tbody>
  </table>
  <!--</div>-->
  [?php if (has_component_slot('show_footer')) include_component_slot('show_footer') ?]