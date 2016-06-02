<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:27:22
         compiled from "/home/xopher/www/superdomx.com/x/crm/xUsers/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:586013480574c077abf7be3-90086246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b1b159679f1bccdbb96796388f1c4a55a67e0e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xUsers/index.tpl',
      1 => 1448770364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '586013480574c077abf7be3-90086246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'masterKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c077ac35ef3_71695950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c077ac35ef3_71695950')) {function content_574c077ac35ef3_71695950($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>

<div class="row">           
   <?php echo $_smarty_tpl->getSubTemplate ('~widgets/col.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>12,'method'=>"jumbotron"), 0);?>

</div>
<?php }?><?php }} ?>
