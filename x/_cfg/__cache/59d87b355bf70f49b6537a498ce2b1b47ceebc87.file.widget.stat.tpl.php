<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:37:14
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1855682156571b262ab1feb4-85256378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d87b355bf70f49b6537a498ce2b1b47ceebc87' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl',
      1 => 1448770360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855682156571b262ab1feb4-85256378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'w_col' => 0,
    'w_title' => 0,
    'w_icon' => 0,
    'w_stat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b262ab7cee5_91587763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b262ab7cee5_91587763')) {function content_571b262ab7cee5_91587763($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['w_col']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['w_col']->value;?>
<?php } else { ?>col-md-3 col-sm-4 col-xs-6<?php }?>">
	<div class="widget text-center">
	    <div class="description">
	        <strong><?php echo $_smarty_tpl->tpl_vars['w_title']->value;?>
</strong>
	    </div>
	    <h1 class="icon">
	        <i class="fa <?php echo $_smarty_tpl->tpl_vars['w_icon']->value;?>
"></i>  <strong><?php echo $_smarty_tpl->tpl_vars['w_stat']->value;?>
</strong>
	    </h1>
	</div>       
</div><?php }} ?>
