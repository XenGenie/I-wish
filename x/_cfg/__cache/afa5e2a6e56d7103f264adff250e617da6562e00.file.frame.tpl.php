<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:03:20
         compiled from "x/html/layout/sidedoor/frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1707895070565a79086b6da1-43787541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa5e2a6e56d7103f264adff250e617da6562e00' => 
    array (
      0 => 'x/html/layout/sidedoor/frame.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707895070565a79086b6da1-43787541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suite' => 0,
    'Xtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a79086c24c5_87235730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a79086c24c5_87235730')) {function content_565a79086c24c5_87235730($_smarty_tpl) {?><?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_tmp1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
