    <div class="sf_admin_list">
      <table cellspacing="0" <?php if(isset($options) && $options['list']) echo 'id="'.$options['list'].'"' ?> >
        <thead>
          <tr>
            <?php foreach($labels as $index => $label) : ?>
              <th class="sf_admin_text"><?php echo $label  ?></th>
            <?php endforeach; ?>
            <th id="sf_admin_list_th_actions">Acciones</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="7">Total <?php echo count($objs) ?> </th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($objs as $iobj => $obj) : ?>
          <tr class="sf_admin_row <?php if($iobj % 2 == 0) echo 'odd'; else echo 'even' ?>">
            <?php foreach($fields as $index => $field) : ?>
              <?php $campo = 'get'.ucfirst($field);  ?>
              <td class="sf_admin_text">
                <?php echo tag('input', array( 'style' => 'display:none', 'value' => $obj->$campo(), 'name' => (((isset($options) && $options['form']) ? $options['form'] : '').'['.((isset($options) && $options['list']) ? $options['list'] : '').']['.$iobj.']['.$field.']'),'id' => ((isset($options) && $options['form']) ? $options['form'] : '').'_'.((isset($options) && $options['list']) ? $options['list'] : '').'_'.$iobj.'_'.$field)) ?>
                <?php echo $obj->$campo() ?>
                <?php if($index==0) : ?>
                  <?php echo tag('input', array( 'style' => 'display:none', 'value' => $obj->getId(), 'name' => (((isset($options) && $options['form']) ? $options['form'] : '').'['.((isset($options) && $options['list']) ? $options['list'] : '').']['.$iobj.'][id]'),'id' => ((isset($options) && $options['form']) ? $options['form'] : '').'_'.((isset($options) && $options['list']) ? $options['list'] : '').'_'.$iobj.'_id')) ?>
                <?php endif; ?>
              </td>
            <?php endforeach; ?>            
            <td>
              <ul class="sf_admin_td_actions">
                <?php if(isset($options) && $options['delete']): ?>
                  <!-- if (confirm('¿Estas Seguro?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '37b17b09605d359aea61a9d8d307b09b'); f.appendChild(m);f.submit(); };return false; -->
                  <li class="sf_admin_action_delete"><a onclick="if (confirm('¿Estas Seguro?')) { alert('Por Implementar') };return false;" href="/frontend_dev.php/ordenes/<?php echo (isset($options) && isset($options['delete']['delete_action'])) ? $options['delete']['delete_action'] : 'action' ?>/<?php echo $obj->getId() ?>">Eliminar</a></li>  </ul>
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>