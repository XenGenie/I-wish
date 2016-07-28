<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
    <!-- <link href="/x/html/layout/watchtower/css/shopfrog.css" rel="stylesheet" media="screen">    -->
    <!-- <link href="/x/html/layout/watchtower/shopfrog-grey.css" rel="stylesheet" media="screen"> -->
    <link rel="stylesheet" href="/bin/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="/bin/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="/bin/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="/bin/css/bootstrap-theme.css"> -->
    <!-- <link rel="stylesheet" href="/bin/css/darkly.bootstrap.css"> -->
    <link rel="stylesheet" href="/bin/css/jetblack.bootstrap.css">
    <link href="/x/html/layout/watchtower/css/application.css" rel="stylesheet">

    <link href='//fonts.googleapis.com/css?family=Geo|Righteous|Allerta' rel='stylesheet' type='text/css'> 
    <!-- <link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet"> -->
    {* TODO: Make a min & compress file for all css *}
    {if $HTML.HEAD.CSS != ''}
    <link rel="stylesheet" type="text/css" href="{$HTML.HEAD.CSS}">
    {/if} 

    {if $HTML.HEAD.JS != ''}
    <!--
    <script type="text/javascript" src="{$HTML.HEAD.JS}"></SCRIPT>
    -->
    {/if} 

    {nocache}
    <style type="text/css">
      {foreach $LANG.ADMIN.AREAS_ICO as $k => $v}
        .fa-{$k}:before{
          content: "\{$v}";
        }
      {/foreach}
    </style>
    {/nocache}
    <style type="text/css">
      @media all {
        /* all devices */
        .background-clock {
          color              : rgba(0,0,0,0.25);
          text-align: center;
          /* position           : fixed; */
          font-size          : 30px;
          z-index            : -1;
          -webkit-transition : all .4s ease-in-out;
          transition         : all .4s ease-in-out;
          display: hidden;
        }
        .zo {
        }
        .bg-host{
          display: inline;
          margin: 0 15px;
          font-size: 225%;
          color: rgba(255, 255, 255, 0.5);
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

      @media screen and (min-width : 768px) and (max-width : 1200px)  { 
          /* all iPad models */
          .background-clock {
                font-size: 200%;  
          }
          .bg-host{
              /* font-size: 400%; */
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
                font-size: 300%;  
          }
          .bg-host{
              /* font-size: 333%; */
          }
      }

      /*
          Apple iPhone 5
      */

      @media screen and (min-width : 320px) and (max-width : 568px) { 
          /* iPhone 5 */
          .background-clock {
                margin-top: -25px;
                font-size: 222%;  
                width: 85%;
                text-align: center;
                padding: 10px;
                color: rgba(0,0,0,0.3);
          }
          .bg-host{
              font-size: 222%;
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
    <STYLE TYPE="text/css">
      {* Build CSS Based from DB Info *}
      /*{FOREACH from=$HTML.HEAD.STYLE item=style}
        {$style.element}{if $style.state != "" && $style.state != " "}:{$style.state}{/if}{
        {FOREACH from=$style.attr item=attr}
        {$attr.key} : {$attr.value};
        {/FOREACH}
      }
      {/FOREACH}*/
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
    {include "./scripts.html"}
  </head>
  <body class="background-dark">
    <!-- <iframe src="/x/html/layout/clouds/index.html" width="100%" height="100%" style="position: fixed; top: 0; border: 0; left: 0;"> -->
    <!-- </iframe>  -->
    <nav id="sidebar" class="sidebar nav-collapse collapse">
      <ul id="side-nav" class="side-nav">
        <li>
          <small class="label tile label-sm widget "
              data-original-title="Super Powered by" style="width: 100%; padding: 0px 0 0 0 ; margin-bottom: 10px; "
            >
            <!-- super powered by -->
            <!-- <br/> -->
            <a href="http://superdomx.com/" target="_blank">
              <img src="{$thumb}src=/bin/images/logos/sdx.png&w=150" style="max-width: 100%"/>
              <!-- <span class="badge badge-xs badge-default"> -->
              <!--   {$version} -->
              <!-- </span> -->
            </a>
          </small>
          <!-- <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a> -->
        </li>
        <li class="visible-xs" >
          <h3 class="text-center">
            {$HTTP_HOST}
          </h3>
        </li>
        <li class="active">
          <a href="/{$toBackDoor}"
            data-toggle="collapse"
            data-target=".sidebar"
          >
            <!-- <img src="/users/avatar" class="fa" height="16px" align="absmiddle" style="border-radius: 50px;" /> -->
            <style>
              .fa-spin { -webkit-filter: blur(0); }
            </style>
            <i class="fa fa-dashboard"></i>
            <span class="name">
              Dashboard
            </span>
          </a>
        </li>
        <!-- {counter start=0} -->
        {foreach $admin_menu as $key => $item}
          {assign var=children value=0}
          {foreach $xtraz as $x => $xtra}
            {if $xtra.icon && $key == $xtra.see && ($xtra.alpha == true || $xtra.beta == true || $xtra.delta == true || $xtra.omega == true)}
                {assign var=children value=1}
            {/if}
          {/foreach}
          {if $key && $children > 0}
            <li class="panel">
              <a class="accordion-toggle collapsed" data-toggle="collapse"
                data-parent="#side-nav" href="#{$key}-collapse" onclick="$($('.carousel-indicators li')[{counter}]).click()"><i class="fa fa-3x fa-{$key}"></i><span class="name">{$item.area|ucfirst}</span></a>
              <ul id="{$key}-collapse" class="panel-collapse collapse"> 
                  {foreach $xtraz as $x => $xtra}
                      {if $xtra.icon && $key == $xtra.see}
                          <!-- <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}">  --> 
                          {if $xtra.alpha || $xtra.beta || $xtra.delta || $xtra.omega}
                              <li> 
                                  <a href="/x/{$xtra.link}" title="{$xtra.desc}"
                                    data-placement="top" 
                                    data-original-title="{$xtra.desc}"
                                    data-toggle="collapse"
                                    data-target=".sidebar"
                                  > 
                                  <i class="fa fa-2x fa-{$xtra.mini}"></i>
                                  <span>{$xtra.name}</span>
                                  </a>
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
                              </li>
                          {/if}
                      {/if}
                  {/foreach}
              </ul>
            </li> 
          {/if}
        {/foreach}
      </ul>
      <!-- <div id="sidebar-settings" class="settings"> -->
      <!--     <button type="button" -->
      <!--             data-value="icons" -->
      <!--             class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button> -->
      <!--     <button type="button" -->
      <!--       data-value="auto" -->
      <!--       class="btn-auto btn btn-transparent btn-sm"> -->
      <!--       <i class="fa fa-toggle-right fa-1x"></i> -->
      <!--     </button> -->
      <!-- </div>  -->
    </nav>
    <div class="wrap">
      <header class="page-header">
        <div class="navbar text-center">
          <ul class="nav navbar-nav navbar-left pull-left">
            <li class="visible-xs">
              <a href="#"
                class="btn-navbar"
                data-toggle="collapse"
                data-target=".sidebar"
                title="">
                  <i class="fa fa-bars"></i>
              </a>
            </li>
            <li class="visible-xs divider"></li>
            <li class="dropdown" data-original-title="Notifications">
                <a href="#" title="8 Notifications"
                  class="dropdown-toggle"
                  data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="count badge badge-danger">8</span>
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
          </ul>
          <div class="logo text-center hidden-xs pull-left">
            <h4  class="bg-host">
              {$HTTP_HOST}
            </h4>
          </div>
          <ul class="nav navbar-nav navbar-left pull-left ">
            <li class="hidden-xs">
              <a href="#" id="settings"
                title="Settings"
                data-toggle="popover"
                data-placement="bottom">
                  <i class="fa fa-sliders"></i>
              </a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right pull-right">
            <li class="dropdown">
              <a href="#" title="Account" id="account"
                class="dropdown-toggle"
                data-toggle="dropdown">
                  <i class="fa fa-user"></i>
              </a>
              <ul id="account-menu" class="dropdown-menu account" role="menu">
                <li role="presentation" class="account-picture">
                    <!-- <img src="/users/avatar" class="img-circle" alt=""> -->
                    <b>
                      {$user.username}
                    </b>
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
                        Messages 
                    </a>
                </li>
                <li ><a href="/{$toBackDoor}/login/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
            <li class="dropdown visible-xs">
              <a href="#" title="Messages" id="messages"
                class="dropdown-toggle"
                data-toggle="dropdown">
                  <i class="fa fa-comments-o"></i>
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
            <li class="visible-phone-landscape">
              <a href="#" id="search-toggle">
                <i class="fa fa-search"></i>
              </a>
            </li>
            <!-- <li class="divider hidden-xs"></li> -->
          </ul>
          <form id="search-form" class="navbar-form pull-right" role="search">
              <input type="search" class="search-query" placeholder="What is your command...?">
          </form>
          <ul class="nav navbar-nav navbar-right pull-right hidden-xs">
            <li class="dropdown">
              <a href="#" title="Messages" id="messages"
                class="dropdown-toggle"
                data-toggle="dropdown">
                  <i class="fa fa-comments-o"></i>
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
          </ul>

          <div class="background-clock hidden" >
              {include file="../../~blox/clock.tpl"}
          </div>
        </div>
      </header>
      <div class="loader-wrap hiding hide">
        <i class="loader"></i>
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

            .loader {
              position          : absolute;
              left              : 45%;
              top               : 35%;
              width             : 100px;
              height            : 100px;
              background-image  : url("/bin/images/loading/sdxis.png");
              -webkit-animation : loaderSprite 1s steps(25, end) infinite;
              -moz-animation    : loaderSprite 1s steps(25, end) infinite;
              animation         : loaderSprite 1s steps(25, end) infinite;
            }

            @media (max-width: 480px) {
              .loader {
                left              : 35%;
                top               : 35%;
              }
            }
            @media (max-width: 767px) {
              .btn-xs-block{
                display: block;
                width: 100%;
                margin: 0px 0 10px 0;
              }
            }
        </style>
      </div>
      <div class="content container" id="container" data-pjax-container>
          {assign var="WT" value="/x/html/layout/watchtower/"}
          {if $TPL_EXISTS && $Xtra != '' AND $method  != '' AND ($Xtra != 'index')}
              {include file="layout/$LAYOUT/x.nav.tpl"}
              {include file="../../../{$suite}/x{$Xtra|ucfirst}/$method.tpl" assign=PORTAL}
          {else if $HTML.BODY.HTML == ''}
              {include file="../../$Door/portal.tpl" assign=PORTAL}
          {/if}
          {$HTML.BODY.HTML = $PORTAL}
          {$HTML.BODY.HTML} 
      </div>
    </div>
  </body>
</html>
