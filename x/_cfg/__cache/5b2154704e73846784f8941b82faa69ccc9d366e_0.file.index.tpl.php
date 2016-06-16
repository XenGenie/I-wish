<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-13 06:51:02
  from "/home/xopher/www/superdomx.com/x/X/xUpload/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575e3bb65ec147_12397550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2154704e73846784f8941b82faa69ccc9d366e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xUpload/index.tpl',
      1 => 1448770363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_575e3bb65ec147_12397550 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable1);
?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['LANG']) ? $_smarty_tpl->tpl_vars['LANG']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['HEAD'] = 'Upload';
$_smarty_tpl->_assignInScope('LANG', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['LANG']) ? $_smarty_tpl->tpl_vars['LANG']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['QUOTE'] = 'Chronus Infinity & Nyx team up to give you a most youthful experience. ';
$_smarty_tpl->_assignInScope('LANG', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['LANG']) ? $_smarty_tpl->tpl_vars['LANG']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['XTRA']->value]['ICON'] = 'fa-cloud-upload';
$_smarty_tpl->_assignInScope('LANG', $_tmp_array);
?>


<?php $_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3), 0, false);
}
}
