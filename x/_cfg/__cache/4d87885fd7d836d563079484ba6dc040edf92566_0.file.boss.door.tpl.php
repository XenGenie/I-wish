<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:42:24
  from "/home/xopher/www/superdomx.com/x/html/layout/frontdoor/boss.door.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fc7409e1321_71007127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d87885fd7d836d563079484ba6dc040edf92566' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/frontdoor/boss.door.tpl',
      1 => 1464649881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
    'file:~blox/godbar/navi.nest.tpl' => 1,
    'file:~blox/clock.tpl' => 1,
    'file:~blox/godbar/sdx.btn.tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/xBlox/qBlox.tpl' => 1,
  ),
),false)) {
function content_574fc7409e1321_71007127 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['TITLE'];?>
</title> 
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
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

		
		<link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet"> 

		<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['JS'];?>
"></SCRIPT>

		<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 

		<!-- <link href="/x/html/layout/watchtower/css/white.application.min.css" rel="stylesheet"> -->
  		<link rel="stylesheet" href="/bin/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['CSS'];?>
">
		

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->
    <!-- <link rel="stylesheet" href="/bin/css/jetblack.bootstrap.css"> -->

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS']) {?>
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS'];?>
">
		<?php }?>

	</head>
	<body>
		<?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery/jquery-2.0.3.min.js"> <?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> <?php echo '</script'; ?>
>
		
   	 	<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
> 
		<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>   
		<?php echo '<script'; ?>
 src="http://modernizr.com/downloads/modernizr-latest.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			// For IE11. May we one day live without your BS. 
			// <?php echo '<script'; ?>
 src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"><?php echo '<script'; ?>
>
			Modernizr.addTest('preserve3d', function(){ return Modernizr.testAllProps('transformStyle', 'preserve-3d');});
		<?php echo '</script'; ?>
> 
		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->
	    <style type="text/css"> 
			body{
				background: none;
			}

			.panel { 
				float               : left;
				width               : 100%;
				height              : 100%;
				margin              : 0;
				position            : absolute;
				left                : 0;
				top                 : 0;
				font-size           : .8em;
				border              : 0 !important;
				background: transparent !important;
				-webkit-perspective : 600px;
				-moz-perspective    : 600px;
				perspective         : 600px;
 
			  }
			  /* -- make sure to declare a default for every property that you want animated -- */
			  /* -- general styles, including Y axis rotation -- */
			.panel > .front { 
				float                       : none;
				position                    : absolute;
				top                         : 0;
				left                        : 0;
				z-index                     : 900;
				width                       : inherit;
				height                      : inherit;
				border                      : 0px solid #ccc; 
				padding-top                 : 50px;
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
				
				
				background: url(http://xengenie.github.io/SuperDom/images/header-bg.jpg); 

				 
			  }
			  .panel.flip > .front { 
				z-index           : 900; 
				 
				/*box-shadow      : 0 15px 50px rgba(0,0,0,0.2);*/
				
				-webkit-transform : rotateY(180deg);
				-moz-transform    : rotateY(180deg);
				transform         : rotateY(180deg);
			  }

			.panel > .back { 
				float                       : none;
				position                    : absolute;
				top                         : 0;
				left                        : 0;
				z-index                     : 800;
				width                       : inherit;
				min-height                      : 100%;
				height: auto;
				/*border                      : 1px solid #ccc;*/
				/*background                : #333;*/
				border-radius               : 20px;
				text-align: center;
				-webkit-transform           : rotateY(-180deg);
				transform                   : rotateY(-179deg);
				
				-moz-transform              : rotateY(-179deg); /* setting to 180 causes an unnatural-looking half-flip */
				-webkit-transform-style     : preserve-3d;
				-moz-transform-style        : preserve-3d;
				transform-style             : preserve-3d;
				
				-webkit-backface-visibility : hidden;
				-moz-backface-visibility    : hidden;
				backface-visibility         : hidden;
				display: none;
				/* -- transition is the magic sauce for animation -- */
				-webkit-transition          : all .4s ease-in-out;
				transition                  : all .4s ease-in-out; 
				background: url(http://xengenie.github.io/SuperDom/images/header-bg.jpg); 
				}

			  .panel.flip > .back { 
				z-index           : 1000;
				/*background      : #80868d;*/
				display: block;
				border-radius     : 20px;
				padding-top       : 50px;
				-webkit-transform : rotateX(0deg) rotateY(0deg);
				-moz-transform    : rotateX(0deg) rotateY(0deg);
				transform         : rotateX(0deg) rotateY(0deg);
				
				box-shadow        : 0 15px 50px rgba(0,0,0,0.2);
				


				/* IE9 SVG, needs conditional override of 'filter' to 'none' */

					-webkit-transition          : all .4s linear;
					transition                  : all .4s linear;

			  }

			.panel > .back .navbar *{ 
			 	/* -- transition is the magic sauce for animation -- */
					-webkit-transition          : all .4s linear;
					transition                  : all .4s linear;
			}

			  /* -- X axis rotation for click panel -- */
			  .click .front { 
			    cursor: pointer;
			    -webkit-transform: rotateX(0deg);
			       -moz-transform: rotateX(0deg);
			            transform: rotateX(0deg);
			  }
			  .click.flip .front { 
			    -webkit-transform: rotateX(180deg);
			       -moz-transform: rotateX(180deg);
			            transform: rotateX(180deg);
			  }
			  .click .back { 
			    cursor: pointer;
			    -webkit-transform: rotateX(-180deg);
			       -moz-transform: rotateX(-180deg);
			            transform: rotateX(-180deg);
			  }
			  .click.flip .back { 
			    -webkit-transform: rotateX(0deg);
			       -moz-transform: rotateX(0deg);
			            transform: rotateX(0deg);
			  }

			  /* -- cosmetics -- */
			  .panel .pad { padding: 0 15px; }
			  /*.panel.flip .action { display: none; }*/
			  /*.block ol li { text-align: left; margin: 0 0 0 28px; }*/
			  /*.block .action { display: block; padding: 3px; background: #333; text-align: right; font-size: .8em; opacity: 0; position: absolute; cursor: pointer; -webkit-transition: opacity .2s linear; }*/
			  /*.block:hover .action { opacity: .7; }*/
			  .circle div {  border-radius: 100px; width: 100px; }
			  .circle div h2 {  padding-top: 3em; text-align: center; }

	    </style>
	    <?php echo '<script'; ?>
>
	      $(document).ready(function(){ 

	        // set up hover panels
	        // although this can be done without JavaScript, we've attached these events
	        // because it causes the hover to be triggered when the element is tapped on a touch device
	         
	        // set up click/tap panels
	         

	        // set up block configuration
	        $('.block .action').click(function(){ 
	          $('.block').addClass('flip');
	        });
	        $('.block .edit-submit').click(function(e){ 
	          	$('.block').removeClass('flip');
				// e.preventDefault();
	        });
	 

	      });
	    <?php echo '</script'; ?>
>     
 
<!-- Master Tool Bar -->
    <div class="block panel"> 
      <div class="front">
        <!-- Fixed navbar -->
        <style type="text/css">
        	body > .container {
        		padding-top: 50px;
        	}

        	.godbar{
        		/* -- transition is the magic sauce for animation -- */
				-webkit-transition          : all .7s ease-in-out;
				transition                  : all .7s ease-in-out;
				visibility: visible !important;
				display: inline-block !important;
        	}

        </style>
	    <div class="navbar navbar-default navbar-fixed-top navbar-inverse godbar"  role="navigation">
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
	        
	        <div class="navbar-collapse collapse text-center" >

	          <?php echo '<script'; ?>
 type="text/javascript">
	          var x4;
	          <?php echo '</script'; ?>
>
          
	         

	          <ul class="nav navbar-nav navbar-left">
	           
	            <li >
	            	<a class="action" style="cursor: pointer" >
	            		<span class="label label-info"> <i class="fa fa-cloud fa-3x"></i> <!-- God Mode --></span>
	            	</a>
	            </li>
	            <li class="active">
	            	<a href="<?php echo $_smarty_tpl->tpl_vars['SERVER']->value['REQUEST_URI'];?>
">
	            		<span class="label label-success"> 
	            			<i class="fa fa-3x fa-globe fa-spin-slow"></i> 
	            		<!--  Public Mode --></span>
	            		<div class="  label label-primary badge" style="position: absolute;
left: 55%;
top: 35px;">
	            				<strong class="count "><i class="fa fa-crosshairs"></i>  <?php echo $_smarty_tpl->tpl_vars['page_landing']->value['unique_hits'];?>
  </strong>
	            			</div>
	            	</a>
	            </li>
	          </ul>

	          <ul class="nav navbar-nav navbar-right text-right">
	            <!-- <li class="span2 dropdown <?php if ($_smarty_tpl->tpl_vars['quest']->value == '') {?>active<?php }?>"><a href="/"><i class="fa fa-home text-success"></i> Home</a></li> -->
	            <!-- TODO: Add Navigation Here -->
	            
	              
				<li class="span2 dropdown <?php if ($_smarty_tpl->tpl_vars['quest']->value == '') {?>active<?php }?>">
					<a class="dropdown-toggle"  data-toggle="dropdown" >
					<span class="label label-danger"> 
	            			<i class="fa fa-3x fa-hand-o-up  "></i>
	            		<!--  Public Mode --></span>
					<div class="  label label-danger badge" style="position: absolute;
left: 55%;
top: 35px;">
	            				 <strong><?php echo $_smarty_tpl->tpl_vars['page_landing']->value['page_views'];?>
 </strong>
	            			</div>

				</a>
					<ul class="dropdown-menu">
			            
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navi']->value, 'link', false, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['link']->value) {
?>
		                    <?php if ($_smarty_tpl->tpl_vars['link']->value['parent'] == 0) {?> 
		                        <?php $_smarty_tpl->_subTemplateRender("file:~blox/godbar/navi.nest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['link']->value,'sub'=>true), 0, true);
?>
 
		                    <?php }?> 
		                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			            
			        </ul> 
				</li>  

	            
	          </ul>

	          <div class="btn-group" style="padding-top: 10px;">
						<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=10" class=""> -->
							<!-- <button class="btn btn-warning action btn-sm"><i class="fa fa-key"></i></button> -->
							
							<button class="btn btn-info   <?php if ($_smarty_tpl->tpl_vars['quest']->value == '') {?>active<?php }?>  " onclick="location.href='/' "> 
							<strong><i class="fa fa-globe "></i> <?php echo $_smarty_tpl->tpl_vars['SVR']->value['SERVER_NAME'];?>
</strong>
							</button>	



							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quest']->value['paths'], 'walk', false, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value => $_smarty_tpl->tpl_vars['walk']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['walk']->value) {?>
									<button class="<?php ob_start();
echo count($_smarty_tpl->tpl_vars['path']->value);
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['walk']->value == $_smarty_tpl->tpl_vars['path']->value[$_prefixVariable2]) {?>active<?php }?>btn btn-success  ">
										<?php if ($_smarty_tpl->tpl_vars['walk']->value == '/') {?>
											<i class="fa fa-home"></i>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['walk']->value;?>

										<?php }?>
									</button>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


							<!-- <button class="btn btn-success btn-sm" onclick="location.href = location.href"> 
								<strong>
								<?php if ($_smarty_tpl->tpl_vars['quest']->value == '') {?>
								<i class="fa fa-home"></i>
								<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['quest']->value;?>

								<?php }?>
								</strong>
							</button>	 -->

							<button class="active btn btn-success  text-primary   " style="cursor: pointer; " onmousedown="onlineBtn.m(this,'over');"   > 
							<strong><i class="fa fa-eye"></i> Online <i class="fa fa-eye"></i></strong>
							</button>
							 
							
	                        <!-- <button class="btn btn-sm btn-info  "><i class="fa fa-cube"></i></button>
							<button class="btn btn-sm btn-info  "><i class="fa fa-link"></i></button>
	                        <button class="btn btn-sm btn-info   "><i class="fa fa-language"></i></button>
 --> 

						</div>

						<?php echo '<script'; ?>
 type="text/javascript">
						 	var onlineBtn = {
								mouseover  : false, 
								m: function  (t,i) {

						 			function toggle () {
						 				$(t).toggleClass('text-primary'); 
										if(!$(t).hasClass('text-primary')){ 
											$(t).toggleClass('btn-danger');
											$(t).toggleClass('active');
											$(t).html('<strong>OFFLINE <i class="fa fa-eye-slash"></i><i class="fa fa-eye-slash"></i></strong>');
										}else{
											$(t).toggleClass('btn-danger');
											$(t).toggleClass('active');
											$(t).html('<strong>Online <i class="fa fa-eye"></i><i class="fa fa-eye"></i></strong>');
										}; 
						 			}

						 			toggle();
									 

						 			
						 		} 
						 	};
						<?php echo '</script'; ?>
>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
        <div class="content"> 
        <?php }?>


			<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'];?>

        <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
        </div>      
        <?php }?>

<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>  
<!-- BackSide To Master Tool Bar -->
      </div>
      <div class="back">
        <div class="pad">
        	<!-- Fixed navbar -->
			<div class="navbar navbar-default navbar-fixed-top godbar"  role="navigation">
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
									<span class="label label-info"> 	<i class="fa fa-3x fa-cloud fa-spin"></i> <!--  God Mode  --> </span>
									</a>
								</li>
								<li>
									<a class="edit-submit " style="cursor: pointer">
									<span class="label label-success"> <i class="fa fa-globe fa-3x "></i> <!-- Public Mode --> </span>
									</a>
								</li>
							</ul>
							
			                     
							<div class="btn-group" style="margin-top: 10px;">
							<!-- 	<li class="dropdown" ><a href="/x/" class="text text-danger dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=123">
							<strong class=" text text-success">Super</strong><span class="text-primary">Dom</span> 
							<i class="fa fa-caret-down text-info"></i> 
							</a>

							</li> -->
							
							
			                
							<div class="btn-group admin_menu">



								<button class="btn btn-info " data-toggle="dropdown"    > 
									<i class="fa fa-cubes "></i>     
									<i class="fa fa-caret-down"></i>  
								</button> 
								<ul class="dropdown-menu " id="toy-blox-menu">
									<!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
										 

										<?php if ($_smarty_tpl->tpl_vars['key']->value) {?>  
											<li class="dropdown-rightsubmenu">
												<a data-filter="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 pull-left"></i> <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
  </a>
												<ul class="dropdown-menu">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
												<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
													<li class="<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>text-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>text-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>text-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>text-primary<?php } else { ?>text-default<?php }?>"><a data-filter="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="  " > 



															<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  pull-left"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
															</a> 
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
  -->

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('hasBlox', false);
?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
											<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
												<?php if ($_smarty_tpl->tpl_vars['qBlox']->value[$_smarty_tpl->tpl_vars['xtra']->value['class']]) {?>
													<?php $_smarty_tpl->_assignInScope('hasBlox', true);
?>
												<?php }?>
											<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
										
										<?php if ($_smarty_tpl->tpl_vars['key']->value && $_smarty_tpl->tpl_vars['hasBlox']->value == true) {?>  
											<li class=" dropdown-rightsubmenu "   > 
												<a data-filter="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"   title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
"  ><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 pull-left"></i> 
												<?php echo ucfirst($_smarty_tpl->tpl_vars['LANG']->value['ADMIN']['AREAS'][$_smarty_tpl->tpl_vars['key']->value]);?>
  </a>
												<!-- <span class="dropdown-toggle" data-toggle="dropdown"  title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
"></span><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i> --> 
												<!-- <a data-filter="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
" class="btn btn-success"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i>  <i class="fa fa-caret-right"></i></a> -->
												<ul class="dropdown-menu">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
														<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
															<?php if ($_smarty_tpl->tpl_vars['qBlox']->value[$_smarty_tpl->tpl_vars['xtra']->value['class']]) {?>
																<li class="dropdown-submenu"><a data-filter="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>panel-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>panel-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>panel-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>panel-primary<?php } else { ?>panel-default" disabled="disabled<?php }?>" > 



																	<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  pull-left"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
																	</a>
																	<ul class="dropdown-menu">
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qBlox']->value[$_smarty_tpl->tpl_vars['xtra']->value['class']], 'y', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['y']->value) {
?>
																			<li ><a data-filter="<?php echo $_smarty_tpl->tpl_vars['y']->value['name'];?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
/<?php echo $_smarty_tpl->tpl_vars['y']->value['name'];?>
" title=" "  data-placement="top" data-original-title=" " class=" " disabled=" " >
																			<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['y']->value['icon'];?>
  pull-left"></i> <?php echo $_smarty_tpl->tpl_vars['y']->value['blox'];?>
 
																			</a></li>
																		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																	</ul>
																</li>  
															<?php }?>
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



							<a   class="btn btn-default active disabled " >
					          	<?php $_smarty_tpl->_subTemplateRender("file:~blox/clock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					        </a>
					            <?php $_smarty_tpl->_subTemplateRender("file:~blox/godbar/sdx.btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					       
							
							
				          	
					          
					         <!--  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?> 
							  	<?php if ($_smarty_tpl->tpl_vars['key']->value) {?>  
									<button class="btn btn-sm btn-info admin_menu"   > 
										<span class="dropdown-toggle" data-toggle="dropdown" style="position: absolute; top : 0; left: 0; block; width: 100%; height: 100%;"></span><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i>
										<ul class="dropdown-menu">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
												<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
													<li><a data-filter="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>panel-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>panel-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>panel-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>panel-primary<?php } else { ?>panel-default" disabled="disabled<?php }?>" > 



															<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  pull-left"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
															</a> 
														</li>  
												<?php }?>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
										</ul>
									</button>
								<?php }?> 
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 -->
							 

					       	
							
				          </div>
				          <ul class="nav   navbar-nav navbar-right btn-group;" style=" padding-top: 10px;  "     > 
						        

						    <div class="btn-group" >

							    <a href="/login/logout" class="btn btn-primary  "> 
								<strong><i class="fa fa-lock  " onclick="location.href = ''"></i> </strong>
								</a>	

				           		<button  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					           		<i class="fa fa-coffee"></i> 
					           </button>
					           <ul class="dropdown-menu">
					           	<li class="dropdown-header">Upcoming Events</li>
					           	<li role="presentation">
					           	<a>
					           			<i class="fa fa-envelope-o fa-2x"></i> Newsletter Scheduled for Delivery This Thursday @ 5:45am
					           	</a>
					           	
					           	</li>
					           </ul>
					           
					        </div>


				          	


						        <!-- <a href="/x/calendar" class="btn btn-success  " >
						           <i class="fa fa-tasks "></i>
						        </a> -->

						       <!-- <a href=" " class="btn btn-success  " >
						          	<i class="fa fa-crosshairs"></i> <span class="count badge"><?php echo $_smarty_tpl->tpl_vars['page_landing']->value['unique_hits'];?>
</span>
						        </a> 
						        <a href=" " class="btn btn-info  " >
						          	<i class="fa fa-hand-o-up"></i> <span class="count badge"><?php echo $_smarty_tpl->tpl_vars['page_landing']->value['page_views'];?>
</span>
						        </a>  -->
						        

						        <!-- <div class="btn-group">
			                        <a href="#" title="Messages" id="messages" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			                            <i class="fa fa-user-md "></i> <span class="count badge">80%</span>
			                        </a>
			                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
			                        	<li class="dropdown-header"> <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['SVR']->value['SERVER_NAME'];?>
 Vitals <i class="fa fa-stethoscope"></i></li>
			                        	<li class="divider"></li>
			                            <li role="presentation">
			                                <a href="#" class="message">
			                                    
			                                    <div  >
			                                        <div class="progress"> 
								                       <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								                            HP  <i class="fa   fa-heart"></i> 90%
								                       </div>  
								                    </div>
			                                    </div>
			                                </a>
			                            </li>
			                            <li role="presentation">
			                                <a href="#" class="message">
			                                   
			                                    <div  >
			                                        <div class="progress"> 
								                       <div class="progress-bar progress-bar-striped progress-bar-info active " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								                            EP <i class="fa   fa-envelope"></i> 60%
								                       </div>  
								                    </div>
			                                    </div>
			                                </a>
			                            </li>
			                            <li role="presentation">
			                                <a href="#" class="message">
			                                     
			                                    <div  >
			                                        <div class="progress"> 
								                       <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
								                             MP  <i class="fa   fa-magic  "></i> 97%
								                       </div>  
								                    </div>
			                                    </div>
			                                </a>
			                            </li>
			                            <li role="presentation">
			                                <a href="#" class="message">
			                                     
			                                    <div  >
			                                        <div class="progress"> 
								                       <div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								                            SP <i class="fa   fa-star"></i> 60%
								                       </div>  
								                    </div>
			                                    </div>
			                                </a>
			                            </li>
			                            <li role="presentation">
			                                <a href="/x/analytics" class="text-align-center see-all">
			                                     <i class="fa fa-stethoscope"></i> See all Vitals <i class="fa fa-arrow-right"></i>
			                                </a>
			                            </li>
			                        </ul>
			                    </div>  -->
							<!-- SDX img drop down -->
							<!--  <li class="dropdown" ><a href="/x/" class="text text-danger dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=123">
								<strong class=" text text-success">Super</strong><span class="text-primary">Dom</span> 
								<i class="fa fa-caret-down text-info"></i> 
								</a>
								<ul class="dropdown-menu" id="toy-blox-menu">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
										 

										<?php if ($_smarty_tpl->tpl_vars['key']->value) {?>  
											<li class="dropdown-leftsubmenu">
												<a data-filter="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 pull-right"></i> <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
  </a>
												<ul class="dropdown-menu">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
												<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
													<li class="<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>text-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>text-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>text-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>text-primary<?php } else { ?>text-default<?php }?>"><a data-filter="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="  " > 



															<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  pull-right"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
															</a> 
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
							</li> 
  -->

							 
						</ul>
					</div><!--/.nav-collapse -->
				</div> 

				
			</div>
			<div id="paper-back"  data-pjax-container>
				<!-- Check for Blox 
					* Load Blue Print... 
					* Load Blox
				 -->
				<?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/xBlox/qBlox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>

			
        </div>
      </div>
    </div>
    
    <style type="text/css">
  
    #toy-blox-menu *, .hover {
    	/* -- transition is the magic sauce for animation -- */
		-webkit-transition          : all .3s linear;
		transition                  : all .3s linear;
    }

    </style>
    <?php echo '<script'; ?>
 type="text/javascript">
	//Product board filtering 
	$(document).on('click', '#toy-blox-menu a', function(e){
		$filter = $(this);

		// $('#toy-blox-menu a').removeClass('filter-hidden');


		if($filter.data('filter') == 'all'){
			//show all
			$('.blox').show();
			$filter.addClass('label-success');			
		}
		else{
			if(!$filter.hasClass('label-success')){
				//hide
				$('.'+$filter.data('filter')).show();

				$('#toy-blox-menu a').removeClass('label-success');

				$('.blox').not('.'+$filter.data('filter')).not('.static').hide();
				$filter.addClass('label-success');
			}
			else{
				//show
				$('.blox').not('.'+$filter.data('filter')).show();
				$filter.removeClass('label-success');
			}
		} 
		// reflow masonry		
		// $('#product-board').masonry();
		// alert('owos');
		e.preventDefault();
		return false;
	});


    $(document).ready(function() {
    	// $('.blox').sortable(); 
    	$('.blox .hover').click(function() { 

    		if($(this).hasClass('activeBlox')){
    			$('#windowTitleDialog .btn-success').addClass('active'); 
    			$('#windowTitleDialog .btn-danger').removeClass('active');
    		}else{
    			$('#windowTitleDialog .btn-success').removeClass('active'); 
    			$('#windowTitleDialog .btn-danger').addClass('active');
    		};

    		var i = $('#windowTitleDialog h2 i');
			
    		i.attr('class','').addClass('fa fa-5x');

			i.addClass('fa-'+$(this).attr('icon'));

			i.attr({
				id : 'icon-'+$(this).attr('id')
			});

			i.attr({
				id : 'icon-'+$(this).attr('id'),
				blox : $(this).attr('id')
			});

			var s = $('#windowTitleDialog h2 span');
			s.html($(this).attr('title'));
  

    	});

    	$('.admin_menu ul a').click(function (e) { 
    		$('#paper-back').hide().load('/html'+$(this).attr('href'), function  () {
    			$('#paper-back').show();
    			// body...
    		});

			e.preventDefault();
    		// body...
    	});

    	//$(document).pjax('a', '#paper-back', { fragment: '#content' });
    	
    });

function bloxDelete (t,e) {

	bloxSwitch(false);

	var url = $(t).attr('href');

	$.ajax({
		type     : "POST",
		url      : url+'/.json',
		 
		dataType : "json",
	    success: function(data)
	    {  
	    	$('[blox-id='+url.replace('/blox/bloxDelete/','')+']').remove();

			$('#windowTitleDialog').modal('hide'); 
	    }
	  });
	e.preventDefault();
	// body...
}

 

	 
function bloxSwitch(active,t,c) {

	if(active == 'star'){ 
		var i = $(t).find('i');

		if($(t).hasClass('active')){
			$(t).removeClass('active');
			i.attr('class','fa fa-recycle');
		}else{
			$(t).addClass('active');
			i.attr('class','fa fa-recycle fa-spin-slow');
		} 
	}else{
		$('#windowTitleDialog').modal('hide'); 
	}

	

	var i = $('#windowTitleDialog .blox-icon')
	
	var blox = i.attr('blox').replace('toy-','');
	i = 'toy-'+blox; 

 
	if( !active ){   
		$('#'+i).removeClass('activeBlox'); 
		$('#'+i).addClass('deactiveBlox');
	}else{

		$('#'+i).removeClass('deactiveBlox'); 
		$('#'+i).addClass('activeBlox');
	}

	var quest = '';
	


	 $.ajax({
		type     : "POST",
		url      : './.json',
		data     : {
			bloxSwitch : {
				online : active,
				blox   : blox,
				quest  : (quest) ? quest : '/'
			}
		},
		dataType : "json",
	    success: function(data)
	    { 

	    	var id = 'o-blox-'+blox+'-'+data.id;
	    	if(active){

	    		$('#xAccess-404').remove();

	    		jQuery('<div/>', {
				id    : id,
				// href  : 'http://google.com',
				// title : 'Become a Googler',
				// rel   : 'external',
				// text  : 'Go to Google!'
				}).appendTo('.content');
		    	$('#'+id).load('/html/'+blox.slice(1).toLowerCase().replace('-','/'));	
	    	}else{
	    		$('#'+id).remove();
	    	}
	    	

	      // Handle the server response (display errors if necessary)

	  //     $.pjax({ 
			// container : '.content',
			// fragment  : '.content',
			// timeout   : 5000,
			// url       : window.location.pathname+window.location.search+window.location.hash
	  //     });
	 		if( active ){  
				$('#'+i).removeClass('deactiveBlox'); 
				$('#'+i).addClass('activeBlox');
			}else{
				$('#'+i).removeClass('activeBlox'); 
				$('#'+i).addClass('deactiveBlox');
			}


			if(c){
				c();
			}

	    }
	  });




};
    <?php echo '</script'; ?>
>
    <!-- End Switch Panel -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   

<div id="windowTitleDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="  overflow: hidden; position: absolute;    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjN2Q3ZTdkIiBzdG9wLW9wYWNpdHk9IjAuODEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzBlMGUwZSIgc3RvcC1vcGFjaXR5PSIwLjg2Ii8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
background: -moz-linear-gradient(-45deg,  rgba(125,126,125,0.81) 0%, rgba(14,14,14,0.86) 100%);
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(125,126,125,0.81)), color-stop(100%,rgba(14,14,14,0.86)));
background: -webkit-linear-gradient(-45deg,  rgba(125,126,125,0.81) 0%,rgba(14,14,14,0.86) 100%);
background: -o-linear-gradient(-45deg,  rgba(125,126,125,0.81) 0%,rgba(14,14,14,0.86) 100%);
background: -ms-linear-gradient(-45deg,  rgba(125,126,125,0.81) 0%,rgba(14,14,14,0.86) 100%);
background: linear-gradient(135deg,  rgba(125,126,125,0.81) 0%,rgba(14,14,14,0.86) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cf7d7e7d', endColorstr='#db0e0e0e',GradientType=1 );


">
  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Project name</a> -->
        </div>
        <div class="navbar-collapse collapse text-center blox-bar">
          <ul class="nav navbar-nav">
             <li class="">
            	<a class="" style="cursor: pointer" onclick="closeDialog();">
	            	<span class="label label-info"> <i class="fa fa-cloud fa-2x"></i> <!-- God Mode --></span>
	            </a>
	        </li>
            <li class="active">
            	<a class="action" style="cursor: pointer" >
	            	<span class="label label-success"> <i class="fa fa-gear fa-spin-reverse  "></i> <i class="blox-icon"></i>  <i class="fa fa-gear fa-spin  "></i><!-- God Mode --></span>
	            </a>
	        </li>
             
          </ul>
          <div class="btn-group blox-bar-btns" style="margin-top: 5px;">
          		<!-- <a class="btn btn-default active disabled btn-lg" onclick="closeDialog()">
          			
          		</a> -->
           <a class="btn btn-info btn-lg blox-delete" onclick="bloxDelete(this,event);"><i class="fa fa-trash-o"></i></a>  
	          
        	 	
          	<!-- <a class="btn btn-default active btn-lg">

          		<i class="blox-icon"></i>
          		
          		<span class="blox-blox"></span> 
          	</a>
          	 -->
          	         
          	
          </div>
          <div class="nav navbar-nav navbar-right btn-group blox-bar-btns" style="margin-top: 5px;">
             
	        	<a class="btn btn-danger btn-lg"  onclick="bloxSwitch(false);"><i class="fa fa-eye-slash"></i></a>
				
             	<a class="btn btn-warning btn-lg" onclick="bloxSwitch('star',this);"><i class="fa fa-recycle"></i></a>
          	
				<a class="btn btn-success btn-lg" onclick="bloxSwitch(true);"><i class="fa fa-eye"></i></a>
          	
          	
 				
				
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="container" style="padding-top:5s0px;">
		<!-- <a href="#" class="close" data-dismiss="modal">&times;</a> -->
		<div class="jumbotron blox-cover text-center">
	       
	        <h1><span class="blox-blox"></span><br/><i class="blox-icon"></i><br/></h1>
	        
	        <p><span class="blox-desc"></span></p>
	          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button"><i class="fa fa-graduation-cap"></i> View Tutorial »</a>
		</div>
	</div> 
</div>

<?php }?>
 
		<?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified CSS -->
		<?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/app.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>

 	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"> -->


		
		<?php echo '<script'; ?>
>
		// Create a new YUI instance and populate it with the required modules.
		// YUI().use('pjax', function (Y) {
		//     // Pjax is available and ready for use. Add implementation
		//     // code here.
		// });

		function closeDialog () {
			$('#windowTitleDialog').modal('hide'); 
			var i = $('#windowTitleDialog h2 i');
			$('#'+i).toggleClass('activeBlox');
			
		};


		
		function okClicked () {
			document.title = document.getElementById ("xlInput").value;
				closeDialog ();
			};



		<?php echo '</script'; ?>
>


		
		<?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS']) {?>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'];?>
"><?php echo '</script'; ?>
>
		<?php }?>
		<style type="text/css">
			.dropdown-rightsubmenu{ position:relative;}
			.dropdown-rightsubmenu>.dropdown-menu{ top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
			.dropdown-rightsubmenu:hover>.dropdown-menu{ display:block;}
			.dropdown-rightsubmenu>a:after{ display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;
			border-width:5px 0 5px 5px ;border-left-color:#222;margin-top:5px;margin-left:-10px;}
			.dropdown-rightsubmenu:hover>a:after{ border-left-color:#000;}
			.dropdown-rightsubmenu.pull-left{ float:none;}.dropdown-rightsubmenu.pull-left>.dropdown-menu{ right:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

			.dropdown-submenu{ position:relative;}
			.dropdown-submenu>.dropdown-menu{ top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
			.dropdown-submenu:hover>.dropdown-menu{ display:block;}
			.dropdown-submenu>a:after{ display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;
			border-width:5px 0 5px 5px ;border-left-color:#222;margin-top:5px;margin-left:-10px;}
			.dropdown-submenu:hover>a:after{ border-left-color:#000;}
			.dropdown-submenu.pull-left{ float:none;}.dropdown-submenu.pull-left>.dropdown-menu{ right:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

			.dropdown-leftsubmenu{ position:relative;}
			.dropdown-leftsubmenu>.dropdown-menu{ top:0;right:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
			.dropdown-leftsubmenu:hover>.dropdown-menu{ display:block;}
			.dropdown-leftsubmenu>a:after{ display:block;content:" ";float:left;width:0;height:0;border-color:transparent;border-style:solid;
			border-width:5px 5px 5px  0  ;border-right-color:#222;margin-top:5px;margin-left:-10px;}
			.dropdown-leftsubmenu:hover>a:after{ border-right-color:#000;}
			.dropdown-leftsubmenu.pull-left{ float:none;}.dropdown-leftsubmenu.pull-left>.dropdown-menu{ right:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

			.versions .dropdown-leftsubmenu ul {
				margin-left : 35px;
			}

 
		</style>
	</body>
</html>
<?php }
}
}
