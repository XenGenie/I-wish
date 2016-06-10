<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 06:11:31
  from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/intro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575254f3a30853_81269334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556cecbdd3fbcbe0b0724c47fead8035d656b2ed' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/intro.tpl',
      1 => 1448770367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/col.tpl' => 1,
  ),
),false)) {
function content_575254f3a30853_81269334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>12,'method'=>"settings",'title'=>"<i class='fa fa-magic'></i> Introduction Wizard"), 0, false);
?>
	
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
><?php }
}
