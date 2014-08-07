<!DOCTYPE html>
<html>
	<head>
		
		<title>SuperDom Watchtower</title>
		
        <link href="/x/html/layout/watchtower/css/shopfrog.css" rel="stylesheet" media="screen">   
        <!-- <link href="/x/html/layout/watchtower/shopfrog-grey.css" rel="stylesheet" media="screen"> -->

        
		<link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/bin/css/font-awesome.css">

        <link href='http://fonts.googleapis.com/css?family=Geo|Righteous|Allerta' rel='stylesheet' type='text/css'> 
        <link rel="shortcut icon" href="img/favicon.png">


        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">

        {* TODO: Make a min & compress file for all css *}
        {if $HTML.HEAD.CSS != ''}
        <link rel="stylesheet" type="text/css" href="{$HTML.HEAD.CSS}">
        {/if} 

        {if $HTML.HEAD.JS != ''}
        <!--
        <script type="text/javascript" src="{$HTML.HEAD.JS}"></SCRIPT>
        -->
        {/IF} 

        <style type="text/css">
        /*! 
                 * CSS Media Queries Boilerplate by @brandonhimpfen
                 * all.css
                 * Copyright Brandon Himpfen
                 * Licensed under http://www.gnu.org/licenses/gpl-2.0.html
                 * Website: himpfen.com
                 */

                /*
                    General
                */

               

                @media all {
                    /* all devices */
                     .background-clock {
                        position: fixed; font-size: 555%; color: rgba(0,0,0,0.10); bottom: 55px; right: 25px;
                        /* -- transition is the magic sauce for animation -- */
                        -webkit-transition          : all .4s ease-in-out;
                        transition                  : all .4s ease-in-out;
                    }
                } 
                @media screen {
                    /* computer screens */
                     
                }
                @media print {
                    /* printers */
                }
                @media aural {
                    /* speech and sound synthesizers */
                }
                @media braille {
                    /* braille tactile feedback devices */
                }
                @media embossed {
                    /* paged braille printers */
                }
                @media handheld {
                    /* small or handheld devices */
                }
                @media projection {
                    /* projected presentations */
                }
                @media tty {
                    /* teletypes and terminals */
                }
                @media tv {
                    /* television-type devices */
                }


                @media screen and (max-width: 768px){ 
                    /* all iPad models */
                    
                }

                /*
                    iPad
                */

                @media screen and (min-width : 768px) and (max-width : 1024px)  { 
                    /* all iPad models */
                    .background-clock {
                         font-size: 444%; color: rgba(0,0,0,0.10); bottom: 15px; right: 15px;
                    }
                }
                @media screen and (min-width : 768px) and (max-width : 1024px) and (orientation : landscape) { 
                    /* all iPad models, landscape */
                   
                }
                @media screen and (min-width : 768px) and (max-width : 1024px) and (orientation : portrait) { 
                    /* all iPad models, portrait */ 
                }

                @media screen and (min-width : 568px) and (max-width : 768px) { 
                    /* iPhone 5 */
                    .background-clock {
                         font-size: 333%; color: rgba(0,0,0,0.10); bottom: 15px; right: 15px;
                    }
                    
                }

                /*
                    Apple iPhone 5
                */

                @media screen and (min-width : 320px) and (max-width : 568px) { 
                    /* iPhone 5 */
                    .background-clock {
                         font-size: 222%; color: rgba(0,0,0,0.10); bottom: 15px; right: 15px;
                    }
                    
                }
                @media screen and (min-width : 320px) and (max-width : 568px) and (orientation : landscape) { 
                    /* iPhone 5, landscape */
                     
                }
                @media screen and (min-width : 320px) and (max-width : 568px) and (orientation : portrait) { 
                    /* iPhone 5, portrait */ 
                     
                }

                /*
                    iPhone 2 - 4 and iPod Touch
                */

                @media screen and (min-width : 320px) and (max-width : 480px) {     /* iPhone 2 - 4 and iPod Touch */ 
                     
                }
                @media screen and (min-width : 320px) and (max-width : 480px) and (orientation : landscape) { 
                    /* iPhone 2 - 4 and iPod Touch, landscape */ 
                    
                }
                @media screen  and (min-width : 320px)  and (max-width : 480px)  and (orientation : portrait) { 
                    /* iPhone 2 - 4 and iPod Touch, portrait */ 
                     
                }
        </style>
</head>
	    

		<STYLE TYPE="text/css">





			{* Build CSS Based from DB Info *}
			/*{FOREACH from=$HTML.HEAD.STYLE item=style}
				{$style.element}{if $style.state != "" && $style.state != " "}:{$style.state}{/if}{
				{FOREACH from=$style.attr item=attr}
				{$attr.key} : {$attr.value};
				{/FOREACH}
			}
			{/FOREACH}*/

			 body{
				background : rgb(109,179,242); /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				/*background : url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzZkYjNmMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjE5JSIgc3RvcC1jb2xvcj0iIzU0YTNlZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjYwJSIgc3RvcC1jb2xvcj0iIzM2OTBmMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxZTY5ZGUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background : -moz-linear-gradient(left,  rgba(109,179,242,1) 0%, rgba(84,163,238,1) 19%, rgba(54,144,240,1) 60%, rgba(30,105,222,1) 100%);  FF3.6+ 
				background : -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(109,179,242,1)), color-stop(19%,rgba(84,163,238,1)), color-stop(60%,rgba(54,144,240,1)), color-stop(100%,rgba(30,105,222,1))); /* Chrome,Safari4+ 
				background : -webkit-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* Chrome10+,Safari5.1+ 
				background : -o-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* Opera 11.10+ 
				background : -ms-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* IE10+ 
				background : linear-gradient(to right,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* W3C 
				filter     : progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=1 ); /* IE6-8  */*/*/*/*/*/*/
			}

            body{
                background: none;
                /*background: url(/bin/images/bgs/full/{$suite}.png) center center no-repeat fixed !important; */
                background-position: center center  !important; 
            }

			.transparent-black-25{
				background-color: rgba(0,0,0,0.25);
			}
			.transparent-black-50{
				background-color: rgba(0,0,0,0.55);
			}
			.transparent-black-75{
				background-color: rgba(0,0,0,0.75);
			}
			.transparent-black-90{
				background-color: rgba(0,0,0,0.90);
			} 
			</STYLE>
<body class="background-dark">
<div class="logo text-center">
    <h4>
         
       <!--  <a href="/" class="">
            <i class="fa fa-globe text-info"></i> 
        </a>   -->
       <!--  <span class="label label-warning">  
         <strong>x</strong></span> -->

        <span href="/{$toBackDoor}"  style="position: fixed; font-size: 500%; color: rgba(0,0,0,0.15); top: 30px; left: 45px;  z-index: -1;">
           {$HTTP_HOST} 
        </span>  <br/>
         
          
       <!--  <btn class="btn btn-sm label dropdown label-success dropdown  ">   
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {$suite}  <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul></span> <span class="label label-danger">  
        &alpha; </btn> -->
      <!--   <span class="label   label-info ">  
           infused </span>  -->
            
      
    </h4>  
    
     
</div>
<div class="background-clock" >
    {include file="../../~blox/clock.tpl"}   
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">

        <li class="active">
            <a href="/{$toBackDoor}"><i class="fa fa-eye"></i> <span class="name">Watchtower</span>  </a>
        </li>

        {foreach $admin_menu as $key => $item}
            {assign var=children value=0}
            {foreach $xtras as $x => $xtra}

                {if $xtra.icon && $key == $xtra.see && ($xtra.alpha == true || $xtra.beta == true || $xtra.delta == true || $xtra.omega == true)}
                    {assign var=children value=1}
                {/if}
            {/foreach}

            {if $key && $children > 0} 

                 <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#{$key}-collapse"><i class="fa fa-3x fa-{$key}"></i><span class="name">{$item.area|ucfirst}</span></a>
                    <ul id="{$key}-collapse" class="panel-collapse collapse"> 
                        {foreach $xtras as $x => $xtra}
                            {if $xtra.icon && $key == $xtra.see}
                                <!-- <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}">  -->

                                {if $xtra.alpha || $xtra.beta || $xtra.delta || $xtra.omega}
                                    <li> 
                                        <a href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}">
                                        <!-- {if $xtra.alpha}
                                            <span class="label label-danger">&alpha;</span>
                                        {/if}
                                        {if $xtra.beta}
                                            <span class="label label-warning">&beta;</span>
                                        {/if}
                                        {if $xtra.delta}
                                            <span class="label label-success">&Delta;</span>
                                        {/if}
                                        {if $xtra.omega}
                                            <span class="label label-primary">&Omega;</span>
                                        {/if} -->
                                        <i class="fa fa-2x pull-left fa-hover  fa-{$xtra.mini}"></i>
                                        {$xtra.name}</a>
                                    </li>
                                {/if}
                            {/if}
                        {/foreach}
                    </ul>
                </li>

               <!--  <div align="center" id="map-{$key}" area="{$key}" style="overflow: hidden"> 
                    <img src="{$ICON.A}{$key}.png"  id="area-{$key}" height="128" width="128" >
                    {foreach $xtras as $x => $xtra}
                        {if $xtra.icon && $key == $xtra.see}
                        <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}"> 
                        {/if}
                    {/foreach}
                    <p>{$item.area|ucfirst}</p>
                    <span class="transparent-black-25" style="display: none; height: 48px; padding : 5px;">
                        <img align="absmiddle" style="margin: 5px;" />
                        <h1 style="float: left; margin-left: 60px;"></h1>
                        <h3 style=" "></h3>
                    </span> 
                </div>   -->
            {/if}
        {/foreach}

    <div id="sidebar-settings" class="settings">
        <button type="button"
                data-value="icons"
                class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button>
        <button type="button"
                data-value="auto"
                class="btn-auto btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    </div> 
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
</nav>
<div class="wrap">
    <header class="page-header" style="position: relative; z-index:10 ">
        <div class="navbar" > 
                
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class=" hidden-xs">
                        <a href="/"  >
                            <i class="fa fa-globe"></i>
                        </a>
                    </li>


                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    
                    <li class="divider"></li>
                    
                    <li class="hidden  dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <!-- <img src="img/2.jpg" alt=""> -->
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    


                    <li class="dropdown hidden">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                     
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                     
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" "><a href="/{$toBackDoor}/login/logout"><i class="fa fa-sign-out"></i></a></li>

                </ul>
    
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="search-query" placeholder="Search...">
                </form>

                <div class="notifications pull-right hidden">
                     <div class="alert-warning alert pull-right hidden-xs">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <i class='fa fa-users'></i>  <strong>11 Users Online</strong>  
                    </div>
                    <div class="alert-warning alert pull-right hidden-xs">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <i class='fa fa-dashboard'></i>  <strong>{$total_used_space.left} - {$total_used_space.used} used of {$total_used_space.limit}</strong>  
                    </div> 
                    <div class="alert-warning alert pull-right hidden-xs">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <i class='fa fa-exchange fa-rotate-90'></i>  <strong>{$HTTP_HOST_TOTAL_HITS}</strong>  
                    </div> 
                    <div class="alert-info alert pull-right hidden-xs">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        Domain {$HTTP_HOST} is now SuperCharged! Launch it on any Device!
                                    (<i class="fa fa-mobile "></i>
                                    <a id="notification-link" href="#"><i class="fa fa-desktop "></i></a>
                                    <i class="fa fa-tablet "></i>) 
                    </div>
                </div>
        </div>

    </header>
     
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin fa-5x"></i>
    </div>

<!-- jquery and friends -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery/jquery-2.0.3.min.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"></script>


<!-- jquery plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/icheck.js/jquery.icheck.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/sparkline/jquery.sparkline.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.slimscroll.js"></script>


<!-- jquery plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/parsley/parsley.js"> </script> 
<script type="text/javascript" src="/x/html/layout/watchtower/lib/select2.js"></script>

<!-- d3, nvd3-->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/lib/d3.v2.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/nv.d3.custom.js"></script>

<!-- nvd3 models -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/scatter.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/axis.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/legend.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBar.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBarChart.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/line.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/lineChart.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/stream_layers.js"></script>

<!--backbone and friends -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/underscore-min.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone-min.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone.localStorage-min.js"></script>

<!-- bootstrap default plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/transition.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/collapse.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/alert.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tooltip.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/popover.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/button.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tab.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/dropdown.js"></script>

<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/carousel.js"></script>
 
<!-- page specific -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> </script>

<script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender">Tikhon Laninga</div>
            <div class="text">
                <%- text %>
            </div>
        </div>
</script>

<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="white/" class="btn btn-sm btn-transparent">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) { %>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    <%} else { %>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    <% } %>
</script>


	{if $HTML.BODY.CSS != ''}
		<!-- <link rel="stylesheet" type="text/css" href="{$HTML.BODY.CSS}"> -->
	{/if}
		
	{if $HTML.BODY.JS != ''}
		<!-- script src="{$HTML.BODY.JS}"></script -->
	{/if}  

  
    {include file="$Door/scripts.tpl" assign=SCRIPT}
    {$SCRIPT}
 

    <script type="text/javascript">
        /*!
         * jQuery Cookie Plugin v1.4.1
         * https://github.com/carhartl/jquery-cookie
         *
         * Copyright 2013 Klaus Hartl
         * Released under the MIT license
         */
        (function (factory) {
            if (typeof define === 'function' && define.amd) {
                // AMD
                define(['jquery'], factory);
            } else if (typeof exports === 'object') {
                // CommonJS
                factory(require('jquery'));
            } else {
                // Browser globals
                factory(jQuery);
            }
        }(function ($) {

            var pluses = /\+/g;

            function encode(s) {
                return config.raw ? s : encodeURIComponent(s);
            }

            function decode(s) {
                return config.raw ? s : decodeURIComponent(s);
            }

            function stringifyCookieValue(value) {
                return encode(config.json ? JSON.stringify(value) : String(value));
            }

            function parseCookieValue(s) {
                if (s.indexOf('"') === 0) {
                    // This is a quoted cookie as according to RFC2068, unescape...
                    s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
                }

                try {
                    // Replace server-side written pluses with spaces.
                    // If we can't decode the cookie, ignore it, it's unusable.
                    // If we can't parse the cookie, ignore it, it's unusable.
                    s = decodeURIComponent(s.replace(pluses, ' '));
                    return config.json ? JSON.parse(s) : s;
                } catch(e) {}
            }

            function read(s, converter) {
                var value = config.raw ? s : parseCookieValue(s);
                return $.isFunction(converter) ? converter(value) : value;
            }

            var config = $.cookie = function (key, value, options) {

                // Write

                if (value !== undefined && !$.isFunction(value)) {
                    options = $.extend({}, config.defaults, options);

                    if (typeof options.expires === 'number') {
                        var days = options.expires, t = options.expires = new Date();
                        t.setTime(+t + days * 864e+5);
                    }

                    return (document.cookie = [
                        encode(key), '=', stringifyCookieValue(value),
                        options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                        options.path    ? '; path=' + options.path : '',
                        options.domain  ? '; domain=' + options.domain : '',
                        options.secure  ? '; secure' : ''
                    ].join(''));
                }

                // Read

                var result = key ? undefined : {};

                // To prevent the for loop in the first place assign an empty array
                // in case there are no cookies at all. Also prevents odd result when
                // calling $.cookie().
                var cookies = document.cookie ? document.cookie.split('; ') : [];

                for (var i = 0, l = cookies.length; i < l; i++) {
                    var parts = cookies[i].split('=');
                    var name = decode(parts.shift());
                    var cookie = parts.join('=');

                    if (key && key === name) {
                        // If second argument (value) is a function it's a converter...
                        result = read(cookie, value);
                        break;
                    }

                    // Prevent storing a cookie that we couldn't decode.
                    if (!key && (cookie = read(cookie)) !== undefined) {
                        result[name] = cookie;
                    }
                }

                return result;
            };

            config.defaults = {};

            $.removeCookie = function (key, options) {
                if ($.cookie(key) === undefined) {
                    return false;
                }

                // Must not alter options, thus extending a fresh object...
                $.cookie(key, '', $.extend({}, options, { expires: -1 }));
                return !$.cookie(key);
            };

        }));
$(document).ready(function() {
    for (var t = [{
        color: "#7CD6E8",
        image : 'url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMmY0YjU5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNjklIiBzdG9wLWNvbG9yPSIjMDBjY2Y5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzllZThmYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=)',
        title: "Theme 1",
        style: "css/theme-2.min.css"
    }, {
        color: "#95879c",
        title: "Theme 2",
        style: "css/theme-3.min.css"
    }, {
        color: "#00cccc",
        title: "Theme 3",
        style: "css/theme-4.min.css"
    }, {
        color: "#e36f8a",
        title: "Theme 4",
        style: "css/theme-5.min.css"
    }, {
        color: "#9999ff",
        title: "Theme 5",
        style: "css/theme-6.min.css"
    }, {
        color: "#bda093",
        title: "Theme 6",
        style: "css/theme-7.min.css"
    }, {
        color: "#ff8855",
        title: "Theme 7",
        style: "css/theme-8.min.css"
    }, {
        color: "#828282",
        title: "Theme 8",
        style: "css/theme-9.min.css"
    }, {
        color: "#1abc9c",
        title: "Theme 9",
        style: "css/theme-10.min.css"
    }, {
        color: "#2ecc71",
        title: "Theme 10",
        style: "css/theme-11.min.css"
    }, {
        color: "#3498db",
        title: "Theme 11",
        style: "css/theme-12.min.css"
    }, {
        color: "#9b59b6",
        title: "Theme 12",
        style: "css/theme-13.min.css"
    }, {
        color: "#34495e",
        title: "Theme 13",
        style: "css/theme-14.min.css"
    }, {
        color: "#f1c40f",
        title: "Theme 14",
        style: "css/theme-15.min.css"
    }, {
        color: "#e67e22",
        title: "Theme 15",
        style: "css/theme-16.min.css"
    }, {
        color: "#e74c3c",
        title: "Theme 16",
        style: "css/theme-17.min.css"
    }, {
        color: "#95a5a6",
        title: "Theme 17",
        style: "css/theme-18.min.css"
    }, {
        color: "#96d7a0",
        title: "Theme Default",
        style: "css/theme-1.min.css"
    }], i = "", n = 0; n < t.length; n++) i += '<a href="#" data-color="' + t[n].color + '"  data-theme-css="' + t[n].style + '" title="' + t[n].title + '" style="display: inline-block; height: 35px;  width: 35px; margin-right: 10px;text-decoration: none!important; border: 1px solid rgba(77, 77, 77, 0.95); background-color: ' + t[n].color + '"><\/a>';

    $("body").append(' <a title="Show/Hide Theme Changer" class="widget" href="#" id="theme-changer" style="position: fixed;display: inline-block;top: 0px;left: 0;width: 40px;line-height: 40px; padding: 0px; border-radius: 0 3px 3px 0;color: white;z-index: 1003;text-align: center;font-size: 1.5em;text-decoration: none!important"><i class="fa fa-eye"><\/i><\/a><div class="theme-changer-colors theme-changer-hidden widget" style="border:0px solid rgb(238, 238, 238);visibility: hidden;opacity: 0;position: fixed;top: 40px;left: -170px;width: 150px;padding: 10px;text-align: center;z-index: 1002;border-radius: 0 3px 3px 0;background-color: rgba(77, 77, 77, 0.23);-moz-transition-duration: .4s;-o-transition-duration: .4s;-webkit-transition-duration: .4s;transition-duration: .4s;">' + i + "<\/div>");
    $("#theme-changer").click(function() {
        return $(".theme-changer-colors").toggleClass("theme-changer-hidden"), $(".theme-changer-colors").hasClass("theme-changer-hidden") ? $(".theme-changer-colors").css({
            visibility : "hidden",
            opacity    : 0, 
            left       : "-170px"
        }) : $(".theme-changer-colors").css({
            visibility : "visible",
            opacity    : 1, 
            left       : 0
            }), !1
    });
    $.cookie("theme_css_cookie") != null && 
        $('body').css({
            background : $.cookie("theme_css_cookie")
        });
    $(".theme-changer-colors a[data-theme-css]").click(function(n) {
        //
        n.preventDefault();
        var t = $(this).data("color");
        var c = $(this).data("color");
        
        $('body').css({
            background : c 
        });

        // $("[data-id-stylesheet]").attr("href", t);
        $.cookie("theme_css_cookie", c.toString(), {
            expires: 1
        });


    })
});
    </script>

    <!-- page specific -->


    <!-- basic application js


    <script type="text/javascript" src="/bin/js/ext-4.2.1/examples/shared/include-ext.js"></script>
	<script type="text/javascript" src="/fileServer/js/x4/x4.js"></script>
	<script type="text/javascript" src="/fileServer/js/x4/ume.js"></script>

-->

    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.nestable.js"> </script>

    <div class="content container" id="container" data-pjax-container>
        {assign var="WT" value="/x/html/layout/watchtower/"}
        {if $TPL_EXISTS && $Xtra != '' AND $method  != '' AND ($Xtra != 'index')}


            {if $masterKey.is.user}     
                {assign var="php" value="x{$Xtra|ucfirst}.php"}
                <head><title>{$xtras.$php.name}: {$xtras.$php.desc} | Super Dom</title></head>             
                
                
                <div class="row"> 
                    <div class="col-md-12 widget-container " style="position: relative; z-index: 10;"> 
                        <section class="widget locked">
                         
                            <ol class="breadcrumb">
                                <li><a href="/" target="_blank"><i class="fa fa-globe"></i> www</a></li>
                                <li><a href="/{$toBackDoor}"><i class="fa fa-eye"></i> Watchtower</a></li>
                                
                                {foreach $xtras as $x => $xtra}
                                    
                                    {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
                                        <li><a href="/{$toBackDoor}"><i class="fa fa-{$xtra.see}"></i>
                                        {$admin_menu[$xtra.see].area|ucfirst}</a> 
                                        </li>
                                        <li class="active"><a href="/{$toBackDoor}/{$xtra.link}"><i class="fa fa-{$xtra.mini}"></i>
                                        {$xtra.name} 
                                        </a> 
                                        {if $method == 'index'} 
                                        
                                        </li>
                                        {else}
                                            <li class="active">
                                                <a href="/{$toBackDoor}/{$Xtra}/{$method}"><i class="fa fa-{$Xtra}-{$method}"> {$method|ucfirst}</i>
                                            </a>
                                        {/if}

                                    {/if}
                                {/foreach}
                            </ol>
                            <h2 class="page-title"> 
                                {foreach $xtras as $x => $xtra} 
                                    {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
                                        <i class="fa fa-{$xtra.mini} fa-5x" style="font-size: 500%; position: absolute; z-index: 0; bottom: -50%; left: 100px; color: rgba(0,0,0,0.05)"></i> {$xtra.name|ucfirst}
                                        <a href="/{$toBackDoor}/nexus/git/{$xtra.class}" class="hidden-xs btn-xs btn {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default{/if}">{$xtra.version}</a>
                                        <small class="hidden-xs">


                                        </small>

                                        <small class="hidden-xs">
                                            {if $method == 'index'}
                                                
                                                {$xtra.desc}
                                            {else}
                                                
                                                {$method|ucfirst}
                                            {/if} 
                                        </small>
                                    {/if}
                                {/foreach} 
                            </h2>
                        </section>  
                    </div>
                </div><!-- 
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div> -->
            {/if}

            {include file="../../../{$suite}/x{$Xtra|ucfirst}/$method.tpl" assign=XTRA_METHOD}    
            {$HTML.BODY.HTML = $XTRA_METHOD}

        {else if $HTML.BODY.HTML == ''}

            {include file="../../$Door/portal.tpl" assign=PORTAL}
            {$HTML.BODY.HTML = $PORTAL}
        {/if}

        {$HTML.BODY.HTML}

    </div>
</body>
</html>