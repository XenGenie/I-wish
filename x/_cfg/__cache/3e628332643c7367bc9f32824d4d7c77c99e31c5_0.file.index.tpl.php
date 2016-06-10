<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 03:57:10
  from "/home/xopher/www/superdomx.com/x/X/xShop/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575235767c6794_21230626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e628332643c7367bc9f32824d4d7c77c99e31c5' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/index.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/col.tpl' => 1,
    'file:./widget.stat.tpl' => 4,
  ),
),false)) {
function content_575235767c6794_21230626 (Smarty_Internal_Template $_smarty_tpl) {
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
