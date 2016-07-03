<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:42:24
  from "/home/xopher/www/superdomx.com/x/html/frontdoor/portal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fc740a7cf75_77646482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d03e85d2f68a976aab64e3f723c13fde35ea499' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/frontdoor/portal.tpl',
      1 => 1448769399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fc740a7cf75_77646482 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_fetch')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.fetch.php';
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBlox']->value, 'o', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['o']->value) {
?>
		<?php ob_start();
echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('go', $_prefixVariable3);
?>
		<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
			<div id="o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" icon="<?php echo $_smarty_tpl->tpl_vars['o']->value['icon'];?>
" blox="<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
" bloxid="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="blox-panel" style="display: none;" >
				<i class="fa fa-5x fa-spinner fa-spin"></i>
			</div> 
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function() {
					$('#o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
').load('/html/<?php echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');?>
', function  () {
					});
					
					fadeInElements($('.blox-panel'), executeAfterFade);
				});
			<?php echo '</script'; ?>
>
		<?php } else { ?>
			 
			<?php ob_start();
echo smarty_modifier_replace(lcfirst(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');
$_prefixVariable4=ob_get_clean();
echo smarty_function_fetch(array('file'=>"http://".((string)$_smarty_tpl->tpl_vars['HTTP_HOST']->value)."/html/".$_prefixVariable4."/".((string)$_smarty_tpl->tpl_vars['o']->value['id'])),$_smarty_tpl);?>
 
		<?php }?>  
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

	<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
		<?php echo '<script'; ?>
 type="text/javascript">
			function executeAfterFade() {
			    //alert('Done!'); 
				setTimeout(function(){
					$('.godbar').css({
				    	top: 0
				    });
				},777); 
			}

			function fadeInElements(elementSelectors, lastFunction) {
			    $(elementSelectors[0]).hide().load('/html/'+$(elementSelectors[0]).attr('blox').slice(1).toLowerCase().replace('-','/')+'/'+$(elementSelectors[0]).attr('bloxid'),function (){
			    	$( ".inner" ).after( "<p>Test</p>" );
			        $(elementSelectors[0]).show(function  () {
			        	elementSelectors[1] ? 
			        	fadeInElements(elementSelectors.splice(1, elementSelectors.length - 1), lastFunction) : lastFunction(); 
			        }); 
			    });
			}

			$(document).ready(function() { 

				<?php if (0 == count($_smarty_tpl->tpl_vars['oBlox']->value)) {?>
					$('.godbar').css({
				    	top: 0
				    });
				<?php } else { ?>

				 fadeInElements($('.blox-panel'), executeAfterFade);	  
				<?php }?>

			});

		<?php echo '</script'; ?>
>
	<?php }
}
}
