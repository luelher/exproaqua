<ul id="error_list_materia_prima" class="error_list"></ul>
<div id="form_row_new_materia_prima" class="sf_admin_form_row sf_admin_form_row_new_materia_prima <?php $form['new_materia_prima']->hasError() and print ' errors' ?>">

  <div>

    <?php echo $form['new_materia_prima']->renderLabel('Materia Prima') ?>
    <!-- Field widget or content to be displayed in the second column -->
    <div class="content">

      <?php use_helper('Javascript'); ?>

        <?php echo $form['new_materia_prima']->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

        <?php echo button_to_remote('Agregar Materia Prima',array(
            'update'   => 'div_list_materia_prima',
            'url'      => 'ordenes/materiaPrima',
            'script' => 'true',
            'submit' => 'sf_form_generator',

          )) ?>
    </div>

    <div id="materia_prima"></div>
  </div>
</div>
