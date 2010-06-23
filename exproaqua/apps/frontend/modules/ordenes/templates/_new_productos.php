<ul id="error_list_productos" class="error_list"></ul>
<div id="form_row_new_producto" class="sf_admin_form_row sf_admin_form_row_new_producto <?php $form['new_productos']->hasError() and print ' errors' ?>">
  
  <div>
    
    <?php echo $form['new_productos']->renderLabel('Productos') ?>
    <!-- Field widget or content to be displayed in the second column -->
    <div class="content">
      
      <?php use_helper('Javascript'); ?>

        <?php echo $form['new_productos']->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

        <?php echo button_to_remote('Agregar Producto',array(
            'update'   => 'div_list_productos',
            'url'      => 'ordenes/producto',
            'script' => 'true',
            'submit' => 'sf_form_generator',

          )) ?>
    </div>

    <div id="productos"></div>
  </div>
</div>
