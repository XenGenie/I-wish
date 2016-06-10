<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-07 06:23:01
  from "/home/xopher/www/superdomx.com/x/html/~blox/modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57564c250c88c7_20932842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6ebabace61a920dfb190f9d2c3f1630001ee00' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/modal.tpl',
      1 => 1465273283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal-body.tpl' => 1,
  ),
),false)) {
function content_57564c250c88c7_20932842 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="modal-dialog">
      <div class="modal-content">
        <?php $_smarty_tpl->_subTemplateRender("file:./modal-body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?php }
}
