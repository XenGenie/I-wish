<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 23:36:19
         compiled from "/home/xopher/www/superdomx.com/x/crm/xLogin/earthKeys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1664048910574cb253124677-16569995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34c9a9a5ffc99e440f9f2d48d83f897233b7a7a3' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xLogin/earthKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664048910574cb253124677-16569995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cb2531f8233_84028398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb2531f8233_84028398')) {function content_574cb2531f8233_84028398($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="alert alert-success text-align-center">
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
	              <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>The Earth Key grants users the ability to manage space & upload large files</p>
</div><?php }} ?>
