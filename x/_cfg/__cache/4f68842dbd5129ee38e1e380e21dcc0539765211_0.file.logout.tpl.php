<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 06:39:10
  from "/home/xopher/www/superdomx.com/x/X/xLogin/logout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f2e6e7e79f5_68546693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f68842dbd5129ee38e1e380e21dcc0539765211' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/logout.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f2e6e7e79f5_68546693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" id="content">
	<div class="jumbotron tile-light">

	<h1 style="display: inline;">
		<i class="fa fa-lock fa-5x pull-right text-danger">
			
		</i><?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>

	</h1> 
	<h3 ><?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>
</h3>	
			
		<div class="btn-group">
			<button class="btn btn-info btn-lg" onclick="history.back()" style="float: left" value="Connect"  >
	 		<i class="fa fa-backward"></i> Back
			</button> 
			
			<button  class="btn btn-success btn-lg" onclick="location = location.origin"  value="Connect" >
		 		 <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

			</button>

			<button  class="btn btn-warning btn-lg" onclick="location = './'"  value="Connect" >
		 		 <i class="fa fa-key"></i> Login
			</button>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="label label-sm badge ">powered by<br/>  
			<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=16"/></p>

		</div>
	</div>
</div> <?php }
}
