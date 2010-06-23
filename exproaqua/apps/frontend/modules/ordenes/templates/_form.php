<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_helper('Javascript') ?>

<?php echo javascript_tag("

  Ajax.Responders.register({
    onCreate: function() {
      $('cargando').show();
    },
    onComplete: function() {
      $('cargando').hide();
    },

  });
") ?>
<img id="cargando" align="center" style="display: none" src="/images/ajax-loader.gif?1269125174">
<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@ord_pro', array('id' => 'sf_form_generator')) ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('ordenes/form_fieldset', array('ord_pro' => $ord_pro, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <?php include_partial('ordenes/form_actions', array('ord_pro' => $ord_pro, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
