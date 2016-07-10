<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:42:44
  from "/home/xopher/www/superdomx.com/x/X/xLogin/keys.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c154380654_49923536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262c4e77c4211eabfe38f1a24a3dbd9096f54951' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/keys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/col.tpl' => 4,
  ),
),false)) {
function content_5782c154380654_49923536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3), 0, false);
?>

<!-- <div class="row">
	<div class="col-md-12">
		<section class="widget">
			<div class="jumbotron">
				<h1><i class="fa fa-key"></i> Keys to the Kingdom's Domain</h1>
				<p>
					Create Keys to invite Someone whom you wish to grant such access to your domain.
				</p>
				<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-info btn-lg"><i class="fa fa-lock"></i> Manage Locks</a>
				<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-warning btn-lg"><i class="fa fa-key"></i> Master Key</a>
			</div>	
		</section>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3,'method'=>"fireKey",'title'=>"Fire Key"), 0, false);
?>
 
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3,'method'=>"waterKey",'title'=>"Water Key"), 0, true);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3,'method'=>"earthKey",'title'=>"Earth Key"), 0, true);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3,'method'=>"windKey",'title'=>"Wind Key"), 0, true);
?>

</div> -->

<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
><?php }
}
