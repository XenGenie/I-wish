<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:35:42
         compiled from "x/html/frontdoor/portal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260645717565a809ea4b3b1-65037168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81515bd0868bc9eef752d1b5cbcb80919fdab3b' => 
    array (
      0 => 'x/html/frontdoor/portal.tpl',
      1 => 1448769399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260645717565a809ea4b3b1-65037168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBlox' => 0,
    'o' => 0,
    'masterKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a809ead6bf6_06808443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a809ead6bf6_06808443')) {function content_565a809ead6bf6_06808443($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_fetch')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.fetch.php';
?>	<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oBlox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
		<?php ob_start();?><?php echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['go'] = new Smarty_variable($_tmp1, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
			<div id="o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" icon="<?php echo $_smarty_tpl->tpl_vars['o']->value['icon'];?>
" blox="<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
" bloxid="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="blox-panel" style="display: none;" >
				<i class="fa fa-5x fa-spinner fa-spin"></i>
			</div> 
			<script type="text/javascript">
				$(document).ready(function() {
					$('#o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
').load('/html/<?php echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');?>
', function  () {
					});
					
					fadeInElements($('.blox-panel'), executeAfterFade);
				});
			</script>
		<?php } else { ?>
			 
			<?php ob_start();?><?php echo smarty_modifier_replace(lcfirst(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_fetch(array('file'=>"http://".((string)$_smarty_tpl->tpl_vars['HTTP_HOST']->value)."/html/".$_tmp2."/".((string)$_smarty_tpl->tpl_vars['o']->value['id'])),$_smarty_tpl);?>
 
		<?php }?>  
	<?php } ?> 

	<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
		<script type="text/javascript">
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

				<?php if (0==count($_smarty_tpl->tpl_vars['oBlox']->value)) {?>
					$('.godbar').css({
				    	top: 0
				    });
				<?php } else { ?>

				 fadeInElements($('.blox-panel'), executeAfterFade);	  
				<?php }?>

			});

		</script>
	<?php }?><?php }} ?>
