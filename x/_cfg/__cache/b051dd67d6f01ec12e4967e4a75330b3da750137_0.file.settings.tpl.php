<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-05 00:21:48
  from "/home/xopher/www/superdomx.com/x/X/xShop/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577ae17c507580_40832718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b051dd67d6f01ec12e4967e4a75330b3da750137' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/settings.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/ajax.form.tpl' => 1,
  ),
),false)) {
function content_577ae17c507580_40832718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable1);
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['input']);
$_smarty_tpl->_subTemplateRender("file:~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0, false);
}
}
