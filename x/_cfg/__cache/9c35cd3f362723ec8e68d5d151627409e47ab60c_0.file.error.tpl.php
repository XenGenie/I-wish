<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:55:45
  from "/home/xopher/www/superdomx.com/x/X/xAccess/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fca618f9056_14265834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c35cd3f362723ec8e68d5d151627409e47ab60c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/error.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fca618f9056_14265834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-12">


		<div class=" shade-box error jumbotron" style="text-align: center;"> 
			<h1> 
				<i class="fa fa-ban fa-2x"></i><br/>
				<?php echo ucfirst($_smarty_tpl->tpl_vars['request']->value['action']);?>
 <?php echo $_smarty_tpl->tpl_vars['request']->value['method'];?>

			</h1>



			<button onclick="location = location" style="float: right;" value="Connect" class="punch">
		 		 <i class="fa fa-refresh fa-spin"></i>
			</button>

			<button onclick="history.back()" style="float: left" value="Connect" class="punch">
		 		 <i class="fa fa-arrow-left"></i>
			</button>
			

			<h3 class=" ">
				<?php echo $_smarty_tpl->tpl_vars['params']->value['error'];?>
 
			</h3>  
			
		</div>	
	</div>
</div>
<!-- <span class="btn btn-info btn-xs">powered by <br/><img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=15"/> </span> -->
 
	 

<style type="text/css">
	.error{
		border-radius: 10px
		color            : #efefef;
		text-shadow      : 0 1px 3px rgba(0,0,0,.5); 
		font-weight      : bold; 
		font-size        : 13px; 
		line-height      : 14px; 
		background-color : RED;
		border           : 1px solid DARKRED;
		box-shadow       : 0px 1px 5px black;
		padding          : 15px;
		margin           : 25px; 
		display:  inline-block;
		height           : auto;
		 position: relative;
		/*margin           : 25px;*/
		   display: inline-block;
		   vertical-align: middle;
	}

	.shade-box {
		
	}

	.error{
		color            : #efefef;
		text-shadow		: 0 1px 3px rgba(0,0,0,.5); 
		font-weight      : bold; 
		font-size        : 13px; 
		line-height      : 14px; 
		background-color : orange;
		border           : 1px solid DARKRED;
		box-shadow: 0px 1px 5px black;
		padding          : 10px;
		margin           : 25px; 
		/* The background is used to specify the border background */
		background             : -moz-linear-gradient(45deg, #f00, #ff0);
		background             : -webkit-linear-gradient(45deg, #f00, #ff0);
		/* Background origin is the padding box by default.
		Override to make the background cover the border as well. */
		-moz-background-origin : border;
		background-origin      : border-box;
		/* A transparent border determines the width */
		border                 : 1px dotted transparent;
		border-radius          : 5px;
		box-shadow             :
		0 0 5px rgba(0,0,0,.99),
		inset 0 0 15px rgba(255,255,255,.66), /* Inset shadow */
		0 0 15px rgba(255,255,255,.66), /* Outset shadow */
		inset -999px 0 0 rgba(0,0,0,.01); /* The background color */ 
	}


	.chat-bubble {
		  background-color : rgba(255,255,255,0.75);
			border           : 2px solid rgba(255,255,255,0.75);
			 display: none;
			padding          :10px; 
			text-align       : center;  
			box-shadow       : 0 0px 10px rgba(255,255,255,0.75); 
			border-radius    : 1000px 1000px 1000px 1000px;  
			position         : absolute;
			width            : 450px;
			 left: -15px;
			opacity: .88;
			bottom: 60px;
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


	button.punch {
		background              : #33dd0b;
		border-top              : 1px solid #38538c;
		border-right            : 1px solid #1f2d4d;
		border-bottom           : 1px solid #151e33;
		border-left             : 1px solid #1f2d4d;
		-moz-border-radius      : 4px;
		-webkit-border-radius   : 4px;
		border-radius           : 100px;
		-moz-box-shadow         : inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		-webkit-box-shadow      : inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		box-shadow              : inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111;
		color                   : #fff;
		font-family             : "helvetica neue", helvetica, arial, sans-serif;
		font-size               : 20px;
		font-weight             : bold;
		line-height             : 1;
		margin-bottom           : 10px;
		padding                 : 10px 10px 12px 10px;
		text-align              : center;
		text-shadow             : 0px -1px 1px #1e2d4d;
		width                   : 75px;
		height                  : 75px;
		-webkit-background-clip : padding-box;
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
	  margin-bottom: -11px;
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
 
	
</style> <?php }
}
