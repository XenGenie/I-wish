<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 04:22:39
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1801940250574e46ef48ac41-10447678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b65aaceb42f07ee387f3c11453a516ab9a80babb' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/settings.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801940250574e46ef48ac41-10447678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
    'XTRA' => 0,
    'method' => 0,
    'LANG' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574e46ef728028_37936751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e46ef728028_37936751')) {function content_574e46ef728028_37936751($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['input'], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0);?>
<?php }} ?>
