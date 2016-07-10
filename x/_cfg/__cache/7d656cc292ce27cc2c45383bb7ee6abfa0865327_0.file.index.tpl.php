<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:43:11
  from "/home/xopher/www/superdomx.com/x/X/xShop/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c16f5e4d16_58423200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d656cc292ce27cc2c45383bb7ee6abfa0865327' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/index.tpl',
      1 => 1468132674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/col.tpl' => 1,
    'file:./widget.stat.tpl' => 4,
  ),
),false)) {
function content_5782c16f5e4d16_58423200 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
<div class="row">           
   <?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>12,'method'=>"jumbotron"), 0, false);
?>

   
    <?php $_smarty_tpl->_assignInScope('w_col', "col-md-3 col-sm-3 col-xs-6");
?>

    <?php $_smarty_tpl->_subTemplateRender("file:./widget.stat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('w_title'=>"Store Value",'w_icon'=>"fa-money",'w_stat'=>$_smarty_tpl->tpl_vars['shop_sum']->value), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:./widget.stat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('w_title'=>"Items in Stock",'w_icon'=>"fa-shopping-cart",'w_stat'=>$_smarty_tpl->tpl_vars['items_in_stock']->value), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:./widget.stat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('w_title'=>"Items Sold",'w_icon'=>"fa-truck",'w_stat'=>$_smarty_tpl->tpl_vars['items_sold']->value), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:./widget.stat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('w_title'=>"Total Sold",'w_icon'=>"fa-dollar",'w_stat'=>$_smarty_tpl->tpl_vars['shop_sold']->value), 0, true);
?>

   
</div>
<?php }
}
}
