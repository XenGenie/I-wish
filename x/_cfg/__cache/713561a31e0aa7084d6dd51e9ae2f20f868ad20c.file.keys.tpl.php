<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:35:49
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/keys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:411603651574cb23523fc93-30700326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '713561a31e0aa7084d6dd51e9ae2f20f868ad20c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/keys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '411603651574cb23523fc93-30700326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb235332649_28181525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb235332649_28181525')) {function content_574cb235332649_28181525($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>

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
