<?php use_helper('Javascript'); ?>
<div class="sf_admin_form_row">
  <?php echo $form['new_productos']->renderLabel('Detalle Productos') ?>
  <?php $ordpro = $form->getObject()  ?>
  <?php $productos = $ordpro->getProductos()  ?>
  <!-- Field widget or content to be displayed in the second column -->
  <div class="content">
    <div id="div_list_productos">
      <?php include_partial('lista', array('objs' => $productos, 'fields' => array('artcomp', 'nombre', 'cantidad'), 'labels' => array('Codigo', 'Nombre', 'Cantidad') , 'options' => array('form' => $form->getName(), 'list' => 'list_productos', 'delete' => ($sf_request->getParameterHolder()->get('action')=='new' || $sf_request->getParameterHolder()->get('action')=='create') ? true : false , 'delete_action' => 'deleteprod'))) ?>
    </div>
  </div>
</div>
