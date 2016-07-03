<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:35:37
         compiled from "x/html/layout/frontdoor/entrance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1380822380565a8099d925d5-68388107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195962cf71f8f2b8d3d3cde1fa874aa86bedade5' => 
    array (
      0 => 'x/html/layout/frontdoor/entrance.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1380822380565a8099d925d5-68388107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Xtra' => 0,
    'method' => 0,
    'suite' => 0,
    'XTRA_METHOD' => 0,
    'HTML' => 0,
    'PORTAL' => 0,
    'google_analytics_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a8099dcae28_32660452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a8099dcae28_32660452')) {function content_565a8099dcae28_32660452($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<?php if ($_smarty_tpl->tpl_vars['Xtra']->value!=''&&$_smarty_tpl->tpl_vars['method']->value!=''&&($_smarty_tpl->tpl_vars['Xtra']->value!='index')) {?>
		<?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA_METHOD'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_tmp1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>
	 
		<?php $_smarty_tpl->createLocalArrayVariable('HTML', null, 0);
$_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] = $_smarty_tpl->tpl_vars['XTRA_METHOD']->value;?>
	<?php } elseif ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML']=='') {?>
		<?php $_smarty_tpl->tpl_vars['PORTAL'] = new Smarty_variable($_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

		<?php $_smarty_tpl->createLocalArrayVariable('HTML', null, 0);
$_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] = $_smarty_tpl->tpl_vars['PORTAL']->value;?>
	<?php }?>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['TITLE'];?>
</title>  
		<meta charset="utf-8">  
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
 
	 			
		
	</head>	
	<body  >
		<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'];?>


		


		<?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS']) {?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'];?>
"></script>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['google_analytics_id']->value) {?>
			<script>
				(function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				ga('create', '<?php echo $_smarty_tpl->tpl_vars['google_analytics_id']->value;?>
', 'auto');
				ga('send', 'pageview');
			</script>
		<?php }?>
	</body>
</html><?php }} ?>
