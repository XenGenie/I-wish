<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:03:26
         compiled from "/home/xopher/www/superdomx.com/x/X/xYouMeOS/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1010185443574cc6bedf3814-34206697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e38b73d5edc1a2780553cd185953da09a4d33b1' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xYouMeOS/login.tpl',
      1 => 1448770398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010185443574cc6bedf3814-34206697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L' => 0,
    'thumb' => 0,
    'masterKey' => 0,
    'count_universes' => 0,
    'umeos_bin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc6bf0015b1_75300174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc6bf0015b1_75300174')) {function content_574cc6bf0015b1_75300174($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <title>U Me O.S. Login</title>
            
        <!-- CSS -->
        
    </head>
    <body id="skin-blur-violate">
        <link href="css/bootstrap.css" rel="stylesheet">

        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 

        <small class="label tile label-sm " style="position: absolute; bottom: 0; right: 0; margin: 0 50px 10px 0;">
        </small>
        <br/>
        <small class="label tile label-sm " style="position: absolute; bottom: 0; left: 0; margin: 0 50px 10px 0;"> 
            
        </small>
        <br/>

        <center>
            <section id="login" class="block-area">
                


             <header>   
                <br/> 
            </header>
            <div class="clearfix"></div>
            
            <!-- Login -->
            <form class="box  animated active " id="box-tour" action="/.json" onsubmit="event.preventDefault(); tour.start();" >
                <!-- <h2 id="tour-head" class="m-t-0 m-b-15">Take a tour</h2> -->
                <!-- <input type="text" class="login-control m-b-10" placeholder="Username or Email Address" name="login[username]">
                <input type="password" class="login-control" placeholder="Password" name="login[password]">
                <div class="checkbox m-b-20">
                    <label>
                        <input class="checkbox m-b-20" type="checkbox">
                        Remember Me
                    </label>
                </div> --> 
                
                <header>
                    <h1 class="fa-5x">UMeOS
                    <small>™</small>
                    </h1>
                    <h2>Welcome to the Future</h2>
                </header>
                <button id="tour-btn" class="btn m-r-5  " data-trigger="hover" data-toggle="popover" data-placement="right"  title="" data-original-title="Take Tour" >
                    <?php echo $_smarty_tpl->tpl_vars['L']->value['tour'];?>

                </button>
                <a class="box-switcher btn btn-lg m-r-5   input-focused btn-lg " data-switch="box-login" href=""><?php echo $_smarty_tpl->tpl_vars['L']->value['login'];?>
</a>
                <br/>
                
                <h4>
                    <!-- <a href="https://www.kickstarter.com/projects/xopherdeep/umeos-the-21st-century-you-me-os-welcome-to-the-fu" target="_blank">Enter Beta, Join our Kickstarter!</a> -->
                    <a href="https://www.facebook.com/youmeos" target="_blank"><img src="/bin/images/logos/fb.png"/></a>
                </h4>    
                <!-- <div id="DateCountdown" data-date="2015-01-17 18:12:00"></div> -->
                
                <div style="position: absolute; left: 10px; bottom: 0px;">
                    <a href="http://superdomx.com/" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=16"/>™
                    </a>
                    super powered by<br/>  
                    <img src="/bin/images/logos/HTML5_CSS3_jQuery_Logo.png" width="75" />
                    
                    <!-- <a href="http://superdomx.com/" onclick="$('#detailBody').load('/mmxv.html'); return false; " target="_blank"> -->
                    

                </div>
                <div style="position: abosolute; right: 10px; bottom: 10px">
                    <a href="http://google.com/" onclick="$('#detailBody').load('/mmxv.html'); return false; " target="_blank">
                        <img src="/bin/images/logos/google-trans.png" width="75" />
                    </a>
                </div>

                <a class="box-switcher btn  m-r-5    " data-switch="box-register" href=""><?php echo $_smarty_tpl->tpl_vars['L']->value['newlogin'];?>
</a>


 
                <br/>
                    
                <br/>

                <br/>
                Copyright &copy; 2015 <br/>
                <a href="http://www.hallofthegods.com">Hall of the Gods, Inc.</a>
            </form>



            <!-- Login -->
            <form class="box  animated  " id="box-tour" action="/.json" onsubmit="event.preventDefault(); tour.start();" >
                <!-- <h2 id="tour-head" class="m-t-0 m-b-15">Take a tour</h2> -->
                <!-- <input type="text" class="login-control m-b-10" placeholder="Username or Email Address" name="login[username]">
                <input type="password" class="login-control" placeholder="Password" name="login[password]">
                <div class="checkbox m-b-20">
                    <label>
                        <input class="checkbox m-b-20" type="checkbox">
                        Remember Me
                    </label>
                </div> --> 
                
                <header>
                    <br/><br/>
                    <h1 class="fa-5x">UMeOS
                    <small>™</small>
                    </h1>
                    <h2>Welcome to the Future</h2>
                 
                </header>   
                <a class="box-switcher btn btn-lg m-r-5   input-focused btn-lg " data-switch="box-login" href=""><?php echo $_smarty_tpl->tpl_vars['L']->value['login'];?>
</a>
                 
                <br/><br/>
                
               <button id="tour-btn" class="btn m-r-5  " data-trigger="hover" data-toggle="popover" data-placement="right"  title="" data-original-title="Take Tour" >

                    <?php echo $_smarty_tpl->tpl_vars['L']->value['tour'];?>
</button>
                <a class="box-switcher btn  m-r-5    " data-switch="box-register" href=""><?php echo $_smarty_tpl->tpl_vars['L']->value['newlogin'];?>
</a>
                <br/><br/>
                Copyright &copy; 2014 <br/>
                Hall of the Gods, Inc.
            </form>

            <form class="box tile animated " id="box-login" action="/.json" >
                
                <h2 class="m-t-0 m-b-15"><?php echo $_smarty_tpl->tpl_vars['L']->value['login'];?>
</h2>
                
                <input type="text" class="login-control m-b-10 input-lg" placeholder="Username or Email" name="login[username]">
                <input type="password" class="login-control input-lg" placeholder="Key" name="login[password]">
                <!-- <div class="checkbox m-b-20">
                    <label>
                        <input class="checkbox m-b-20" type="checkbox">
                        Remember Me
                    </label>
                </div> --><br/><br/>
                <button class="btn btn-sm m-r-5 btn btn-lg btn-block btn-alt input-focused " data-trigger="hover" data-toggle="popover" data-placement="right" data-content="" title="" data-original-title="">Me</button>
                

                
                <br/><br/>

                <small>
                    <a class="box-switcher" data-switch="box-tour" href="">Welcome</a> 
                    <!-- | -->
                    <!-- <a class="box-switcher" data-switch="box-register" href="">Weave OS</a> | -->
                    <!-- <a class="box-switcher" data-switch="box-reset" href="">Forgot Key</a> -->

                    <br/>
                    
                </small>
            </form>
            
            <!-- Register -->
            <form class="box animated tile" id="box-register" action="/.json" >
                <h2 class="m-t-0 m-b-15"><?php echo $_smarty_tpl->tpl_vars['L']->value['open'];?>
</h2>
                
                <!-- <input required name="login[name]"  type="text" class="login-control m-b-10" placeholder="What is Your Name?"> -->
                <input required name="login[username]" type="text" class="login-control m-b-10 input-lg" placeholder="Name Universe">
                <input required name="login[email]" type="email" class="login-control m-b-10 input-lg" placeholder="Email">    
                <input required name="login[password]" type="password" class="login-control m-b-10 input-lg" placeholder="Combination Key">
                <input required name="login[confirm]" type="password" class="login-control m-b-20 input-lg" placeholder="Confirm Key">
                <input type="hidden" name="login[action]" value="register" >
                
                <button class="btn btn btn-lg btn-block btn-alt input-focused m-r-5">
                Weave a Universal OS</button>
                
                <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
                <h5> #Youinverses: <?php echo $_smarty_tpl->tpl_vars['count_universes']->value;?>
 </h5>
                <?php }?>
                

                <small><a class="box-switcher btn btn btn-xs" data-switch="box-tour" href=""> Cancel </a></small>
            </form>
            
            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset" action="/.json">
                <h2 class="m-t-0 m-b-15">Reset Key</h2>
                <p>A new Key will be sent to your email address.</p>
                <input type="email" class="login-control m-b-20" placeholder="Email Address">    

                <button class="btn btn btn-lg btn-block btn-alt  m-r-5">Reset Key</button>
                <br/>
                <small><a class="box-switcher" data-switch="box-login" href="">Remembered Your Key?</a></small>
            </form>

        
        </section>         

        </center>             
        
         
        
        <!-- Bootstrap -->
        <!-- // <script src="js/bootstrap.min.js"></script> -->
        
        <!--  Form Related -->
        <!-- // <script src="js/icheck.js"></script> 
        -->
        <!-- Custom Checkbox + Radio --> 
        
        <!-- All JS functions -->
        <!-- // <script src="js/functions.js"></script> -->

        <!-- // <script src="js/jquery.min.js"></script>  -->

        <script type="text/javascript" src="/bin/js/jq/jquery-2.0.0.js"></script>

        <!-- // <script src="js/jquery.min.js"></script>  -->

        <?php $_smarty_tpl->tpl_vars['umeos_bin'] = new Smarty_variable("/x/X/xYouMeOS/", null, 0);?>

        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/jquery-ui.min.js"></script>     <!-- jQuery UI -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->
        
        <script src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"></script>

        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/file-manager/elfinder.min.js"></script> <!-- File Manager -->
    
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/chosen.min.js"></script> <!-- Custom Multi Select -->


        <script type="text/javascript">
            
            window.login = function(e){ 
                var postData = $(this).serializeArray();
                var formURL = $(this).attr("action");
                
                $.ajax(
                {
                    url      : formURL,
                    type     : "POST",
                    data     : postData,
                    dataType : 'json',
                    success  : function(data, textStatus, jqXHR){
                        $('#minimap').fadeIn();
                        


                        if(data.success){
                            $('#detailContainer').hide();
                            zoomOut(.750);
                            // $('#ex-out').click();
                            // $('#about').click();
                                
                            var go = "/youMeOS/campaign/";

                            // window.location.hash = "#"+go;

                            $('#detailBody').load('/html'+go,function(){
                                $('#detailContainer').show();                                
                            }); 

                            // $(window).on('hashchange', function() {  
                            //     var go = window.location.hash.replace('#','');
                            //     if(go != '')
                            //     $.get(go, function(data) {
                            //         $('section #content').html(data);  
                                    
                            //         $('#content').html( $('#content #content').html() );
                            //     });
                            // });


                            // $.pjax({ 
                            //     container : '#detailBody',
                            //     fragment  : '#detailBody',
                            //     timeout   : 5000,
                            //     url       : "/" + data.data.username
                            //     //window.location.pathname + window.location.search + window.location.hash
                            // });  
                        }else{
                            alert(data.error);
                        }

                        // if(data.success){
                        //    $('#ex-out').click();
                        //    $('#about').click();
                        // }else{
                        //     $( "#modalDefault" ).dialog({
                        //       modal: true,
                        //       buttons: {
                        //         Ok: function() {
                        //           $( this ).dialog( "close" );
                        //         }
                        //       }
                        //     });

                        // }
                    },
                    error: function(jqXHR, textStatus, errorThrown) 
                    {
                        //if fails      
                        $( "#modalDefault" ).dialog({
                        modal: true,
                            buttons: {
                                Ok: function() {
                                  $( this ).dialog( "close" );
                                }
                            }
                        });
                    }
                });
                e.preventDefault(); //STOP default action
                // e.unbind(); //unbind. to stop multiple form submit.
            }
            $('#box-login').submit(window.login);
            $('#box-register').submit(window.login);
             $('#box-reset').submit(window.login);

            $('#closeDetail').show();
            $('#about').hide();
            $('#minimap').hide();
            
            
        </script>
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        
        <!-- Bootstrap -->
        <!-- // <script src="js/bootstrap.min.js"></script> -->
        <!-- Charts -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/charts/jquery.flot.js"></script> <!-- Flot Main -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/charts.js"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/maps/jvectormap.min.js"></script> <!-- jVectorMap main library -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/maps/usa.js"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

        <!-- UX -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/scroll.min.js"></script> <!-- Custom Scrollbar -->

        <!-- Text Editor -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/editor.min.js"></script> <!-- WYSIWYG Editor -->

        <!-- Other -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/calendar.min.js"></script> <!-- Calendar -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/feeds.min.js"></script> <!-- News Feeds -->
        
        <!--  Form Related -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/validation/validate.min.js"></script> <!-- jQuery Form Validation Library -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
js/validation/validationEngine.min.js"></script> <!-- jQuery Form Validation Library - requirred with above js -->


        <script src="<?php echo $_smarty_tpl->tpl_vars['umeos_bin']->value;?>
campaign/plugins/time-circles/TimeCircles.js" type="text/javascript"></script>

        <script type="text/javascript">
            setTimeout(function  () {
                $("#DateCountdown").TimeCircles({
                    "animation"       : "ticks",
                    "bg_width"        : 0.2,
                    "fg_width"        : 0.016666666666666666,
                    "circle_bg_color" : "#F5F5F5",
                    "time": {
                        "Days": {
                            "text": "Days",
                            "color": "#FFF",
                            "show": true
                        },
                        "Hours": {
                            "text": "Hours",
                            "color": "#FFF",
                            "show": true
                        },
                        "Minutes": {
                            "text": "Minutes",
                            "color": "#FFF",
                            "show": true
                        },
                        "Seconds": {
                            "text": "Seconds",
                            "color": "#FFF",
                            "show": true
                        }
                    }
                });
            },2000); 
        </script>
    </body>
</html>


<?php }} ?>
