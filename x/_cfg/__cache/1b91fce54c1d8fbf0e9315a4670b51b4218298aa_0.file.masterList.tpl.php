<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-16 19:48:45
  from "/home/xopher/www/superdomx.com/x/X/xUsers/masterList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5762e67dcdd279_27582016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b91fce54c1d8fbf0e9315a4670b51b4218298aa' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xUsers/masterList.tpl',
      1 => 1466099156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~blox/data.table.tpl' => 1,
    'file:layout/watchtower/table.tpl' => 1,
  ),
),false)) {
function content_5762e67dcdd279_27582016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~blox/data.table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="widget"> 
  <?php $_smarty_tpl->_subTemplateRender("file:layout/watchtower/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</section>
<?php }
}
