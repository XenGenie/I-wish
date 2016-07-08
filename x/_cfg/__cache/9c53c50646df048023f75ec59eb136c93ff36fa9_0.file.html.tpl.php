<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 05:56:43
  from "/home/xopher/www/superdomx.com/x/X/xBlox/html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f247b462913_00781955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c53c50646df048023f75ec59eb136c93ff36fa9' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlox/html.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~blox/clock.tpl' => 1,
    'file:../../html/templates/cfg.tinymce.templates.json' => 1,
  ),
),false)) {
function content_577f247b462913_00781955 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>  
<div class="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
"> 
	<!--                     
             77                       77777             
        7 .....                      7.....             
       7........                     ........           
       ...,+++..77   7..........7  7...+++....7         
      ....++++...7 ......:~~...........+++=....7        
     7...~~+++......~~~~~~~~~~~~~......+++~=....        
     7...~~++++..=~~~~~~===~~~~~~~~~..?+++~~~...        
      ...~~~++~~~+++++++++++++++++=~~~~++~~~~...        
      =...~~~~~~++++++++++++++77+++++~~~~~~~...         
        ....~~~++++++++++++++7777+++++~~~~....          
         .....~?++,+++++++++++77?+?++++~.....           
         7....~~+..+++++++++++++++..+++...=7            
         ...~~~=?...++++++++++++....+++~~...            
        ...=~~+++......+++++++.....~+++~~...7           
       7...~~=++++......+++++......++++~~...7           
        ...,~~?++++.....+++++.....++++~~~...            
         ...,~~~~~+++++++++++++++++?~~~~...7            
         7.....~~~~~~~+++++++++~~~~~~~:...=             
           7......~~~~~+++++++~~~~,......7              
            7 .......~~~~++?~~~.......  7               
                  ....~~~~~?++...7                      
                   ....~~~~+++..                        
                   7...~~~+++....                       
                    ...~~~+++?........                   
                    ...=~~++++777++....7                
                    ...~~~++++777+++...                 
                    ...=~~=+++~~~~~~...7                
                    ...~~~=++=~~~~~...                  
                    ...~~~++++........7                 
                    :...~~+++.......                    																										
                    7..........                         
                        .....: 7    
	-->
	<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:~blox/clock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('clock', ob_get_clean());
?>
 
	
	<div class="front">
		<menu class="" style="  z-index: 1; position: fixed;">
			<div class="btn-group">
				<!-- <div class="btn btn-default active btn-lg">
					<i class="fa fa-cube fa-spin"> </i>
				</div> -->

				<div class="btn btn-default active disabled btn-lg">
					<span class="fa fa-spin-reverse">
						<i class="fa fa-gear fa-spin-reverse"></i><i class="fa fa-gear fa-spin-slow"></i>  
				</div>
				<div class="btn btn-info btn-lg" onclick="window.tinyMesh(this)"> 
					   <i class="fa fa-coffee"> </i> 
				</div>

				<div class="btn btn-success btn-lg action">
					
					
					<i class="fa fa-html5"> </i>
					<i class="fa fa-css3"> </i> 
					<i class="fa fa-code"> </i>  
				</div>	
			</div>
			
			<!-- <i class="fa fa-"> </i> -->
<!-- 
			<i class="fa fa-forward"> </i>
			<i class="fa fa-fast-forward"> </i>
			<i class="fa fa-eject"> </i>
			<i class="fa fa-circle"> </i> -->
		 </menu>
	
		<div id="mesh-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
" class="content"> 
			<div class="tinymce_editor" id="mesh-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-html-edtior">
			<?php }?>
			
				<?php echo $_smarty_tpl->tpl_vars['blox_cfg']->value['html'];?>

			
			<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
				</div>
			<?php }?>
			
			<style type="text/css">
				<?php echo $_smarty_tpl->tpl_vars['blox_cfg']->value['css'];?>

			</style>

			<?php echo '<script'; ?>
 type="text/javascript">
				<?php echo $_smarty_tpl->tpl_vars['blox_cfg']->value['js'];?>

			<?php echo '</script'; ?>
> 
	<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
		</div>
	</div>
 
 	
 	<?php echo '<script'; ?>
 src="/bin/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

	<div class="back" style="overflow: hidden;">
		<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top navbar-inverse" style="z-index: 99;"  role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
					</div>
					<div class="navbar-collapse collapse text-center "> 
						<ul class="nav navbar-nav navbar-left">  
							<li class="active">
								<a class="text-success text-center">
								<span class="label label-warning"> 	<i class="fa fa-4x fa-cube fa-spin"></i> <!--  God Mode  --> </span>
								</a>
							</li>
							<li>
								<a class="edit-submit " style="cursor: pointer">
								<span class="label label-success"> <i class="fa fa-globe fa-4x "></i> <!-- Public Mode --> </span>
								</a>
							</li>
						</ul> 
					


						<div class="btn-group" style="margin-top: 5px;">
						<!-- 	<li class="dropdown" ><a href="/x/" class="text text-danger dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=123">
						<strong class=" text text-success">Super</strong><span class="text-primary">Dom</span> 
						<i class="fa fa-caret-down text-info"></i> 
						</a>

						</li> -->

						 <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timestamps']->value, 'stamp', false, 'time');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['stamp']->value) {
?>
	                             	<li role="presentation">
		                                <a href="#" onclick="window.meshTimeLoad('<?php echo $_smarty_tpl->tpl_vars['stamp']->value['cfg_timestamp'];?>
')" class="message">
		                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['stamp']->value['cfg_timestamp'],"%B, %a %e, %I:%M:(%S) %p");?>

		                                </a> 
		                            </li>
	                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 -->
	                     

	                    

						<button type="submit" class="btn btn-success btn-lg active" value="">
	                    	<i class="fa fa-play"></i>
						</button> 

						<button class="btn btn-info btn-lg" id="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-fast-backward" onclick="window.meshette.loadTrack('<?php echo $_smarty_tpl->tpl_vars['tracks']->value['first'];?>
')" >
							<i class="fa fa-fast-backward"></i> 
						</button>

						<button class="btn btn-info btn-lg" id="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-backward" onclick="window.meshette.backward();"  >
							<i class="fa fa-backward"></i> 
						</button>
						
	                    
						 <div class="btn-group">
						 	<a  href="#" title="Messages" class="btn btn-default btn-lg" id ="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-track" data-toggle="dropdown" >
								<i class="fa fa-gear fa-spin"></i> 
								<?php echo $_smarty_tpl->tpl_vars['clock']->value;?>

								<i class="fa fa-gear fa-spin-reverse"></i>
					        </a>

	                        <ul class="dropdown-menu versions" role="menu">
	                        	<li class="dropdown-header"> <i class="fa fa-backward"></i>
	                        	Version History <i class="fa fa-code"></i></li>
	                        	<li class="divider"></li>
	                        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versions']->value, 'months', false, 'year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['year']->value => $_smarty_tpl->tpl_vars['months']->value) {
?>
	                             	<?php if ($_smarty_tpl->tpl_vars['year']->value != '') {?>
	                             		<li class="dropdown-leftsubmenu" >
			                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
			                                <i class="fa fa-calendar-o"></i> <?php echo $_smarty_tpl->tpl_vars['year']->value;?>

			                                </a> 
			                                <ul class="dropdown-menu">
		                                    	<li class="dropdown-header"> <i class="fa fa-calendar-o"></i>
                        						Year <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <i class="fa fa-moon-o"></i></li>
                        						<li class="divider"></li>
			                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'days', false, 'month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['month']->value => $_smarty_tpl->tpl_vars['days']->value) {
?> 
					                             	<?php if ($_smarty_tpl->tpl_vars['month']->value != '') {?> 
						                             	<li class="dropdown-leftsubmenu">
							                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
							                                <i class="fa fa-moon-o"></i> <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 
							                                </a> 
							                                <ul class="dropdown-menu">
							                                <li class="dropdown-header"> <i class="fa fa-moon-o"></i>
			                        						Month of <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <i class="fa fa-sun-o"></i></li>
			                        						<li class="divider"></li>
						                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'hours', false, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value => $_smarty_tpl->tpl_vars['hours']->value) {
?>
								                             	<li class="dropdown-leftsubmenu">
									                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" > 
									                                <i class="fa fa-sun-o"></i>    <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 
									                                </a> 
									                                <ul  class="dropdown-menu">
									                                	<li class="dropdown-header"> <i class="fa fa-sun-o"></i>
						                        						<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 <i class="fa fa-clock-o"></i></li>
						                        						<li class="divider"></li>
								                                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hours']->value, 'mintues', false, 'hour');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hour']->value => $_smarty_tpl->tpl_vars['mintues']->value) {
?>

								                                    		 <?php if ($_smarty_tpl->tpl_vars['hour']->value > 11) {?>
											                                 	<?php $_smarty_tpl->_assignInScope('rotate', "90");
?>
											                                 <?php } elseif ($_smarty_tpl->tpl_vars['hour']->value > 8) {?>
											                                 	<?php $_smarty_tpl->_assignInScope('rotate', "45");
?>
											                                 <?php } elseif ($_smarty_tpl->tpl_vars['hour']->value > 5) {?>
											                                 	<?php $_smarty_tpl->_assignInScope('rotate', "270");
?>
											                                 <?php } elseif ($_smarty_tpl->tpl_vars['hour']->value > 2) {?>
											                                 	<?php $_smarty_tpl->_assignInScope('rotate', "180");
?>
											                                 <?php }?>

										                             	<li class="dropdown-leftsubmenu" role="presentation">
											                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
											                                 <i class="fa fa-clock-o fa-rotate-<?php echo $_smarty_tpl->tpl_vars['rotate']->value;?>
"></i> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['hour']->value,'_',"'oClock");?>
 
											                                    
											                                </a> 
											                                <ul  class="dropdown-menu">
											                                	<li class="dropdown-header"> <i class="fa fa-clock-o fa-rotate-<?php echo $_smarty_tpl->tpl_vars['rotate']->value;?>
"></i>
			                        						  					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['hour']->value,'_',": 00");?>

			                        						  					<i class="fa fa-bookmark-o"></i></li>
										                                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mintues']->value, 'seconds', false, 'min');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['min']->value => $_smarty_tpl->tpl_vars['seconds']->value) {
?>
												                             	<li class="dropdown-leftsubmenu" >
													                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
													                                 <i class="fa fa-bookmark-o"></i>  <?php echo $_smarty_tpl->tpl_vars['min']->value;?>
 
													                                </a> 
													                                <ul class="dropdown-menu">
													                                	<li class="dropdown-header"> <i class="fa fa-bookmark-o"></i>
					                        						  					<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
 
					                        						  					<i class="fa fa-history fa-rotate-<?php echo $_smarty_tpl->tpl_vars['rotate']->value;?>
"></i></li>
												                                   		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seconds']->value, 'v', false, 'sec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sec']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
															                             	<li >
																                                <a href="#" onclick="window.meshette.loadTrack('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
');"  >
																                                     <i class="fa fa-crosshairs fa-spin-reverse"></i>
																                                    <?php echo $_smarty_tpl->tpl_vars['sec']->value;?>

																                                </a> 
																                            </li>
														                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												                                   	</ul>
													                            </li>
												                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										                                    </ul>
											                            </li>
										                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								                                    </ul>
									                            </li>
								                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								                            </ul>
							                            </li>
					                             	<?php }?>
					                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				                            </ul>
			                            </li>
	                             	<?php }?>
	                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
	                        </ul>
	                    </div>

						<button class="btn btn-info btn-lg active disabled" id="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-fast-forward" onclick="window.meshette.forward();" >
							<i class="fa fa-forward"></i> 
						</button> 

						<button class="btn btn-info btn-lg active disabled" id="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-forward" onclick="window.meshette.loadTrack('<?php echo $_smarty_tpl->tpl_vars['tracks']->value['last'];?>
')">
							<i class="fa fa-fast-forward"></i> 
						</button> 
	                    
						


				        
						
						 
						<!-- <button class="btn btn-warning  "><i class="fa fa-image "> Image</i></button>
						<button class="btn btn-warning  "><i class="fa fa-paragraph "> Paragraph</i></button>
						<button class="btn btn-warning  "><i class="fa fa-html5 "></i></button>
						<button class="btn btn-warning  "><i class="fa fa-html5 "></i></button>
						<button class="btn btn-warning  "><i class="fa fa-html5 "></i></button> -->
						
				        
						
						
	                     
						
						
						<button class="btn btn-warning btn-lg " onclick="window.meshReset();">
							<i class="fa fa-eject "></i> 
						</button>

						<button class="btn btn-danger btn-lg edit-submit " >
							     <i class="fa fa-circle "></i>  
						</button>
						

			          </div>

			          <div class="nav navbar-nav navbar-right btn-group blox-bar-btns" style="margin-top: 5px;">

							<!-- <a class="btn btn-primary btn-lg"  onclick="bloxSwitch(false);"><i class="fa fa-user-md"></i></a> -->
							<a class="btn btn-primary btn-lg"  onclick="bloxSwitch(false);"><i class="fa fa-medkit"></i></a>
							
							<!-- <a class="btn btn-success active disabled btn-lg" onclick="bloxSwitch(true);"><i class="fa fa-eye"></i></a> -->
				          	<div class="btn-group ">
		                        <a href="#" title="Messages" id="messages" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
		                            <i class="fa fa-user-md "></i> <span class="count badge">80%</span>
		                        </a>
		                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
		                        	<li class="dropdown-header"> <i class="fa fa-cube"></i> Blox Stats <i class="fa fa-bar-chart-o"></i></li>
		                        	<li class="divider"></li>
		                            <li role="presentation">
		                                <a href="#" class="message">
		                                    <div class="row">
		                                    	<table width="100%">
		                                    		<tr>
		                                    			<td>
		                                    				
		                                    				<div class="progress"> 
										                       <div class="pull-left progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
										                            90% HP
										                       </div>  
										                    </div>

		                                    			</td>
		                                    			<td width="16px"> 
			                                    	 		<i class="fa   fa-heart"></i>
		                                    			</td>
		                                    		</tr>
		                                    	</table> 
		                                    </div>
		                                </a>
		                            </li>
		                            <li role="presentation">
		                                <a href="#" class="message">
		                                    <div class="row">
			                                    <table width="100%">
		                                    		<tr>
		                                    			<td>
		                                    				
		                                    				<div  >
						                                        <div class="progress"> 
											                       <div class="pull-left progress-bar progress-bar-striped progress-bar-info active " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											                            60% EP 
											                       </div>  
											                    </div>
						                                    </div>

		                                    			</td>
		                                    			<td width="16px"> 
			                                    	 		<i class="fa   fa-envelope"></i>
		                                    			</td>
		                                    		</tr>
		                                    	</table> 
		                                    </div>
		                                </a>
		                            </li>
		                            <li role="presentation">
		                                <a href="#" class="message">
		                                    <div class="row">
			                                    <table width="100%">
		                                    		<tr>
		                                    			<td>
		                                    				
		                                    				<div  >
						                                        <div class="progress"> 
											                       <div class="pull-left progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
											                             97% MP  
											                       </div>  
											                    </div>
						                                    </div>

		                                    			</td>
		                                    			<td width="16px"> 
			                                    	 		<i class="fa   fa-magic"></i>
		                                    			</td>
		                                    		</tr>
		                                    	</table> 
	                                    	</div> 
		                                    
		                                </a>
		                            </li>
		                            <li role="presentation">
		                                <a href="#" class="message">
		                                    <div class="row">
			                                    <table width="100%">
		                                    		<tr>
		                                    			<td>
		                                    				
		                                    				<div  >
						                                        <div class="progress"> 
											                       <div class="pull-left progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											                            60% SP
											                       </div>  
											                    </div>
						                                    </div>

		                                    			</td>
		                                    			<td width="16px"> 
			                                    	 		<i class="fa   fa-star"></i>
		                                    			</td>
		                                    		</tr>
		                                    	</table>  
	                                    	</div>
		                                    
		                                </a>
		                            </li>
		                            <li role="presentation">
		                                <a href="/x/analytics" class="text-align-center see-all">
		                                     <i class="fa fa-stethoscope"></i> See all Vitals <i class="fa fa-arrow-right"></i>
		                                </a>
		                            </li>
		                        </ul>
		                    </div>
			          </div>

			           
				</div><!--/.nav-collapse -->
			</div> 
		</div>  
		<iframe id="mesh-code-editor" width="100%" height="100%" border="0" style="border: 0; overflow: hidden;" src="about:blank" > 
		</iframe> 
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
	  // set up block configuration
	    $('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .action').click(function(){ 

	    	$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').addClass('flip');
	      	$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .back div:first-child.navbar').addClass('godbar');

	      	$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').parent().addClass('fullscreen-me');

	      	$('#mesh-code-editor').on('load', window.meshOnLoad);

			$('#mesh-code-editor').attr({
					src : '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lib_core']->value;?>
/mesh/index.html'
			});


	    });



	    window.meshette = {
	    	trac_num : [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timestamps']->value, 'c', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>'<?php echo $_smarty_tpl->tpl_vars['c']->value['cfg_timestamp'];?>
',<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
],
	    	tracks : {
	    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timestamps']->value, 'c', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>'<?php echo $_smarty_tpl->tpl_vars['c']->value['cfg_timestamp'];?>
' : <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
,<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    	}, 
	    	first : '<?php echo $_smarty_tpl->tpl_vars['tracks']->value['first'];?>
',
	    	last : '<?php echo $_smarty_tpl->tpl_vars['tracks']->value['last'];?>
',
	    	//timestamps : <?php echo $_smarty_tpl->tpl_vars['timestamps']->value;?>
,
	    	loadTrack : function(time) {
	    		this.playing = this.tracks[time];
	     		// alert(time);
		    	$.ajax({
		    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/"+ time+ "/.json",
		    		type     : "GET",	 
					dataType : "json",
				    success: function(data){ 
				    	DATA = data;
						if(data.success){
							console.log("Loaded "+ time + " | Track #:"+ window.meshette.playing);
							var i = $('#mesh-code-editor')[0].contentWindow;
					    	var html   =	i.htmlBox.setValue(data.html);
					    	var css    =	i.cssBox.setValue(data.css);
					    	var js     =	i.jsBox.setValue(data.js);
						}else{
							alert(data.error);
						}
				    }
		    	});

		    	var b = '#<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-';

		    	var btn = {
					ff : $(b+'fast-forward'), 
					fb : $(b+'fast-backward'),
					f  : $(b+ 'forward'),
					b  : $(b+'backward'),
					p : $(b+'track'),
					on : function (btn) {
						// body...
						btn.removeClass('disabled');
						btn.removeClass('active');
					},
					off : function(btn){
						btn.addClass('disabled');
						btn.addClass('active');
					}
		    	}

		    	clock.setClock(time);

		    	switch(this.playing){
		    		case(this.tracks[this.first]):
		    			btn.off(btn.fb);
		    			btn.off(btn.b);
		    			btn.on(btn.ff);
		    			btn.on(btn.f);
		    		break;
		    		case(this.tracks[this.last]):
		    			btn.on(btn.fb);
		    			btn.on(btn.b);
		    			btn.off(btn.ff);
		    			btn.off(btn.f);
		    		break;
		    		default: 
		    			btn.on(btn.fb);
		    			btn.on(btn.b);
		    			btn.on(btn.ff);
		    			btn.on(btn.f);
		    		break;
		    	}
		    },
		    playing : 0,
	    	backward : function  () { 
	    		this.playing++; 
	    		if(this.playing <= (this.trac_num.length-1) ){ 
	    			this.loadTrack(this.trac_num[this.playing]); 
	    		} 
	    	},
	    	forward : function  () {
	    		this.playing--; 
	    		if(this.playing >= 0 ){ 
	    			this.loadTrack(this.trac_num[this.playing]); 
	    		}
	    	},
	    	eject : function () { 
		    	$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').removeClass('flip');
				$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').parent().removeClass('fullscreen-me');  

	    		$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .back div:first-child.navbar').removeClass('godbar');
				
				$('#mesh-code-editor').attr({
			      		src : 'about:blank'
			    });
	    	}

	    };

	    window.meshReset = function  () {
	    	$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').removeClass('flip');
			$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').parent().removeClass('fullscreen-me');  
	    }

	    window.meshOnLoad = function  () {
	    	$.ajax({
	    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
	    		type     : "GET",	 
				dataType : "json",
			    success: function(data){ 
					if(data.success){
						console.log("Init Load");
						var i = $('#mesh-code-editor')[0].contentWindow;
				    	var html   =	i.htmlBox.setValue(data.html);
				    	var css    =	i.cssBox.setValue(data.css);
				    	var js     =	i.jsBox.setValue(data.js);
					}else{
						alert(data.error);
					}
			    }
	    	}); 
	    }

	     window.meshTimeLoad = function  (time) {
	     		// alert(time);
	    	$.ajax({
	    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/"+ time+ "/.json",
	    		type     : "GET",	 
				dataType : "json",
			    success: function(data){ 
			    	DATA = data;
					if(data.success){
						console.log("Loaded");
						var i = $('#mesh-code-editor')[0].contentWindow;
				    	var html   =	i.htmlBox.setValue(data.html);
				    	var css    =	i.cssBox.setValue(data.css);
				    	var js     =	i.jsBox.setValue(data.js);
					}else{
						alert(data.error);
					}
			    }
	    	}); 
	    }

	    // BackPanel
	    $('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .edit-submit').click(function(e){  

	    	
	    	var content = $('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .front .content'); 
	    	var editor = tinyMCE.get('mesh-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-html-edtior');


	    	var i = $('#mesh-code-editor')[0].contentWindow;
	    	var html   =	i.htmlBox.getValue();
	    	var css    =	i.cssBox.getValue();
	    	var js     =	i.jsBox.getValue();

	    	var s = document.createElement('script');
	    	s.innerHTML = js;

	    	var c = document.createElement('style');
	    	c.innerHTML = css;

			//content.html(html);

			editor.setContent(html);

			$('.html-blox-4 .front .content style').remove();
			$('.html-blox-4 .front .content script').remove();

			content.append(c);
			content.append(s);

			$("head").append("<style type='text/css'>"+css+"</style>");

			
			$.ajax({
	    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/save/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
	    		type     : "POST",	
				data     : {
					blox : {
						js : {
							quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
							cfg_option : 'js-source',
							cfg_params : js
						},
						css : {
							quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
							cfg_option : 'css-source',
							cfg_params : css
						},
						html : {
							quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
							cfg_option : 'html-source',
							cfg_params : html
						}
					} 
				},
				dataType : "json",
			    success: function(data){ 
					if(data.success){
						console.log("Saved");
						$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').removeClass('flip');
						$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').parent().removeClass('fullscreen-me');  
	    				$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .back div:first-child.navbar').removeClass('godbar');
					}else{
						alert(data.error);
					}
			    }
	    	}); 

	      	e.preventDefault();
	    });
	<?php echo '</script'; ?>
>
	

	<style type="text/css"> 
		.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 {  
			width               : 100%;
			height              : 100%;
			min-width           : 100px;
			min-height          : 100px;
			margin              : 0;
			position          : relative;

			left                : 0;
			top                 : 0;
			font-size           : .8em;
			border              : 0 !important; 
			-webkit-perspective : 600px;
			-moz-perspective    : 600px;
			perspective         : 600px;
	 
	  }
		.fullscreen-me {  		
			z-index  : 9999999999;
			position : absolute;
			width    : 100%;
			height   : 100%;
			margin   : 0;
			padding  : 0;
			top: 0;
			left: 0;
	  }

	  /* -- make sure to declare a default for every property that you want animated -- */
	  /* -- general styles, including Y axis rotation -- */
	.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .front menu:first-child{
		position           : fixed !important;
		top                : -55px;  
		left               : 0px;
		/* -- transition is the magic sauce for animation -- */
		-webkit-transition : all .3s linear;
		transition         : all .3s linear;
	}

	.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .front:hover menu:first-child{
		top: 20px;
		left: 0px;
	}

	.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .front { 
		overflow: hidden;
		float                       : none;
		position                    : absolute;
		top                         : 0;
		left                        : 0;
		z-index                     : 900;
		width                       : inherit;
		height                      : auto;
		/*border                      : 0px solid #ccc;*/
		/*background                  : #6b7077;*/
		/*text-align                  : center;*/
		/*padding-top: 50px;*/
		/*box-shadow                : 0 1px 5px rgba(0,0,0,0.9);*/

		-webkit-transform           : rotateX(0deg) rotateY(0deg);
		-moz-transform              : rotateX(0deg) rotateY(0deg);
		transform                   : rotateX(0deg) rotateY(0deg);

		-webkit-transform-style     : preserve-3d;
		-moz-transform-style        : preserve-3d;
		transform-style             : preserve-3d;

		-webkit-backface-visibility : hidden;
		-moz-backface-visibility    : hidden;
		backface-visibility         : hidden;

		/* -- transition is the magic sauce for animation -- */
		-webkit-transition          : all .4s ease-in-out;
		transition                  : all .4s ease-in-out;
	  }
	  .<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
.flip .front { 
		z-index           : 900;
		border-color      : #eee;
		background        : #333;
		/*box-shadow      : 0 15px 50px rgba(0,0,0,0.2);*/
		
		-webkit-transform : rotateY(180deg);
		-moz-transform    : rotateY(180deg);
		transform         : rotateY(180deg);
	  }

		.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
 .back { 
			float                       : none;
			position                    : absolute;
			top                         : 0;
			left                        : 0;
			z-index                     : 800;
			width                       : 100%;
			height                      : 100%; 
			/*background                : #333;*/ 
			
				padding-top: 55px;
			-webkit-transform           : rotateY(-180deg);
			-moz-transform              : rotateY(-179deg); /* setting to 180 causes an unnatural-looking half-flip */
			transform                   : rotateY(-179deg);

			-webkit-transform-style     : preserve-3d;
			-moz-transform-style        : preserve-3d;
			transform-style             : preserve-3d;

			-webkit-backface-visibility : hidden;
			-moz-backface-visibility    : hidden;
			backface-visibility         : hidden;

			/* -- transition is the magic sauce for animation -- */
			-webkit-transition          : all .4s ease-in-out;
			transition                  : all .4s ease-in-out;

			visibility: hidden;
		}

	  .<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
.flip .back { 
		z-index           : 1000;
		/*background      : #80868d;*/
		visibility: visible;
		/*padding-top       : 50px;*/
		-webkit-transform : rotateX(0deg) rotateY(0deg);
		-moz-transform    : rotateX(0deg) rotateY(0deg);
		transform         : rotateX(0deg) rotateY(0deg);
		
		background: rgb(255,123,13);
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1MCUiIHN0b3AtY29sb3I9IiNmZjdiMGQiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSI1MCUiIHN0b3AtY29sb3I9IiNmZmE4NGMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
		background: -moz-linear-gradient(left,  rgba(255,123,13,1) 50%, rgba(255,168,76,1) 50%);
		background: -webkit-gradient(linear, left top, right top, color-stop(50%,rgba(255,123,13,1)), color-stop(50%,rgba(255,168,76,1)));
		background: -webkit-linear-gradient(left,  rgba(255,123,13,1) 50%,rgba(255,168,76,1) 50%);
		background: -o-linear-gradient(left,  rgba(255,123,13,1) 50%,rgba(255,168,76,1) 50%);
		background: -ms-linear-gradient(left,  rgba(255,123,13,1) 50%,rgba(255,168,76,1) 50%);
		background: linear-gradient(to right,  rgba(255,123,13,1) 50%,rgba(255,168,76,1) 50%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff7b0d', endColorstr='#ffa84c',GradientType=1 );

	  }
	 
	 
	</style>
	<div id="blox<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
CodeDialogs" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style=" height: 85px; overflow: hidden; position: absolute; top: 35%;   background-color : rgba(0,0,0,0.75);">
		<div class=" text-center">
			<a href="#" class="close" data-dismiss="modal">&times;</a>
			<h3 style="color: white;"><a href="#" class="btn btn-danger btn-lg" onclick="closeDialog ();"><i class="fa"></i> On</a></h3>   
		</div> 
	</div>
		<!--                     
             77                       77777             
        7 .....                      7.....             
       7........                     ........           
       ...,+++..77   7..........7  7...+++....7         
      ....++++...7 ......:~~...........+++=....7        
     7...~~+++......~~~~~~~~~~~~~......+++~=....        
     7...~~++++..=~~~~~~===~~~~~~~~~..?+++~~~...        
      ...~~~++~~~+++++++++++++++++=~~~~++~~~~...        
      =...~~~~~~++++++++++++++77+++++~~~~~~~...         
        ....~~~++++++++++++++7777+++++~~~~....          
         .....~?++,+++++++++++77?+?++++~.....           
         7....~~+..+++++++++++++++..+++...=7            
         ...~~~=?...++++++++++++....+++~~...            
        ...=~~+++......+++++++.....~+++~~...7           
       7...~~=++++......+++++......++++~~...7           
        ...,~~?++++.....+++++.....++++~~~...            
         ...,~~~~~+++++++++++++++++?~~~~...7            
         7.....~~~~~~~+++++++++~~~~~~~:...=             
           7......~~~~~+++++++~~~~,......7              
            7 .......~~~~++?~~~.......  7               
                  ....~~~~~?++...7                      
                   ....~~~~+++..                        
                   7...~~~+++....                       
                    ...~~~+++?........                  
                    ...=~~++++777++....7                
                    ...~~~++++777+++...                 
                    ...=~~=+++~~~~~~...7                
                    ...~~~=++=~~~~~...                  
                    ...~~~++++........7                 
                    :...~~+++.......                    
                    7..........                         
                        .....: 7   
	-->
	<?php echo '<script'; ?>
 src="/bin/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		window.tinyMesh = function  (t) {
			$(t).addClass('active');
			TINY = tinymce.init({
				selector : ".tinymce_editor",
				inline   : true,
				
			    save_enablewhendirty: true,
			    save_onsavecallback: function() { 
			    	var html = tinymce.get('mesh-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
-html-edtior').save(); 
			    	//$('#mesh-code-editor')[0].contentWindow.htmlBox.setValue(s);

					console.log("Saving HTML..."); 
			    	$.ajax({
			    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
			    		type     : "GET",	 
						dataType : "json",
					    success: function(data){  
							console.log("Loading Latest CSS & JS HTML..."); 
							if(data.success){
						    	$.ajax({
									url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/save/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
									type     : "POST",	
									data     : {
										blox : {
											js : {
												quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
												cfg_option : 'js-source',
												cfg_params : data.js
											},
											css : {
												quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
												cfg_option : 'css-source',
												cfg_params : data.css
											},
											html : {
												quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
												cfg_option : 'html-source',
												cfg_params : html
											}
										} 
									},
									dataType : "json",
								    success: function(data){ 
										if(data.success){
											console.log("Saved");
											$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').removeClass('flip');
											$('.<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
-blox-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').parent().removeClass('fullscreen-me'); 

										}else{
											alert(data.error);
										}
								    }
								}); 



							}else{
								alert(data.error);
							}
					    }
			    	}); 

					

			   //  	console.log("Saving");
			   //  	$.ajax({
			   //  		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
			   //  		type     : "POST",	
						// data     : {
						// 	blox : {
						// 		quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
						// 		cfg_option : 'html-source',
						// 		cfg_params : s
						// 	} 
						// },
						// dataType : "json",
					 //    success: function(data){ 
						// 	if(data.success){
						// 		console.log("Saved");
						// 	}else{
						// 		alert(data.error);
						// 	}
					 //    }
			   //  	}); 
			    }, 
				plugins: [
				    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
				    "searchreplace wordcount visualblocks visualchars code fullscreen",
				    "insertdatetime media nonbreaking save table contextmenu directionality",
				    "emoticons template paste textcolor colorpicker textpattern save"
				],
				menubar : false,
				toolbar: "save | insertfile undo redo | styleselect |  alignleft aligncenter alignright alignjustify  | forecolor backcolor  |  bold italic | bullist numlist outdent indent | link image media | charmap table insertdatetime  | template print",

				 
				image_advtab: true,
				apply_source_formatting : true,
				
				<?php $_smarty_tpl->_subTemplateRender("file:../../html/templates/cfg.tinymce.templates.json", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			});  
		}
	<?php echo '</script'; ?>
> 
</div>
<?php }
}
}
