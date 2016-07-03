<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:54:49
  from "/home/xopher/www/superdomx.com/x/X/xSheets/htmlSheet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fca2916cb72_59828080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5f0ca699f582b63d4fce8b4b6f30cb0d6a65a0' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xSheets/htmlSheet.tpl',
      1 => 1464846851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dom' => 1,
  ),
),false)) {
function content_574fca2916cb72_59828080 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_google_sheet')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.google_sheet.php';
echo smarty_function_google_sheet(array('read'=>$_smarty_tpl->tpl_vars['sheets_html_sheet']->value,'var'=>'HTML','full_sheet'=>true),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:dom", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dom'=>$_smarty_tpl->tpl_vars['HTML']->value['HTML']), 0, false);
?>

<?php }
}
