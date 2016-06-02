<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 04:50:48
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/windKeys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1500308719574e4d880952b1-91285029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '534fb9bf45fb21dd66448effdb1470af01aaf492' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/windKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1500308719574e4d880952b1-91285029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574e4d88123105_39318062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e4d88123105_39318062')) {function content_574e4d88123105_39318062($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="alert alert-default text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3>
    	<i class="fa fa-flag fa-5x"></i><br/><strong>Intellect to Know</strong>
    </h3>
    <div class="input-group">
        <span class="input-group-btn">
            <button class="btn btn-default active" type="button">
               <i class="fa fa-flag "></i>
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
    <p>
    	The Wind Key grants users the ability create & landmark pages.
    </p>
</div><?php }} ?>
