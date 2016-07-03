<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-02 06:55:42
         compiled from "/home/xopher/www/superdomx.com/x/X/xSheets/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1391871138574fb807cb0b90-25241081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd30c29c9b2240c23360fc92699f43e64e44838c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xSheets/index.tpl',
      1 => 1464843304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1391871138574fb807cb0b90-25241081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574fb807cec7a8_57191026',
  'variables' => 
  array (
    'Xtra' => 0,
    'XTRA' => 0,
    'method' => 0,
    'LANG' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fb807cec7a8_57191026')) {function content_574fb807cec7a8_57191026($_smarty_tpl) {?><?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['input'], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0);?>

<?php }} ?>
