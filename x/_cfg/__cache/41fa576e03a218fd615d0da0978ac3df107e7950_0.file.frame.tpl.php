<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-04 12:41:38
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/frame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577a3d623bc814_43600706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fa576e03a218fd615d0da0978ac3df107e7950' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/frame.tpl',
      1 => 1467628535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../~blox/clock.tpl' => 1,
    'file:~blox/ajax/save.x.tpl' => 1,
    'file:layout/".((string)$_smarty_tpl->tpl_vars[\'LAYOUT\']->value)."/x.nav.tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'suite\']->value)."/x".$_prefixVariable1."/".((string)$_smarty_tpl->tpl_vars[\'method\']->value).".tpl' => 1,
    'file:../../".((string)$_smarty_tpl->tpl_vars[\'Door\']->value)."/portal.tpl' => 1,
  ),
),false)) {
function content_577a3d623bc814_43600706 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="/bin/css/jetblack.bootstrap.css">
    <link href="/x/html/layout/watchtower/css/application.css" rel="stylesheet">
    <link rel="stylesheet" href="/bin/css/font-awesome.css">

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
            font-size: 350%; 
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
              font-size: 400%;
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
              font-size: 333%;
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
  </head>
  <body class="background-dark">
    <!--
      <iframe src="/x/html/layout/clouds/index.html" width="100%" height="100%" style="position: fixed; top: 0; border: 0; left: 0;">
      </iframe> 
    -->
    <small class="label tile label-sm widget hidden-xs " style="position: fixed; bottom: 0; left: 0; width: 120px;
        margin: 23px 35px 23px 23px;">
      super powered by
      <br/>
      <a href="http://superdomx.com/" target="_blank">
        <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=150" style="max-width: 100%"/>
      </a>
    </small>
    <div class="logo text-center hidden-xs">
      <h4  class="bg-host">
        <?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>

      </h4>
    </div>
    <div class="background-clock" >
        <?php $_smarty_tpl->_subTemplateRender("file:../../~blox/clock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
      <ul id="side-nav" class="side-nav">
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
            <i class="fa fa-home"></i>
            <span class="name">
              Welcome
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
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

        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
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
          <ul class="nav navbar-nav navbar-right pull-right">
              <li class="visible-phone-landscape">
                  <a href="#" id="search-toggle">
                      <i class="fa fa-search"></i>
                  </a>
              </li>
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
              <li class="dropdown">
                  <a href="#" title="8 support tickets"
                    class="dropdown-toggle"
                    data-toggle="dropdown">
                      <i class="fa fa-ticket"></i>
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
              <li class="divider"></li>
              <li class="hidden-xs">
                  <a href="#" id="settings"
                    title="Settings"
                    data-toggle="popover"
                    data-placement="bottom">
                      <i class="fa fa-cog"></i>
                  </a>
              </li>
              <li class="hidden-xs dropdown">
                  <a href="#" title="Account" id="account"
                    class="dropdown-toggle"
                    data-toggle="dropdown">
                      <i class="fa fa-user"></i>
                  </a>
                  <ul id="account-menu" class="dropdown-menu account" role="menu">
                      <li role="presentation" class="account-picture">
                          <!-- <img src="/users/avatar" class="img-circle" alt=""> -->
                          <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

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
              <li class=" hidden-xs">
                  <a href="/" data-widgster="fullscreen" title="Full Screen" >
                      <i class="fa fa-globe"></i>
                  </a>
              </li>
              <li class="hidden-xs"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/logout"><i class="fa fa-sign-out"></i></a></li>
          </ul>
          <form id="search-form" class="navbar-form pull-right" role="search">
              <input type="search" class="search-query" placeholder="Search...">
          </form>
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

              .btn-xs-block{
                display: block; 
                width: 100%;
                margin: 0px 0 10px 0;
              }

            }
        </style>
      </div>
      <?php echo '<script'; ?>
 type="text/template" id="message-template">
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
                <?php echo '<%';?>- text <?php echo '%>';?>
            </div>
        </div>
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/template" id="settings-template"> 
        <div class="setting clearfix text-align-center">
            <div>Sidebar on the</div>
            <div id="sidebar-toggle" class="btn-group" data-toggle="buttons-radio">
                <?php echo '<%';?> onRight = sidebar == 'right'<?php echo '%>';?>
                <button type="button" data-value="left" class="btn btn-sm btn-transparent <?php echo '<%';?>= onRight? '' : 'active' <?php echo '%>';?>">Left</button>
                <button type="button" data-value="right" class="btn btn-sm btn-transparent <?php echo '<%';?>= onRight? 'active' : '' <?php echo '%>';?>">Right</button>
            </div>
        </div>
        <div class="setting clearfix text-align-center">
            <div>Sidebar</div>
            <div id="display-sidebar-toggle" class=" btn-group" data-toggle="buttons-radio">
                <?php echo '<%';?> display = displaySidebar<?php echo '%>';?>
                <button type="button" data-value="true" class="btn btn-sm btn-transparent <?php echo '<%';?>= display? 'active' : '' <?php echo '%>';?>">Show</button>
                <button type="button" data-value="false" class="btn btn-sm btn-transparent <?php echo '<%';?>= display? '' : 'active' <?php echo '%>';?>">Hide</button>
            </div>
        </div> 
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/template" id="sidebar-settings-template">
        <?php echo '<%';?> auto = sidebarState == 'auto'<?php echo '%>';?>
        <?php echo '<%';?> if (auto) { <?php echo '%>';?>
        <button type="button"
                data-value="icons"
                class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button>
        <button type="button"
                data-value="auto"
                class="btn-auto btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
        <?php echo '<%';?>} else { <?php echo '%>';?>
        <button type="button"
                data-value="auto"
                class="btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
        <?php echo '<%';?> } <?php echo '%>';?>
      <?php echo '</script'; ?>
>

      <?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS'] != '') {?>
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS'];?>
"> -->
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'] != '') {?>
        <!-- script src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'];?>
"><?php echo '</script'; ?>
 -->
      <?php }?>

      <!-- jquery and friends -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery/jquery-2.0.3.min.js"> <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"><?php echo '</script'; ?>
>

      <!-- jquery plugins -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/icheck.js/jquery.icheck.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/sparkline/jquery.sparkline.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.slimscroll.js"><?php echo '</script'; ?>
> 
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> <?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/jquery.masonry.min.js"><?php echo '</script'; ?>
>   

      <!-- jquery plugins -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/parsley/parsley.js"> <?php echo '</script'; ?>
> 
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/select2.js"><?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/fullcalendar/fullcalendar.js"><?php echo '</script'; ?>
>
      <!-- d3, nvd3-->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/lib/d3.v2.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/nv.d3.custom.js"><?php echo '</script'; ?>
>

      <!-- nvd3 models -->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/scatter.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/axis.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/legend.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/stackedArea.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/stackedAreaChart.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/line.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/pie.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/pieChartTotal.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/stream_layers.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/lineChart.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBar.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBarChart.js"><?php echo '</script'; ?>
>

      <!--backbone and friends -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/underscore-min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone-min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone.localStorage-min.js"><?php echo '</script'; ?>
>

      <!-- bootstrap default plugins -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/transition.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/collapse.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/alert.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tooltip.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/popover.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/button.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tab.js"> <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/dropdown.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/modal.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tab.js"> <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
> 
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/carousel.js"><?php echo '</script'; ?>
>
      <?php $_smarty_tpl->_assignInScope('lib', '/x/html/layout/watchtower/lib');
?>
      <!-- page specific libs -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/bootstrap-select/dist/js/bootstrap-select.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/underscore/underscore.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/backbone/backbone.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/backbone.paginator/lib/backbone.paginator.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/backgrid/lib/backgrid.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/backgrid-paginator/backgrid-paginator.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

      <!-- bootstrap custom plugins -->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.bootstrap.wizard.js"><?php echo '</script'; ?>
>


      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/wysihtml5/wysihtml5-0.3.0_rc2.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/vendor/jquery.ui.widget.js"><?php echo '</script'; ?>
>
      <!-- The Templates plugin is included to render the upload/download listings -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/vendor/http_blueimp.github.io_JavaScript-Templates_js_tmpl.js"><?php echo '</script'; ?>
>
      <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/vendor/http_blueimp.github.io_JavaScript-Load-Image_js_load-image.js"><?php echo '</script'; ?>
>
      <!-- The Canvas to Blob plugin is included for image resizing functionality -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/vendor/http_blueimp.github.io_JavaScript-Canvas-to-Blob_js_canvas-to-blob.js"><?php echo '</script'; ?>
>
      <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
      <!-- The basic File Upload plugin -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.fileupload.js"><?php echo '</script'; ?>
>
      <!-- The File Upload file processing plugin -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.fileupload-fp.js"><?php echo '</script'; ?>
>
      <!-- The File Upload user interface plugin -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.fileupload-ui.js"><?php echo '</script'; ?>
>

      <!-- bootstrap custom plugins -->
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/wysihtml5/wysihtml5-0.3.0_rc2.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"><?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/gmap3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.vmap.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.vmap.world.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.vmap.europe.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.vmap.usa.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/jquery.vmap.australia.js"><?php echo '</script'; ?>
>

      <!-- basic application js-->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/app.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/settings.js"><?php echo '</script'; ?>
> 

      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
>
      <!-- page-specifig js-->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/maps.js"><?php echo '</script'; ?>
>
      <!-- page specific libs -->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/messenger-1.4.1/messenger.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/messenger-1.4.1/messenger-theme-flat.js"><?php echo '</script'; ?>
>

      <!-- demo-only libs -->
      <!-- // <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/backbone/backbone-min.js"><?php echo '</script'; ?>
> -->
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/lib/messenger-1.4.1/docs/welcome/javascripts/location-sel.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/ui-notifications.js"><?php echo '</script'; ?>
>

      <?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['Door']->value)."/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('SCRIPT', ob_get_clean());
?>


      <?php echo '<script'; ?>
 type="text/javascript"> 
      /**
      * jQuery serializeObject
      * @copyright 2014, macek <paulmacek@gmail.com>
      * @link https://github.com/macek/jquery-serialize-object
      * @license BSD
      * @version 2.3.0
      */
      
      !function(e,i){if("function"==typeof define&&define.amd)define(["jquery","exports"],function(r,t){i(e,t,r)});else if("undefined"!=typeof exports){var r=require("jquery");i(e,exports,r)}else e.FormSerializer=i(e,{},e.jQuery||e.Zepto||e.ender||e.$)}(this,function(e,i,r){function t(e){function i(e,i,r){return e[i]=r,e}function r(e,r){for(var a,s=e.match(n.key);void 0!==(a=s.pop());)if(n.push.test(a)){var o=t(e.replace(/\[\]$/,""));r=i([],o,r)}else n.fixed.test(a)?r=i([],a,r):n.named.test(a)&&(r=i({},a,r));return r}function t(e){return void 0===d[e]&&(d[e]=0),d[e]++}function a(i){if(!n.validate.test(i.name))return this;var t=r(i.name,i.value);return u=e.extend(!0,u,t),this}function s(i){if(!e.isArray(i))throw new Error("formSerializer.addPairs expects an Array");for(var r=0,t=i.length;t>r;r++)this.addPair(i[r]);return this}function o(){return u}function f(){return JSON.stringify(o())}var u={},d={};this.addPair=a,this.addPairs=s,this.serialize=o,this.serializeJSON=f}var n={validate:/^[a-z][a-z0-9_]*(?:\[(?:\d*|[a-z0-9_]+)\])*$/i,key:/[a-z0-9_]+|(?=\[\])/gi,push:/^$/,fixed:/^\d+$/,named:/^[a-z0-9_]+$/i};return t.patterns=n,t.serializeObject=function(){return this.length>1?new Error("jquery-serialize-object can only serialize one form at a time"):new t(r).addPairs(this.serializeArray()).serialize()},t.serializeJSON=function(){return this.length>1?new Error("jquery-serialize-object can only serialize one form at a time"):new t(r).addPairs(this.serializeArray()).serializeJSON()},"undefined"!=typeof r.fn&&(r.fn.serializeObject=t.serializeObject,r.fn.serializeJSON=t.serializeJSON),i.FormSerializer=t,t});
      
      <?php echo '</script'; ?>
>

      <?php $_smarty_tpl->_subTemplateRender("file:~blox/ajax/save.x.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php echo '<script'; ?>
 type="text/javascript">
          $(function(){
              function loadScript() {
                  var script = document.createElement('script');
                  script.type = 'text/javascript';
                  script.src = 'http://maps.google.com/maps/api/js?sensor=false&language=en&' +
                      'callback=mapsPageLoad';
                  document.body.appendChild(script); 
              }
              loadScript();
          });

          window.addBloxToTower = function(t,p,c,i){

              var i = $(i).find('i');

              i.toggleClass('fa-eye');
              i.toggleClass('fa-eye-slash');

              $.ajax({
                  type     : "POST",
                  url      : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/blox/watchtower/add/.json",
                  data     : {
                      title   : t,
                      path    : p,
                      col     : c,
                      user_id : 0 + "<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"
                  },
                  dataType : "json",
                  success: function(data)
                  {
                    // Handle the server response (display errors if necessary)

                    if(data.success){  

                    }else{
                      alert(data.error);
                    }
                  }
              });


          };


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
              window.gridBlox();
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
              // $("body").append('<a title="Show/Hide Theme Changer" class="widget" href="#" id="theme-changer" style="position: fixed;display: inline-block;top: 0px;left: 0;width: 40px;line-height: 40px; padding: 0px; border-radius: 0 3px 3px 0;color: white;z-index: 1003;text-align: center;font-size: 1.5em;text-decoration: none!important"><i class="fa fa-cloud"><\/i><\/a><div class="theme-changer-colors theme-changer-hidden widget" style="border:0px solid rgb(238, 238, 238);visibility: hidden;opacity: 0;position: fixed;top: 40px;left: -170px;width: 150px;padding: 10px;text-align: center;z-index: 1002;border-radius: 0 3px 3px 0;background-color: rgba(77, 77, 77, 0.23);-moz-transition-duration: .4s;-o-transition-duration: .4s;-webkit-transition-duration: .4s;transition-duration: .4s;">' + i + "<\/div>");
              
              // $("body").append('<a href="#" id="settings" title="Settings" data-toggle="popover" data-placement="bottom" style="position: fixed;display: inline-block;top: 40px;left: 0px;width: 40px;line-height: 40px; padding: 0px; border-radius: 0 3px 3px 0;color: white;z-index: 1003;text-align: center;font-size: 1.5em;text-decoration: none!important;background-color: rgba(77, 77, 77, 0.23)"><i class="fa fa-cog"><\/i><\/a>');

              var btn = $('<button/>').addClass('btn btn-primary active btn-block').css({ marginBottom : '5px' }).html('<i class="fa fa-cloud"></i> Toggle Clouds').on('click',function(){
                  $('iframe').toggleClass('hidden');
                  $(this).toggleClass('active');
              });

              $('.theme-changer-colors').prepend(btn);
              

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
                  var i = $(this).data("color");

                  $('body').css({
                      background : c 
                  });

                  // $("[data-id-stylesheet]").attr("href", t);
                  $.cookie("theme_css_cookie", c.toString(), {
                      expires: 1
                  });
              })
          });
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.nestable.js"> <?php echo '</script'; ?>
>
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
