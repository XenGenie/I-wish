<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:36:04
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/masterKeys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496934632574cb2442a1b08-90483106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e67ae1506f3addc7de02dc86b9d8ddb26534f0d' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/masterKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496934632574cb2442a1b08-90483106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb244436c34_89601577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb244436c34_89601577')) {function content_574cb244436c34_89601577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="alert alert-warning text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-key fa-5x"></i><br/><strong>Master Keys</strong></h3>
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-warning active" type="button">
	            <i class="fa fa-key "></i>
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
    <p>The Master Key Grants a User Power over the Whole Domain</p>
</div><?php }} ?>
