<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:52:24
  from "/home/xopher/www/superdomx.com/x/X/xAccess/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820cc8c15dc9_88673195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '403cecbf0d495dd56ff0a9a25e7b275e0c0b388f' => 
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
function content_57820cc8c15dc9_88673195 (Smarty_Internal_Template $_smarty_tpl) {
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
