<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:40
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/earthKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148447169571b26f8e35781-96983918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb321f2d355291894ffebc6b79e43da6394c4f79' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/earthKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148447169571b26f8e35781-96983918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26f8eb9c21_49950752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26f8eb9c21_49950752')) {function content_571b26f8eb9c21_49950752($_smarty_tpl) {?><div class="alert alert-success text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-leaf fa-5x"></i><br/><strong>Strength to Grow</strong></h3>
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-success active" type="button">
	           <i class="fa fa-leaf "></i>
	        </button>
	    </span>
	    <input id="swipe_key" type="email"
	           data-trigger="change" required="required" 
	           class="form-control"
	           name="key[email]" value="">
	    <span class="input-group-btn">
	        <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
	              <i class="fa fa-warning "></i>
	        </button>
	    </span>
	</div>
    <p>Grant users the ability to manage space & upload large files</p>
</div><?php }} ?>
