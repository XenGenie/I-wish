<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-03 08:12:31
  from "/home/xopher/www/superdomx.com/x/html/~widgets/col.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57511fcfd23621_43662628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2f3cd5e4eef93b81d6b37fb08fe53d57d0643e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/col.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/jig.tpl' => 1,
  ),
),false)) {
function content_57511fcfd23621_43662628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>col-md-offset-<?php echo $_smarty_tpl->tpl_vars['offset']->value;
}?>">
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/jig.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), 0, false);
?>

</div><?php }
}
