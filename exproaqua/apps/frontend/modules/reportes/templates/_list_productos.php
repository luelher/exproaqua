<?php use_helper('Javascript'); ?>
<div class="sf_admin_form_row">
  <?php echo __('Detalle Productos') ?>
  <?php $ordpro = $form->getObject()  ?>
  <?php $productos = $ordpro->getProductos()  ?>
  <!-- Field widget or content to be displayed in the second column -->
  <div class="content">
    <div id="div_list_productos">
      <?php include_partial('ordenes/lista', array('objs' => $productos, 'fields' => array('artcomp', 'nombre', 'cantidad', 'resultado'), 'labels' => array('Codigo', 'Nombre', 'Solicitado', 'Producido') , 'options' => array('form' => $form->getName(), 'list' => 'list_productos', 'delete' => ($sf_request->getParameterHolder()->get('action')=='new' || $sf_request->getParameterHolder()->get('action')=='create') ? true : false , 'delete_action' => 'ordenes/deleteprod', 'update' => 'div_list_productos', 'edit' => array('resultado') ))) ?>
    </div>
  </div>
</div>
