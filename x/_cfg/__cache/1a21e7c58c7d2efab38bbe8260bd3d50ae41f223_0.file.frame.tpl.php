<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 21:10:48
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/frame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57829db82d2b59_45575893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a21e7c58c7d2efab38bbe8260bd3d50ae41f223' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/frame.tpl',
      1 => 1468131676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./scripts.html' => 1,
    'file:../../~blox/clock.tpl' => 1,
    'file:layout/".((string)$_smarty_tpl->tpl_vars[\'LAYOUT\']->value)."/x.nav.tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
    'file:../../".((string)$_smarty_tpl->tpl_vars[\'Door\']->value)."/portal.tpl' => 1,
  ),
),false)) {
function content_57829db82d2b59_45575893 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.counter.php';
?>
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
    
    <?php if ($_smarty_tpl->tpl_vars['HTML']->value['HEAD']['CSS'] != '') {?>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['CSS'];?>
">
    <?php }?> 

    <?php if ($_smarty_tpl->tpl_vars['HTML']->value['HEAD']['JS'] != '') {?>
    <!--
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['JS'];?>
"></SCRIPT>
    -->
    <?php }?> 

    
    <style type="text/css">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value['ADMIN']['AREAS_ICO'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        .fa-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:before{
          content: "\<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
";
        }
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </style>
    
    <style type="text/css">
      @media all {
        /* all devices */
        .background-clock {
          color              : rgba(0,0,0,0.15);
          position           : fixed;
          font-size          : 500%;
          z-index            : -1;
          bottom: 15px; 
          right: 25px;
          -webkit-transition : all .4s ease-in-out;
          transition         : all .4s ease-in-out;
        }
        .zo {
          position: absolute;
          /* color: rgba(0,0,0,.15); */
          /* top: -23px; */
          left: -65px;
          /* font-size: 150%; */

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
      
      /*<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['STYLE'], 'style');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['style']->value['element'];
if ($_smarty_tpl->tpl_vars['style']->value['state'] != '' && $_smarty_tpl->tpl_vars['style']->value['state'] != " ") {?>:<?php echo $_smarty_tpl->tpl_vars['style']->value['state'];
}?>{
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['style']->value['attr'], 'attr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['attr']->value['key'];?>
 : <?php echo $_smarty_tpl->tpl_vars['attr']->value['value'];?>
;
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      }
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
*/
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
    <?php $_smarty_tpl->_subTemplateRender("file:./scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </head>
  <body class="background-dark">
    <!-- <iframe src="/x/html/layout/clouds/index.html" width="100%" height="100%" style="position: fixed; top: 0; border: 0; left: 0;"> -->
    <!-- </iframe>  -->
    <small class="label tile label-sm widget hidden-xs hidden-sm " style="position: fixed; bottom: 0; left: 0; width: 120px;
        margin: 23px 35px 23px 23px;">
      super powered by
      <br/>
      <a href="http://superdomx.com/" target="_blank">
        <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=150" style="max-width: 100%"/>
      </a>
    </small>
    <div class="background-clock" >
        <?php $_smarty_tpl->_subTemplateRender("file:../../~blox/clock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
      <ul id="side-nav" class="side-nav">
        <li class="visible-xs" >
          <h3 class="name text-center">
            <?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>

          </h3>
        </li>
        <li class="active">
          <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
"
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
        <!-- <?php echo smarty_function_counter(array('start'=>0),$_smarty_tpl);?>
 -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
          <?php $_smarty_tpl->_assignInScope('children', 0);
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtraz']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see'] && ($_smarty_tpl->tpl_vars['xtra']->value['alpha'] == true || $_smarty_tpl->tpl_vars['xtra']->value['beta'] == true || $_smarty_tpl->tpl_vars['xtra']->value['delta'] == true || $_smarty_tpl->tpl_vars['xtra']->value['omega'] == true)) {?>
                  <?php $_smarty_tpl->_assignInScope('children', 1);
?>
              <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          <?php if ($_smarty_tpl->tpl_vars['key']->value && $_smarty_tpl->tpl_vars['children']->value > 0) {?>
            <li class="panel">
              <a class="accordion-toggle collapsed" data-toggle="collapse"
                data-parent="#side-nav" href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-collapse" onclick="$($('.carousel-indicators li')[<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
]).click()"><i class="fa fa-3x fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i><span class="name"><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</span></a>
              <ul id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-collapse" class="panel-collapse collapse"> 
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtraz']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                          <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];
echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" link="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" file="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" icon="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
">  --> 
                          <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha'] || $_smarty_tpl->tpl_vars['xtra']->value['beta'] || $_smarty_tpl->tpl_vars['xtra']->value['delta'] || $_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>
                              <li> 
                                  <a href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"
                                    data-placement="top" 
                                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"
                                    data-toggle="collapse"
                                    data-target=".sidebar"
                                  > 
                                  <i class="fa fa-2x fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i>
                                  <span><?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
</span>
                                  </a>
                                  <!-- <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>
                                      <span class="label label-danger">&alpha;</span>
                                  <?php }?>
                                  <?php if ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>
                                      <span class="label label-warning">&beta;</span>
                                  <?php }?>
                                  <?php if ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>
                                      <span class="label label-success">&Delta;</span>
                                  <?php }?>
                                  <?php if ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>
                                      <span class="label label-primary">&Omega;</span>
                                  <?php }?> -->
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

        <!-- <li class="visible-xs"> -->
        <!--     <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a> -->
        <!-- </li> -->
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
        <div class="navbar">
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
            <li class="dropdown">
                <a href="#" title="8 Notifications"
                  class="dropdown-toggle"
                  data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
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
          </ul>
          <div class="logo text-center hidden-xs pull-left">
            <h4  class="bg-host">
              <?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>

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
                      <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

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
                <li ><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
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
          <?php $_smarty_tpl->_assignInScope('WT', "/x/html/layout/watchtower/");
?>
          <?php if ($_smarty_tpl->tpl_vars['TPL_EXISTS']->value && $_smarty_tpl->tpl_vars['Xtra']->value != '' && $_smarty_tpl->tpl_vars['method']->value != '' && ($_smarty_tpl->tpl_vars['Xtra']->value != 'index')) {?>
              <?php $_smarty_tpl->_subTemplateRender("file:layout/".((string)$_smarty_tpl->tpl_vars['LAYOUT']->value)."/x.nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

              <?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('PORTAL', ob_get_clean());
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] == '') {?>
              <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../../".((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('PORTAL', ob_get_clean());
?>

          <?php }?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['HTML']) ? $_smarty_tpl->tpl_vars['HTML']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['BODY']['HTML'] = $_smarty_tpl->tpl_vars['PORTAL']->value;
$_smarty_tpl->_assignInScope('HTML', $_tmp_array);
?>
          <?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'];?>
 
      </div>
    </div>
  </body>
</html>
<?php }
}
