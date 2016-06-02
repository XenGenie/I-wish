<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:34:29
         compiled from "/home/xopher/www/superdomx.com/x/X/xAccess/deny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1491406492571b25856fa691-09450424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ad5b491d714a9c42b6ee7b577347f62dc01e59' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/deny.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491406492571b25856fa691-09450424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'reason' => 0,
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b2585831365_10418903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b2585831365_10418903')) {function content_571b2585831365_10418903($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?><div id="deny-access" style="text-align: center;">
	<h2><i class="fa fa-lock fa-5x"></i></h2>
	<h1><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['request']->value,'/html','');?>
 Access Denied</h1>
	<h4 style="display: inline;"><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</h4><br/>
</div>
<script type="text/javascript"> 
	$(document).ready(function(){
		setTimeout(function(){
			// it's possible the front door may deny access, lets not loop them infinitely 
			var go = window.location.origin+window.location.pathname.replace('/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
','');	
			if(go !== window.location){
				window.location = go;
			}
		},1500);
	});
</script><?php }} ?>
