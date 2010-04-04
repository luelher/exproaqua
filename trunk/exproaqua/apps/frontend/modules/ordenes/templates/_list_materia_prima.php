<div class="sf_admin_form_row">
  <?php echo $form['new_productos']->renderLabel('Detalle Articulos') ?>
  <?php $ordpro = $form->getObject()  ?>
  <?php $materiaprima = $ordpro->getMateriaPrima()  ?>
  <!-- Field widget or content to be displayed in the second column -->
  <div class="content">
    <div id="div_list_materia_prima">
      <?php include_partial('lista', array('objs' => $materiaprima, 'fields' => array('codcomp', 'nomcomp', 'artcomp', 'nombre', 'cantidad', 'existencia'), 'labels' => array('Producto', 'Nombre Prod.', 'Articulo', 'Nombre Art.', 'Cantidad', 'Existencia'), 'options' => array('form' => $form->getName(), 'list' => 'list_materia_prima', 'delete' => ($sf_request->getParameterHolder()->get('action')=='new') ? true : false, 'delete_action' => 'deletematpri') )) ?>
    </div>
  </div>
</div>
