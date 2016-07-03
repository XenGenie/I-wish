<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:43
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/waterKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774203473571b26fbbcaa67-93602550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64f07efbd08a40a2b3c75a4916a14d2bcb46d36' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/waterKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774203473571b26fbbcaa67-93602550',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26fbc8cd17_89053256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26fbc8cd17_89053256')) {function content_571b26fbc8cd17_89053256($_smarty_tpl) {?><div class="alert alert-info text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-user-md fa-5x"></i><br/><strong>Wisdom to Heal</strong></h3>
	
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-primary active" type="button">
	             <i class="fa fa-user-md "></i>
	        </button>
	    </span>
	    <input id="swipe_key" type="email"
	           data-trigger="change" required="required" 
	           class="form-control"
	           name="key[email]" value="">
	    <span class="input-group-btn">
	        <button class="btn btn-warning" type="button" onclick="window.updateNexusServer(this);">
	            <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>Grants a user the ability to edit and moderate content.</p>

</div><?php }} ?>
