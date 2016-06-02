<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:42:29
  from "/home/xopher/www/superdomx.com/x/html/layout/frontdoor/entrance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fc74536d796_52327761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0472778f0333af317ab6d4b8a059b7ee5e6d6c24' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/frontdoor/entrance.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
  ),
),false)) {
function content_574fc74536d796_52327761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<?php if ($_smarty_tpl->tpl_vars['Xtra']->value != '' && $_smarty_tpl->tpl_vars['method']->value != '' && ($_smarty_tpl->tpl_vars['Xtra']->value != 'index')) {?>
		<?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('XTRA_METHOD', ob_get_clean());
?>
	 
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['HTML']) ? $_smarty_tpl->tpl_vars['HTML']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['BODY']['HTML'] = $_smarty_tpl->tpl_vars['XTRA_METHOD']->value;
$_smarty_tpl->_assignInScope('HTML', $_tmp_array);
?>
	<?php } elseif ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] == '') {?>
		<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('PORTAL', ob_get_clean());
?>

		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['HTML']) ? $_smarty_tpl->tpl_vars['HTML']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['BODY']['HTML'] = $_smarty_tpl->tpl_vars['PORTAL']->value;
$_smarty_tpl->_assignInScope('HTML', $_tmp_array);
?>
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
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'];?>
"><?php echo '</script'; ?>
>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['google_analytics_id']->value) {?>
			<?php echo '<script'; ?>
>
				(function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				ga('create', '<?php echo $_smarty_tpl->tpl_vars['google_analytics_id']->value;?>
', 'auto');
				ga('send', 'pageview');
			<?php echo '</script'; ?>
>
		<?php }?>
	</body>
</html><?php }
}
