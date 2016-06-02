<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:36
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/keys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:891971418571b26f4eabda5-94290381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35c16117f5b22cdd6effcec6230d11d2b3bed9c8' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/keys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891971418571b26f4eabda5-94290381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26f5090501_01916365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26f5090501_01916365')) {function content_571b26f5090501_01916365($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>

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
	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3,'method'=>"fireKey",'title'=>"Fire Key"), 0);?>
 
	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3,'method'=>"waterKey",'title'=>"Water Key"), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3,'method'=>"earthKey",'title'=>"Earth Key"), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3,'method'=>"windKey",'title'=>"Wind Key"), 0);?>

</div> -->

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script><?php }} ?>
