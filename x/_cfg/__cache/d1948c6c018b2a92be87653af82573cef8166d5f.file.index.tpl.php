<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:37:14
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1815399798571b262a9c46f7-72710042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1948c6c018b2a92be87653af82573cef8166d5f' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/index.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1815399798571b262a9c46f7-72710042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'masterKey' => 0,
    'shop_sum' => 0,
    'items_in_stock' => 0,
    'items_sold' => 0,
    'shop_sold' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b262aaf9ca4_42639146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b262aaf9ca4_42639146')) {function content_571b262aaf9ca4_42639146($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
<div class="row">           
   <?php echo $_smarty_tpl->getSubTemplate ('~widgets/col.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>12,'method'=>"jumbotron"), 0);?>

   
   
    <?php $_smarty_tpl->tpl_vars['w_col'] = new Smarty_variable("col-md-3 col-sm-3 col-xs-6", null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('./widget.stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('w_title'=>"Store Value",'w_icon'=>"fa-money",'w_stat'=>$_smarty_tpl->tpl_vars['shop_sum']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('./widget.stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('w_title'=>"Items in Stock",'w_icon'=>"fa-shopping-cart",'w_stat'=>$_smarty_tpl->tpl_vars['items_in_stock']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('./widget.stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('w_title'=>"Items Sold",'w_icon'=>"fa-truck",'w_stat'=>$_smarty_tpl->tpl_vars['items_sold']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('./widget.stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('w_title'=>"Total Sold",'w_icon'=>"fa-dollar",'w_stat'=>$_smarty_tpl->tpl_vars['shop_sold']->value), 0);?>

    
    
    
    
    
  

 
   
</div>
<?php }?><?php }} ?>
