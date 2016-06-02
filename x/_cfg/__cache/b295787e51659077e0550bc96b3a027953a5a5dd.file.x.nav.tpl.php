<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 22:56:06
         compiled from "x/html/layout/watchtower/x.nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125381737565a80bb0e0960-27124579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295787e51659077e0550bc96b3a027953a5a5dd' => 
    array (
      0 => 'x/html/layout/watchtower/x.nav.tpl',
      1 => 1464641763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125381737565a80bb0e0960-27124579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a80bb166d38_48593685',
  'variables' => 
  array (
    'masterKey' => 0,
    'Xtra' => 0,
    'php' => 0,
    'xtras' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a80bb166d38_48593685')) {function content_565a80bb166d38_48593685($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
    <?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["php"] = new Smarty_variable("x".$_tmp1.".php", null, 0);?>
    <head><title><?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['name'];?>
 : <?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['desc'];?>
 | Super Dom</title></head>
    <div class="row"> 
        <div class="col-md-12">
          <?php echo $_smarty_tpl->getSubTemplate ("./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>
