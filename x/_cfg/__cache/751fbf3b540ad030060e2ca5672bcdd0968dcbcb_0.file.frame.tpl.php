<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 11:05:04
  from "/home/xopher/www/superdomx.com/x/html/layout/sidedoor/frame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820fc03a2701_41095752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '751fbf3b540ad030060e2ca5672bcdd0968dcbcb' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/sidedoor/frame.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
  ),
),false)) {
function content_57820fc03a2701_41095752 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
