<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:35:51
  from "/home/xopher/www/superdomx.com/x/X/xAccess/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f0377828011_58366164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f96216f3238dc9f3fd2c91ed3b4758e0f15d004b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/404.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./back_404.tpl' => 1,
    'file:./front_404.tpl' => 1,
  ),
),false)) {
function content_577f0377828011_58366164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('l', $_smarty_tpl->tpl_vars['LANG']->value['XACCESS']);
?>

<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./back_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['Xtra']->value == $_smarty_tpl->tpl_vars['user']->value['username']) {?>
	<?php }?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:./front_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
