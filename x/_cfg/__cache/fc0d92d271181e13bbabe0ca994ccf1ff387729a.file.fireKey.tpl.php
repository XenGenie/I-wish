<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:46
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/fireKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:400925617571b26fea391d8-47633301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0d92d271181e13bbabe0ca994ccf1ff387729a' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/fireKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '400925617571b26fea391d8-47633301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26feac3e74_52622060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26feac3e74_52622060')) {function content_571b26feac3e74_52622060($_smarty_tpl) {?><div class="alert alert-danger text-align-center">
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
	        <button class="btn btn-warning" type="button" onclick="window.updateNexusServer(this);">
	             <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>Grants user the ability to delete content & ban users.</p>
</div>


<?php }} ?>
