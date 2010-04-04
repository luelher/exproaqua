<?php use_helper('Javascript'); ?>
<?php if(count($error)>0) : ?>
  <?php $errores = ''; foreach ($error as $err) $errores .= "$('error_list_productos').insert('<li>".$err."</li>');"; ?>
  <?php echo javascript_tag("

    $('form_row_new_producto').addClassName('error');
    $('error_list_productos').childElements().each(function(item) {
      item.remove();
    });
    
    ".$errores."

    $('ord_pro_new_productos_cantidad').value = '';
    $('ord_pro_new_productos_cantidad').focus();
    
  ") ?>
<?php else : ?>
  <?php echo javascript_tag("

    $('form_row_new_producto').removeClassName('error');
    $('error_list_productos').childElements().each(function(item) {
      item.remove();
    });;

    $('ord_pro_new_productos_cantidad').value = '';
    $('ord_pro_new_productos_cantidad').focus();

    $('div_list_materia_prima').update($('list_materia_prima_oculto').innerHTML);
    $('list_materia_prima_oculto').remove();

  ") ?>

<?php endif; ?>

<!-- Agregar div para el "notice" -->

  <?php include_partial('lista', array('objs' => $productos, 'fields' => array('artcomp', 'nombre', 'cantidad'), 'labels' => array('Codigo', 'Nombre', 'Cantidad') , 'options' => array('form' => 'ord_pro', 'list' => 'list_productos', 'delete' => true, 'delete_action' => 'deleteprod'))) ?>

  <div id="list_materia_prima_oculto" style="display: none">
   <?php include_partial('lista', array('objs' => $materia_prima, 'fields' => array('codcomp', 'nomcomp', 'artcomp', 'nombre', 'cantidad', 'existencia'), 'labels' => array('Producto', 'Nombre Prod.', 'Articulo', 'Nombre Art.', 'Cantidad', 'Existencia'), 'options' => array('form' => 'ord_pro', 'list' => 'list_materia_prima', 'delete' => true, 'delete_action' => 'deletematpri') ))  ?>
  </div>

