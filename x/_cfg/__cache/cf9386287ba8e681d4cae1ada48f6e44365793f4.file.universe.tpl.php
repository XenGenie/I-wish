<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:03:01
         compiled from "/home/xopher/www/superdomx.com/x/X/xYouMeOS/universe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:779517119574cc6a5e96ac5-44099825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9386287ba8e681d4cae1ada48f6e44365793f4' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xYouMeOS/universe.tpl',
      1 => 1448770398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '779517119574cc6a5e96ac5-44099825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'suite' => 0,
    'action' => 0,
    '_DIR' => 0,
    'PHP' => 0,
    'google_analytics_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc6a60b2ee8_28611781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc6a60b2ee8_28611781')) {function content_574cc6a60b2ee8_28611781($_smarty_tpl) {?>		<?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['action']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_DIR'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['toBackDoor']->value)."/".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_tmp1."/", null, 0);?>
		<meta name="google" value="notranslate">
		<meta name="description" content="You Me OS is an 4d Interactive Operating System for your Web.">

		<link rel="image_src" href="images/thumbnail.png">
		<link rel="shortcut icon" href="images/favicon.gif" type="image/gif">
		<title>The Center of your Web</title>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
		

		<link href='http://fonts.googleapis.com/css?family=Lekton|Lora:400,700,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/bin/css/font-awesome-4.2.0.min.css"> 
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
styles/style.css">

		<!-- <link href="css/bootstrap.css" rel="stylesheet">
 -->
        <link href="css/icons.css" rel="stylesheet">

		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="/bin/css/font-awesome-4.2.0.min.css" rel="stylesheet">
        <link href="/css/form.css" rel="stylesheet">
        <link href="/css/calendar.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/icons.css" rel="stylesheet">
        <link href="/css/generics.css" rel="stylesheet">
        
		<link href="/campaign/plugins/time-circles/TimeCircles.css" rel="stylesheet" type="text/css">        

		<style type="text/css">

		/*.modal-dialog {
			z-index: 9999999999999999999999999 !important;
		}*/

		.modal-backdrop{
			position: relative !important;
		}

		</style>
		
<!-- Svg Filters -->
		<filter id="svg-glow">
			<feGaussianBlur in="SourceAlpha" stdDeviation="3" />
			<feOffset dx="2" dy="2" result="offsetblur"/>
			<feMerge>
				<feMergeNode/>
				<feMergeNode in="SourceGraphic"/>
			</feMerge>
		</filter>


		<div style="display:none">
			<span id="marker_template" class="marker"><span class="name">
			</span></span>

			<span id="legacy_marker_template" class="legacymarker"><span class="name">
			</span></span>
		</div>

		<div id="layout">
			<div id="visualization" >

				<div id="css-container">
		            <div id="css-world">
		                <div id="css-camera">
		                	<!-- 2D overlay elements go in here -->
		                </div>
		            </div>
		        </div>
				<div id="glContainer">
					<!-- 3D webgl canvas here -->
				</div>
			</div>

		<div id="icon-nav" style="display: none;" 
		></div>

		<div id="spectral-graph">
			<!-- <img src="images/spectral_color_index.png" border="0"> -->
			<div id="heat-map"></div>
			<p class="left">HOT (Lots of Activity)</p>
			<p class="center"></p>
			<p class="right">COOL (Least Activity)</p>
			<!-- <h5>
				B-V Stellar Color Index <br />
				Temperatures in Kelvin
			</h5> -->
		</div>

			<div id="detailContainer" style="padding-top: 0;">
				<!-- <div id="detailTitle" >
					<span  > </span>
					<div id="detailClose">
						<p id="zoom-back">
						</p>
						<p id="ex-out">
							&times;
						</p> 
					</div>
				</div> -->
				<div id="detailBody">
					 
				</div>
			</div>
		</div>

		<div id="star-name">
			<span>Sun</span>
		</div>

		<div id="meta">
			<p>
				<!-- Stuff info here! -->
			</p>
		</div>

		<div id="minimap">
			<div id="closeDetail" style="display: none;">
				<span class="icon" id="ex-out">
					&#61790;
				</span>
			</div>
			<div id="about">
				<span class="icon" id="ex-eye">
					&#61873;
				</span>
			</div>
			<div id="zoom-levels">
				<div id="zoom-backdrop"></div>
				<div id="zoom-cursor">
					<span class="icon" id="ex-eye">
					&#61736;
					</span>
					<div class="arrow-up"></div>
					<div class="arrow-down"></div>
					<span class="icon" id="ex-eye">
					&#61701;
					</span>

				</div>
			</div>
			<div id="solsun">
				<span class="icon" id="ex-eye">
					&#61735;
				</span>
			</div>
			<div id="volume">
				<!-- <img src="/images/icons/sound-on.svg" alt="" /> -->
			</div>
			<small class="label" style="position: absolute; bottom: 3px; right: 10px;">
	            <?php echo $_smarty_tpl->tpl_vars['PHP']->value['version'];?>

	        </small>
		</div>

		

        
		<style type="text/css">
			@-webkit-keyframes loaderSprite {
			    from { background-position: 0px; }
			    to { background-position: -2500px; }
			}

			@-moz-keyframes loaderSprite {
			    from { background-position: 0px; }
			    to { background-position: -2500px; }
			}

			@keyframes loaderSprite {
			    from { background-position: 0px; }
			    to { background-position: -2500px; }
			}

			.atom {
				width             : 100px;
				height            : 100px;  
				background-image  : url("<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
images/loading.png");
				-webkit-animation : loaderSprite 1s steps(25, end) infinite;
				-moz-animation    : loaderSprite 1s steps(25, end) infinite;
				animation         : loaderSprite 1s steps(25, end) infinite;
				display           : block;
				position          : relative;
				margin            : auto;
				top               : 0;
				left              : 0;
				text-align        : center;
			}
		</style>
		<div id="loader">
			<div>   
				<span class="atom" /></span>
				<p id="loadtext" >
					<!-- You Me OS <?php echo $_smarty_tpl->tpl_vars['PHP']->value['version'];?>
&hellip; -->
				</p>  
			</div>
		</div>

		<audio id="bgmusicA" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
audio/bgmusic.ogg"> 
		</audio>
		<audio id="bgmusicB" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
audio/01_-_Carl_Sagans_Ghost_-_Travelers_Welcome.ogg">
		</audio>

		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/dat.gui.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/three.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/tween.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/Detector.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/THREEx.KeyboardState.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/THREEx.WindowResize.js"></script>

		<!-- // <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/jquery-1.7.1.min.js"></script>  -->
		<script type="text/javascript" src="/bin/js/jq/jquery-2.0.0.js"></script>

		

		<script type="text/javascript" src="/bin/js/jq/jquery.cookie.js"></script> <!-- jQuery Library -->
		<script type="text/javascript">			
			function setLoadMessage(msg){
				var $loadText = $('#loadtext');
				$loadText.html(msg+"&hellip;");	
			}

            $(document).ready(function(){
            	start(); // Load You Me OS
            });
		</script>

		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/underscore.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/jquery.preventMacBackScroll.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/util.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/mousekeyboard.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/urlArgs.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/director.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/infocallout.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/starsystems.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/starmodel.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/css3worldspace.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/helphud.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/spacehelpers.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/shaderlist.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/skybox.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/plane.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/guides.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/dust.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/lensflare.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/hipparcos.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/galaxy.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/solarsystem.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/sun.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/legacymarkers.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/marker.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/tour.js" ></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/main.js" ></script>

		<!-- Post main loading scripts -->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/jquery.tooltip.js" ></script>
		
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
js/minimap.js" ></script>

		
            
        
		<?php echo $_smarty_tpl->getSubTemplate ("~widgets/messenger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		

		

		<script type="text/javascript">



			$(window).on('hashchange', function() { 
                var url = window.location.hash.replace('#','');
                if(url != ''){
                    console.log('Loading '+url);
                    $.pjax({ 
                        container : '#content',
                        fragment  : '#content',
                        timeout   : 10000,
                        url       : url,
                        success     : function  () {
                        	console.log("Loaded: "+url);
                            if($('.tooltips')[0]) {
					            console.log($('.tooltips').tooltip());
					        }
                        }
                    },function(){
                		console.log("Loaded: "+url);
                    });     
                    <?php if ($_smarty_tpl->tpl_vars['google_analytics_id']->value) {?>
                    
                    ga('send', {
                      'hitType' : 'pageview',
                      'page'    : url,
                      'hitCallback': function() {
                        console.log('hit sent');
                      }
                    }); 

                    <?php }?>
                }
            });
		</script>
<?php }} ?>
