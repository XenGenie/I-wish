<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:36:20
         compiled from "/home/xopher/www/superdomx.com/x/X/xUsers/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951284094571b25f42428c0-53355549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d66fd2a713c014e6dd83fa2ce37684a18c192a2' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xUsers/index.tpl',
      1 => 1448770364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951284094571b25f42428c0-53355549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'masterKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b25f440add0_36083439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b25f440add0_36083439')) {function content_571b25f440add0_36083439($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>

<div class="row">           
   <?php echo $_smarty_tpl->getSubTemplate ('~widgets/col.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>12,'method'=>"jumbotron"), 0);?>

</div>
<?php }?><?php }} ?>
