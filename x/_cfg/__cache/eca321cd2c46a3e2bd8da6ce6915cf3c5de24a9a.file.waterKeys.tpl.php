<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:36:01
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/waterKeys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35421325574cb241d92e38-63450534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca321cd2c46a3e2bd8da6ce6915cf3c5de24a9a' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/waterKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35421325574cb241d92e38-63450534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb241e0c158_86022248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb241e0c158_86022248')) {function content_574cb241e0c158_86022248($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="alert alert-info text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-user-md fa-5x"></i><br/><strong>Wisdom to Heal</strong></h3>
	
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-info active" type="button">
	             <i class="fa fa-heart "></i>
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
    <p>Grants a user the ability to edit and moderate content.</p>

</div><?php }} ?>
