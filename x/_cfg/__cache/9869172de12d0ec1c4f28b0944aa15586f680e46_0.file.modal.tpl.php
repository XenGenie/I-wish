<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:48:46
  from "/home/xopher/www/superdomx.com/x/html/~blox/modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f067e31b346_51476758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9869172de12d0ec1c4f28b0944aa15586f680e46' => 
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
function content_577f067e31b346_51476758 (Smarty_Internal_Template $_smarty_tpl) {
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
