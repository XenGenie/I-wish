<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:25:14
         compiled from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/x.install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1865325105565a7e2a0c4429-07821392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219e1aca7bf6790c433cc7c8cca0ec4e743c6fa6' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/x.install.tpl',
      1 => 1448770367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865325105565a7e2a0c4429-07821392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'Xtra' => 0,
    'method' => 0,
    'ERROR' => 0,
    'DB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a7e2a1237f4_94249279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a7e2a1237f4_94249279')) {function content_565a7e2a1237f4_94249279($_smarty_tpl) {?>
<style>
	.chat-bubble {
		  background-color: rgba(255,255,255,0.75);
		  border	: 2px solid rgba(255,255,255,0.75);
		  font-size	:35px;
		  line-height:1.3em;
		  padding	:10px; 
		  text-align:center;  
		  box-shadow: 0 0px 10px rgba(255,255,255,0.75); 
		  border-radius	: 300px 300px 25px 25px; 
		  
		  position:relative;
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
		  left:48%;
		}
		.chat-bubble-arrow {
		  border-color: rgba(255,255,255,0.75) transparent transparent transparent;
		  border-style: solid;
		  border-width: 10px;
		  height:0;
		  width:0;
		  position:absolute;
		  bottom:-19px;
		  left:48%;
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
	  margin-top: 11px;
	}

button.punch {
		  background: #4162a8;
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
  margin-top: 11px;
}

 	body	{
 		font-family: arial;

 		background-color: #dee;
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
 		color	: #fff; 
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
	li{
		font-weight: bold;
		font-size: large; 
		text-align: right;
		padding	: 25px 0 0 0; 
	}
	
	p{
		font-size: 10px;
	}
	 
	input, select{
		font-size: 12px;
		text-align: left;
		float	: right; 
		margin: 0px 50px 0px 10px ;
		width: 16	5px;
		background-color: #efefef;
		color: black;
		border: 1px solid #444;
		padding: 2px ;
		border-radius: 5px;
		text-align: right;
	}
	
	.database label{
		text-align: right;
		border: 1px outset  rgba(150,150,150,0.8) ;
		width: 95%; 
		/*margin: 2px 20px 0px 20px;*/
		padding-top: 10px;
		height: 35px;
		display: block;
		vertical-align: middle; 
		color: #222;
		font-family: Arial;  
		font-size: 14px;
		
		vertical-align: middle;
		box-shadow: 0px 5px 15px rgba(0,0,0,0.5);
		background: rgb(116,116,116); /* Old browsers */
		background: -moz-linear-gradient(left, rgb(116,116,116) 0%, rgb(148,148,148) 3%, rgb(222,222,222) 15%, rgb(201,201,201) 25%, rgb(222,222,222) 33%, rgb(248,248,248) 43%, rgb(255,255,255) 51%, rgb(248,248,248) 58%, rgb(255,255,255) 64%, rgb(222,222,222) 74%, rgb(222,222,222) 88%, rgb(137,137,137) 95%, rgb(116,116,116) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgb(116,116,116)), color-stop(3%,rgb(148,148,148)), color-stop(15%,rgb(222,222,222)), color-stop(25%,rgb(201,201,201)), color-stop(33%,rgb(222,222,222)), color-stop(43%,rgb(248,248,248)), color-stop(51%,rgb(255,255,255)), color-stop(58%,rgb(248,248,248)), color-stop(64%,rgb(255,255,255)), color-stop(74%,rgb(222,222,222)), color-stop(88%,rgb(222,222,222)), color-stop(95%,rgb(137,137,137)), color-stop(100%,rgb(116,116,116))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(left, rgb(116,116,116) 0%,rgb(148,148,148) 3%,rgb(222,222,222) 15%,rgb(201,201,201) 25%,rgb(222,222,222) 33%,rgb(248,248,248) 43%,rgb(255,255,255) 51%,rgb(248,248,248) 58%,rgb(255,255,255) 64%,rgb(222,222,222) 74%,rgb(222,222,222) 88%,rgb(137,137,137) 95%,rgb(116,116,116) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(left, rgb(116,116,116) 0%,rgb(148,148,148) 3%,rgb(222,222,222) 15%,rgb(201,201,201) 25%,rgb(222,222,222) 33%,rgb(248,248,248) 43%,rgb(255,255,255) 51%,rgb(248,248,248) 58%,rgb(255,255,255) 64%,rgb(222,222,222) 74%,rgb(222,222,222) 88%,rgb(137,137,137) 95%,rgb(116,116,116) 100%); /* Opera11.10+ */
		background: -ms-linear-gradient(left, rgb(116,116,116) 0%,rgb(148,148,148) 3%,rgb(222,222,222) 15%,rgb(201,201,201) 25%,rgb(222,222,222) 33%,rgb(248,248,248) 43%,rgb(255,255,255) 51%,rgb(248,248,248) 58%,rgb(255,255,255) 64%,rgb(222,222,222) 74%,rgb(222,222,222) 88%,rgb(137,137,137) 95%,rgb(116,116,116) 100%); /* IE10+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#747474', endColorstr='#747474',GradientType=1 ); /* IE6-9 */
		background: linear-gradient(left, rgb(116,116,116) 0%,rgb(148,148,148) 3%,rgb(222,222,222) 15%,rgb(201,201,201) 25%,rgb(222,222,222) 33%,rgb(248,248,248) 43%,rgb(255,255,255) 51%,rgb(248,248,248) 58%,rgb(255,255,255) 64%,rgb(222,222,222) 74%,rgb(222,222,222) 88%,rgb(137,137,137) 95%,rgb(116,116,116) 100%); /* W3C */
	}
	#setup-steps{
			box-shadow	: -1px 1px 0px rgba(55,55,55,0.05);
			border		: 1px solid #eee;
			 border-top: 0;
			font-size	: small;
			font-family	: verdana;
			border-radius	: 2px; 
			color	: white;
			position	: fixed;
			top	: 45%;
			text-shadow: 0px 0px 3px rgba(255,255,255,.25);
			left: -5px; 
			width	: 200px;
			height	:150px;
		 background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* IE10+ */
background: linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.	gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
		  
		}
		#setup-steps legend{
			font-weight: bold;
		}
		#setup-steps li{
			padding	: 5px;
			color	: rgba(255,255,255,.75);
			font-size	: x-small; 
		}
	
</style> 
<form action="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" method="post" name="connect">
	 
	<table width="100%" align="center" height="100%"  class="screen">
		<tr>
			<td align="center" valign="top " style="padding-top: 5px;" > 
				<div class="chat-bubble" id="sdx-bubble">
				<img src="/bin/images/logos/sdx.png"/> 
				  <div class="chat-bubble-arrow-border"></div>
				  <div class="chat-bubble-arrow"></div>
				</div>
	<br/>			
				<?php if ($_smarty_tpl->tpl_vars['ERROR']->value['msg']) {?>
					<style type="text/css">
						.error{
							color            : Pink; 
							font-weight      : bold; 
							font-size        : 13px; 
							line-height      : 14px; 
							background-color : RED;
							border           : 1px solid DARKRED;
							box-shadow: 0px 1px 5px black;
							padding          : 10px;
							margin           : 25px;
						}
					</style>
					<span class="error"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value['msg'];?>
</span>

					<br/>
				<?php }?>
<br/>
				<div class="database" align="center" style="width: 350px">
					<label style="border-radius:  500px  500px 0 0 ">
						Database <select>
							<option>MySQL</option>
						</select>
					</label> 
					
					<label <?php if ($_smarty_tpl->tpl_vars['ERROR']->value['no']==2005) {?>style="border-color: red;color: red" autofocus<?php }?>>
						Host<input type="text" name="DB[host]" value="<?php echo $_smarty_tpl->tpl_vars['DB']->value['host'];?>
" />	
					</label> 
					<label <?php if ($_smarty_tpl->tpl_vars['ERROR']->value['no']==1044) {?>style="border-color: red;color: red" autofocus onload="this.select();"<?php }?>>
						 <input type="text" name="DB[user]" value="<?php echo $_smarty_tpl->tpl_vars['DB']->value['user'];?>
" /> Username
					</label>
					<label <?php if ($_smarty_tpl->tpl_vars['ERROR']->value['no']==1044) {?>style="border-color: red;color: red"<?php }?>>
						Password <input type="password" name="DB[pass]" value="" />	
					</label>
					<label <?php if ($_smarty_tpl->tpl_vars['ERROR']->value['no']==1049) {?>style="border-color: red; color: red" autofocus<?php }?>>
						Database <input type="text" name="DB[database]" value="<?php echo $_smarty_tpl->tpl_vars['DB']->value['database'];?>
"  />
					</label>
					<label style="border-radius: 0 0 500px  500px">
						Prefix <input type="text" name="DB[prefix]" value="<?php if ($_smarty_tpl->tpl_vars['DB']->value['prefix']) {?><?php echo $_smarty_tpl->tpl_vars['DB']->value['prefix'];?>
<?php } else { ?><?php }?>"  />
					</label> 
				</div>
					<br/>
				<button onclick="document.connect.submit()" value="Connect" class="punch">
			 		 Install
				</button> 
			</td>
		</tr>
	</table>  
</form><?php }} ?>
