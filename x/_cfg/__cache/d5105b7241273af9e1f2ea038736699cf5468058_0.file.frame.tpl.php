<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:43:11
  from "/home/xopher/www/superdomx.com/x/html/layout/sidedoor/frame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c16f53ca31_52683065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5105b7241273af9e1f2ea038736699cf5468058' => 
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
function content_5782c16f53ca31_52683065 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_prefixVariable3."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
