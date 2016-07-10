<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-09 04:40:01
  from "/home/xopher/www/superdomx.com/x/X/xAccess/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57806401be9f28_41134478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2bad184ff71a33dee77b2f016abd6f8842bf5c1' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/index.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_57806401be9f28_41134478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3), 0, false);
?>

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

<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
>
<div class="row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
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
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php }
}
