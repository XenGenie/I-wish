<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 01:35:20
         compiled from "/home/xopher/www/superdomx.com/x/X/xUpload/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1018319982574b7cb8c38b94-02947145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '581e48da7ed1f9418a0689a59cd01750777ace94' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xUpload/index.tpl',
      1 => 1448770363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1018319982574b7cb8c38b94-02947145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
    'XTRA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574b7cb8c91932_29863372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574b7cb8c91932_29863372')) {function content_574b7cb8c91932_29863372($_smarty_tpl) {?><?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>

<?php $_smarty_tpl->createLocalArrayVariable('LANG', null, 0);
$_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['HEAD'] = 'Upload';?>
<?php $_smarty_tpl->createLocalArrayVariable('LANG', null, 0);
$_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['QUOTE'] = 'Chronus Infinity & Nyx team up to give you a most youthful experience. ';?>
<?php $_smarty_tpl->createLocalArrayVariable('LANG', null, 0);
$_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['ICON'] = 'fa-cloud-upload';?>


<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>
<?php }} ?>
