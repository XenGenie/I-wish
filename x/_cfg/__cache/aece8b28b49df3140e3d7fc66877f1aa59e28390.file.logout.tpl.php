<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:49:11
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416255090574c0c970b1b68-04197986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aece8b28b49df3140e3d7fc66877f1aa59e28390' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/logout.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416255090574c0c970b1b68-04197986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_message' => 0,
    'login_title' => 0,
    'site_name' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c0c970ec1c5_87373949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c0c970ec1c5_87373949')) {function content_574c0c970ec1c5_87373949($_smarty_tpl) {?><div class="container" id="content">
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
</div> <?php }} ?>
