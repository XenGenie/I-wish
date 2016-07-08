<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:52:41
  from "/home/xopher/www/superdomx.com/x/X/xAdvertise/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f076962af83_17840452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8394ea7dfd87ba4cbbd68e4e97cea392ffa192c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAdvertise/index.tpl',
      1 => 1467942747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:tables.dynamic.backgrid.tpl' => 1,
  ),
),false)) {
function content_577f076962af83_17840452 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['atBackDoor']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:tables.dynamic.backgrid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
