<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:20:54
         compiled from "/home/xopher/www/superdomx.com/x/X/xLang/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:448688271574c05f6beb0a8-19210933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a57eb7e8f8f0353edee888c1d5426d795dd2a0c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLang/index.tpl',
      1 => 1448770342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448688271574c05f6beb0a8-19210933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c05f6c463d6_72638669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c05f6c463d6_72638669')) {function content_574c05f6c463d6_72638669($_smarty_tpl) {?><?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
