<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:32:51
  from "/home/xopher/www/superdomx.com/x/X/xSheets/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fc503d42095_57211879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c731ea0862a599668555479f1f75d8b0597f7f48' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xSheets/index.tpl',
      1 => 1464843304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/ajax.form.tpl' => 1,
  ),
),false)) {
function content_574fc503d42095_57211879 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable2);
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['input']);
$_smarty_tpl->_subTemplateRender("file:~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0, false);
?>

<?php }
}
