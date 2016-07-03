<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-04 00:32:45
  from "/home/xopher/www/superdomx.com/x/X/xTreasurer/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5779928d852103_51846893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45b79a301d879a4d3678b05e9c44aa5d6dfb7b1' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xTreasurer/settings.tpl',
      1 => 1448770362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/ajax.form.tpl' => 1,
  ),
),false)) {
function content_5779928d852103_51846893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('X', "X".$_prefixVariable1);
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['X']->value][$_smarty_tpl->tpl_vars['method']->value]['input']);
?>

<?php $_smarty_tpl->_subTemplateRender("file:~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0, false);
}
}
