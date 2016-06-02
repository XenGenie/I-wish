<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:11
         compiled from "/home/xopher/www/superdomx.com/x/X/xAccess/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461744753571b26db698da1-80261420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e7fa842cf03edbaf796374118bddeca03487f4' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/index.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461744753571b26db698da1-80261420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'admin_menu' => 0,
    'key' => 0,
    'Xtra' => 0,
    'method' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26db774916_47462241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26db774916_47462241')) {function content_571b26db774916_47462241($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>3), 0);?>

<!-- <div class="row">
	<div class="col-md-12">
		<section class="widget">
			<div class="jumbotron">
				<h1><i class="fa fa-lock"></i> Locks to the Kingdom's Domain</h1>
				<p>
					Manage Locks to be sure how you want to grant access to throughout your domain.
				</p>
				<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/keys" class="btn btn-danger btn-lg"><i class="fa fa-key"></i> Manage Keys</a>
				<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-primary btn-lg"><i class="fa fa-bomb"></i> Blacklist & Firewall</a> 
			</div>	
		</section>
	</div>
	
</div> -->

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value) {?>  
			<div class="col-md-4">

				 <section class="widget">
		            <div class="jumbotron handle text-align-center">

		            	<h1><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 fa-3x"></i></h1>

		                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn btn-lg btn-primary">
		                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 "></i>
		                	<?php echo $_smarty_tpl->tpl_vars['item']->value['area'];?>

				        </a>
		        </section>

			</div>
		<?php }?>
	<?php } ?>

</div>
<script>
	$(document).ready(function(){

		// set up hover panels
		// although this can be done without JavaScript, we've attached these events
		// because it causes the hover to be triggered when the element is tapped on a touch device
		// $('.hover').hover(function(){
		// 	$(this).addClass('flip');
		// },function(){
		// 	$(this).removeClass('flip');
		// });

		// // set up click/tap panels
		// $('.click').toggle(function(){
		// 	$(this).addClass('flip');
		// },function(){
		// 	$(this).removeClass('flip');
		// });

		// set up block configuration
		// $('.block .action').click(function(){
		// 	$('.block').addClass('flip');
		// });
		// $('.block .edit-submit').click(function(e){
		// 	$('.block').removeClass('flip');

		// 	// why not update that list for fun?
		// 	$('#list-title').text($('#form_title').val());
		// 	$('#list-items').empty();
		// 	for (var num = $('#form_items').val(); num >= 1; num--) {
		// 		$('#list-items').append('<li>Super seller</li>');
		// 	}
		// 	e.preventDefault();
		// });

		// set up contact form link
		// $('.contact .action').click(function(e){
		// 	$('.contact').addClass('flip');
		// 	e.preventDefault();
		// });
		// $('.contact .edit-submit').click(function(e){
		// 	$('.contact').removeClass('flip');
		// 	e.preventDefault();
		// });

	});
</script>
<?php }} ?>
