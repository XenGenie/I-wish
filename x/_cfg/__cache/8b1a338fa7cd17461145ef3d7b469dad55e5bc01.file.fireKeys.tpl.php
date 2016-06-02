<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:35:56
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/fireKeys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499018926574cb23cae7b99-73785561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1a338fa7cd17461145ef3d7b469dad55e5bc01' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/fireKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499018926574cb23cae7b99-73785561',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb23cb8b787_62896093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb23cb8b787_62896093')) {function content_574cb23cb8b787_62896093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="alert alert-danger text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-fire fa-5x"></i><br/><strong>Fire Power</strong></h3>
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-danger active" type="button">
	            <i class="fa fa-fire "></i>
	        </button>
	    </span>
	    <input id="swipe_key" type="email"
	           data-trigger="change" required="required" 
	           class="form-control"
	           name="key[email]" value="">
	    <span class="input-group-btn">
	        <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
	             <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>The Fire Key grants users the ability to delete content & ban users.</p>
</div>


<?php }} ?>
