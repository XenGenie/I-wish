<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:45:15
  from "/home/xopher/www/superdomx.com/x/html/~blox/modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c1ebc838b9_86473350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd09532abf397d11dea7af39cbbae4b1441e5818' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/modal.tpl',
      1 => 1468042790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal-body.tpl' => 1,
  ),
),false)) {
function content_5782c1ebc838b9_86473350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div
  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="myModalLabel"
  aria-hidden="true"
  style="display: none;"
>
  <div class="modal-dialog modal-<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
    <div class="modal-content">
      <?php $_smarty_tpl->_subTemplateRender("file:./modal-body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttons'=>$_smarty_tpl->tpl_vars['buttons']->value), 0, false);
?>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php }
}
