<div class="sf_admin_form_row">
  <?php echo __('Detalle Articulos') ?>
  <?php $ordpro = $form->getObject()  ?>
  <?php $materiaprima = $ordpro->getMateriaPrima()  ?>
  <!-- Field widget or content to be displayed in the second column -->
  <div class="content">
    <div id="div_list_materia_prima">
      <?php include_partial('ordenes/lista', array('objs' => $materiaprima, 'fields' => array('codcomp', 'nomcomp', 'artcomp', 'nombre', 'cantidad', 'resultado'), 'labels' => array('Producto', 'Nombre Prod.', 'Articulo', 'Nombre Art.', 'Cant. Solicitada', 'En Proceso'), 'options' => array('form' => $form->getName(), 'list' => 'list_materia_prima', 'delete' => ($sf_request->getParameterHolder()->get('action')=='new' || $sf_request->getParameterHolder()->get('action')=='create') ? true : false, 'delete_action' => 'ordenes/deletematpri', 'update' => 'div_list_productos', 'edit' => array('resultado')) )) ?>
    </div>
  </div>
</div>
