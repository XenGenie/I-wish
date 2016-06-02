<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 10:05:08
         compiled from "/home/xopher/www/superdomx.com/x/X/xTreasurer/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:651169860574bf4349370e6-14677422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19802f9b2c65eae862f14a1de3a6d3cbf23e8de' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xTreasurer/settings.tpl',
      1 => 1448770362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651169860574bf4349370e6-14677422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
    'X' => 0,
    'method' => 0,
    'LANG' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574bf4349c5272_98533898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574bf4349c5272_98533898')) {function content_574bf4349c5272_98533898($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['X'] = new Smarty_variable("X".$_tmp1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['X']->value][$_smarty_tpl->tpl_vars['method']->value]['input'], null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0);?>
<?php }} ?>
