<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:25:41
         compiled from "/home/xopher/www/superdomx.com/x/crm/xAccess/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1038670593574c07158ee3c5-58493692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9327166e02db005c0f0d3456707bc9f42d4ae9' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xAccess/404.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1038670593574c07158ee3c5-58493692',
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
  'unifunc' => 'content_574c071593bd14_08916386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c071593bd14_08916386')) {function content_574c071593bd14_08916386($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value['XACCESS'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("./back_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['Xtra']->value==$_smarty_tpl->tpl_vars['user']->value['username']) {?>
	<?php }?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("./front_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
