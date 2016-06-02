<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:42:18
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLang/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741561647574cb3ba974641-48508158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc07a6cd90b7063d358ef5c0ad6e6deb7467cf0' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLang/index.tpl',
      1 => 1448770342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741561647574cb3ba974641-48508158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb3baa00026_44656058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb3baa00026_44656058')) {function content_574cb3baa00026_44656058($_smarty_tpl) {?><?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
