<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:54:37
  from "/home/xopher/www/superdomx.com/x/html/layout/sidedoor/frame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c41d8c88f9_49338137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa99a2202593e67b575fa7ffebf4efe172f18af' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/sidedoor/frame.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable3."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
  ),
),false)) {
function content_5782c41d8c88f9_49338137 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_prefixVariable3."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
