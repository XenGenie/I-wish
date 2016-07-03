<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:25:09
         compiled from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:626290083565a7e25d2e5f9-57408778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f76f37b50d11303d0d3bc991aeb01e02d67b76' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/install.tpl',
      1 => 1448770367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626290083565a7e25d2e5f9-57408778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atBackDoor' => 0,
    'HTTP_HOST' => 0,
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a7e25d6dc87_85870903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a7e25d6dc87_85870903')) {function content_565a7e25d6dc87_85870903($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['atBackDoor']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("./x.install.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<style><!--
		.chat-bubble {
		  background-color: rgba(255,255,255,0.75);
		  border	: 2px solid rgba(255,255,255,0.75);
		  font-size	:35px;
		  line-height:1.3em;
		  padding	:10px; 
		  text-align:center;  
		  box-shadow: 0 0px 10px rgba(255,255,255,0.75); 
		  border-radius	: 300px 300px 25px 25px; 
		  display: none;
		  position:absolute;
		  margin-top: -50px; 
		  width: 450px;
		}
		.chat-bubble-arrow-border {
		  border-color: rgba(255,255,255,0.75) transparent transparent transparent;
		  border-style: solid;
		  border-width: 10px;
		  height:0;
		  width:0;
		  position:absolute;
		  bottom:-22px;
		  left:50%;
		}
		.chat-bubble-arrow {
		  border-color: rgba(255,255,255,0.75) transparent transparent transparent;
		  border-style: solid;
		  border-width: 10px;
		  height:0;
		  width:0;
		  position:absolute;
		  bottom:-19px;
		  left:50%;
		}
	
/* punch
*******************************************************************************/
		button.punch {
		  background: #33dd0b;
		  border-top: 1px solid #38538c;
		  border-right: 1px solid #1f2d4d;
		  border-bottom: 1px solid #151e33;
		  border-left: 1px solid #1f2d4d;
		  -moz-border-radius: 4px;
		  -webkit-border-radius: 4px;
		  border-radius: 100px;
		  -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  color: #fff;
		  font-family: "helvetica neue", helvetica, arial, sans-serif;
		  font-size: 20px;
		  font-weight: bold;
		  line-height: 1;
		  margin-bottom: 10px;
		  padding: 10px 10px 12px 10px;
		  text-align: center;
		  text-shadow: 0px -1px 1px #1e2d4d;
		  width: 75px;
		  height: 75px;
		  -webkit-background-clip: padding-box;
		}
		
		button.punch:hover {
		  -moz-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  -webkit-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		  cursor: pointer;
		}
		
		button.punch:active {
		  -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111;
		  -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111;
		  box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111;
		  margin-top: 13px;
		  
		}


	 	body	{
	 		background-color: #dee;
	 		
	 		background-image: linear-gradient(left bottom, rgb(46,119,203) 14%, rgb(74,155,244) 57%);
			background-image: -o-linear-gradient(left bottom, rgb(46,119,203) 14%, rgb(74,155,244) 57%);
			background-image: -moz-linear-gradient(left bottom, rgb(46,119,203) 14%, rgb(74,155,244) 57%);
			background-image: -webkit-linear-gradient(left bottom, rgb(46,119,203) 14%, rgb(74,155,244) 57%);
			background-image: -ms-linear-gradient(left bottom, rgb(46,119,203) 14%, rgb(74,155,244) 57%);
			
			background-image: -webkit-gradient(
				linear,
				left bottom,
				right top,
				color-stop(0.14, rgb(46,119,203)),
				color-stop(0.57, rgb(74,155,244))
			);



	 		
	 		color	: #FFF;
	 		text-shadow: 0 0px 10px rgba(255,255,255,0.75);
	 		font-family	: verdana;
			font-size	: 40px;
			font-weight	: bold;
		}
		
		.screen {
			background-color: transparent;
			position	: absolute;
			left		: 0px;
			right		: 0px;
			top			: 0px;
			bottom		: 0px;
			
		}	
	</style>
	<table width="500px" height="100%" class="screen"  align="center">
		<tr>
			<td align="center" valign="middle" style="position: relative;">
	 			<div class="chat-bubble" id="sdx-bubble">
				  <img src="/bin/images/logos/sdx.png"/> 
				  <div class="chat-bubble-arrow-border"></div>
				  <div class="chat-bubble-arrow"></div>
				</div>
				<?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>
 
				  <br/> <br/>
				<button class="punch" onmouseout="toggleBubble('none')" onmouseover="toggleBubble('block')" onclick="window.location = '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
'">
				Click
				</button>
			</td>
		</tr>
	</table>
	<script type="text/javascript"> 
		function toggleBubble(state){
			document.getElementById('sdx-bubble').style.display = state;
		}
	</script>
<?php }?><?php }} ?>
