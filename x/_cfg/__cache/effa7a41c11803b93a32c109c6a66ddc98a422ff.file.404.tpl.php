<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:35:37
         compiled from "/home/xopher/www/superdomx.com/x/X/xAccess/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:582775851565a8099dcd978-14661207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effa7a41c11803b93a32c109c6a66ddc98a422ff' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/404.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582775851565a8099dcd978-14661207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'masterKey' => 0,
    'Xtra' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a8099de2da0_09175807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a8099de2da0_09175807')) {function content_565a8099de2da0_09175807($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value['XACCESS'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("./back_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['Xtra']->value==$_smarty_tpl->tpl_vars['user']->value['username']) {?>
	<?php }?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("./front_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
