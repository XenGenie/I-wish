<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:32:24
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/tables_dynamic.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f02a8271597_15498261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77f7256fee3c3b40093574f5301ce270b65a83e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/tables_dynamic.html',
      1 => 1467941540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f02a8271597_15498261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Admin Template</title>
    <link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="background-dark">
<div class="logo">
    <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li >
            <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-edit"></i> <span class="name">Forms</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse">
                <li><a href="form_account.html">Account</a></li>
                <li><a href="form_article.html">Article</a></li>
                <li><a href="form_elements.html">Elements</a></li>
                <li><a href="form_validation.html">Validation</a></li>
                <li><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-bar-chart-o"></i> <span class="name">Statistics</span></a>
            <ul id="stats-collapse" class="panel-collapse collapse">
                <li><a href="stat_statistics.html">Stats</a></li>
                <li><a href="stat_charts.html">Charts</a></li>
                <li><a href="stat_realtime.html">Realtime</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
            <ul id="ui-collapse" class="panel-collapse collapse">
                <li><a href="ui_buttons.html">Buttons</a></li>
                <li><a href="ui_dialogs.html">Dialogs</a></li>
                <li><a href="ui_notifications.html">Notifications &nbsp;<span class="label label-danger">new</span></a></li>
                <li><a href="ui_icons.html">Icons</a></li>
                <li><a href="ui_tabs.html">Tabs</a></li>
                <li><a href="ui_accordion.html">Accordion</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-bookmark-o"></i> <span class="name">Components</span></a>
            <ul id="components-collapse" class="panel-collapse collapse">
                <li><a href="component_calendar.html">Calendar</a></li>
                <li><a href="component_maps.html" data-no-pjax>Maps</a></li>
                <li><a href="component_gallery.html">Gallery</a></li>
                <li><a href="component_fileupload.html">Fileupload</a></li>
                <li><a href="component_bootstrap.html">Bootstrap &nbsp; <span class="label label-important">new</span></a></li>
                <li><a href="component_list_groups.html">List Groups &nbsp; <span class="label label-important">new</span></a></li>
            </ul>
        </li>
        <li class="active panel">
            <a class="accordion-toggle" data-toggle="collapse"
               data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-table"></i> <span class="name">Tables</span></a>
            <ul id="tables-collapse" class="panel-collapse in">
                <li><a href="tables_static.html">Static</a></li>
                <li class="active"><a href="tables_dynamic.html">Dynamic</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-bars"></i> <span class="name">Widgets &nbsp; <span class="label label-info">new</span></span></a>
            <ul id="grid-collapse" class="panel-collapse collapse">
                <li><a href="grid.html">Basic</a></li>
                <li><a href="grid_live.html">Live &nbsp; <span class="label label-important">hot</span></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#special-collapse"><i class="fa fa-asterisk"></i> <span class="name">Special</span></a>
            <ul id="special-collapse" class="panel-collapse collapse">
                <li><a href="special_search.html">Search</a></li>
                <li><a href="special_invoice.html">Invoice</a></li>
                <li><a href="special_inbox.html">Inbox <span class="label label-important">3</span></a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="special_404.html">404</a></li>
                <li><a href="landing.html" data-no-pjax>Landing</a></li>
                <li><a href="white/index.html" data-no-pjax>White <i class="fa fa-external-link-square"></i></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-code-fork"></i> <span class="name">Menu Levels</span></a>
            <ul id="menu-levels-collapse" class="panel-collapse collapse">
                <li><a href="#">Item 1.1</a></li>
                <li><a href="#">Item 1.2</a></li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                    <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                        <li><a href="#">Item 2.1</a></li>
                        <li><a href="#">Item 2.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-2-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                            <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.1</a></li>
                                <li><a href="#">Item 3.2</a></li>
                                <li><a href="#">Item 3.3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
    <div id="sidebar-settings" class="settings">
        <button type="button"
                data-value="icons"
                class="btn-icons btn btn-transparent btn-sm">Icons</button>
        <button type="button"
                data-value="auto"
                class="btn-auto btn btn-transparent btn-sm">Auto</button>
    </div>
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
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.jpg" alt="">
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
                                    <img src="img/2.jpg" alt="">
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
                                    <img src="img/3.jpg" alt="">
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
                                <img src="img/2.jpg" alt="">
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
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="search-query" placeholder="Search...">
                </form>
        </div>
    </header>
    <div class="content container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Dynamic Tables <small>Asynchronously loaded content</small></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-file-alt"></i>
                            Dynamic table
                        </h4>
                        <div class="actions hidden-xs-portrait">
                            <input id="search" type="search" placeholder="Enter country">
                        </div>
                    </header>
                    <div class="body">
                        <blockquote class="blockquote-sm">
                            Editable, validatable, filterable and sortable table made with
                            <a href="http://backgridjs.com/" target="_blank">Backgrid.js</a>
                        </blockquote>
                        <div id="table-dynamic">

                        </div>
                        <div>
                            <button class="btn btn-warning">
                                <i class="fa fa-plus"></i>
                                Add new
                            </button>
                            <button class="btn btn-inverse">
                                <i class="fa fa-refresh"></i>
                                Refresh
                            </button>
                            <button class="btn btn-inverse">
                                <i class="fa fa-exchange"></i>
                                Test connection
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-file-alt"></i>
                            jQuery DataTables
                        </h4>
                    </header>
                    <div class="body">
                        <blockquote class="blockquote-sm">
                            Column sorting, live search, pagination. Built with
                            <a href="http://www.datatables.net/" target="_blank">jQuery DataTables</a>
                        </blockquote>
                        <table id="datatable-table" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="no-sort">Icon</th>
                                <th>Name</th>
                                <th class="no-sort hidden-phone-landscape">Info</th>
                                <th>Description</th>
                                <th class="hidden-phone-landscape">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><i class="fa fa-qrcode fa-2x"></i></td>
                                <td><strong>Algerd</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; JPEG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 200x150
                                    </small>
                                </td>
                                <td><a href="#">Palo Alto</a></td>
                                <td class="hidden-phone-landscape">June 27, 2013</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><i class="fa fa-wrench fa-2x"></i></td>
                                <td><strong>Vitaut</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; PNG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 6433x4522
                                    </small>
                                </td>
                                <td><a href="#">Vilnia</a></td>
                                <td class="hidden-phone-landscape">January 1, 1442</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><i class="fa fa-envelope-o fa-2x"></i></td>
                                <td><strong>Honar</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; AVI
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 1440x980
                                    </small>
                                </td>
                                <td><a href="#">Berlin</a></td>
                                <td class="hidden-phone-landscape">August 6, 2013</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><i class="fa fa-random fa-2x"></i></td>
                                <td><strong>Jack</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; PNG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 12x43
                                    </small>
                                </td>
                                <td><a href="#">San Francisco</a></td>
                                <td class="hidden-phone-landscape">August 19, 2013</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><i class="fa fa-tags fa-2x"></i></td>
                                <td><strong>Leon</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; MP4
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 800x480
                                    </small>
                                </td>
                                <td><a href="#">Brasilia</a></td>
                                <td class="hidden-phone-landscape">October 1, 2013</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><i class="fa fa-inbox fa-2x"></i></td>
                                <td><strong>Max</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; TXT
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Helsinki</a></td>
                                <td class="hidden-phone-landscape">October 29, 2013</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><i class="fa fa-power-off fa-2x"></i></td>
                                <td><strong>Pol</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; MOV
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 640x480
                                    </small>
                                </td>
                                <td><a href="#">Radashkovichi</a></td>
                                <td class="hidden-phone-landscape">November 11, 2013</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><i class="fa fa-phone fa-2x"></i></td>
                                <td><strong>Chrishna</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; DOC
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Mumbai</a></td>
                                <td class="hidden-phone-landscape">December 2, 2013</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><i class="fa fa-asterisk fa-2x"></i></td>
                                <td><strong>Leslie</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; AVI
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 4820x2140
                                    </small>
                                </td>
                                <td><a href="#">Singapore</a></td>
                                <td class="hidden-phone-landscape">December 6, 2013</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><i class="fa fa-star fa-2x"></i></td>
                                <td><strong>David</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; XML
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Portland</a></td>
                                <td class="hidden-phone-landscape">December 13, 2013</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><i class="fa fa-dashboard fa-2x"></i></td>
                                <td><strong>Andrej</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; VOB
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 6433x4522
                                    </small>
                                </td>
                                <td><a href="#">Minsk</a></td>
                                <td class="hidden-phone-landscape">December 14, 2013</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><i class="fa fa-fighter-jet fa-2x"></i></td>
                                <td><strong>Julia</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; JPEG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 40x40
                                    </small>
                                </td>
                                <td><a href="#">Hrodna</a></td>
                                <td class="hidden-phone-landscape">July 9, 2012</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td><i class="fa fa-group fa-2x"></i></td>
                                <td><strong>Ihnat</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; JAVA
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Los Angeles</a></td>
                                <td class="hidden-phone-landscape">August 2, 2012</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td><i class="fa fa-home fa-2x"></i></td>
                                <td><strong>Abraham</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; DOCX
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Panama</a></td>
                                <td class="hidden-phone-landscape">September 3, 2012</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td><i class="fa fa-key fa-2x"></i></td>
                                <td><strong>Tomas</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; JPEG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 1800x1420
                                    </small>
                                </td>
                                <td><a href="#">Amsterdam</a></td>
                                <td class="hidden-phone-landscape">November 13, 2012</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td><i class="fa fa-link fa-2x"></i></td>
                                <td><strong>Scott</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; PNG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 240x460
                                    </small>
                                </td>
                                <td><a href="#">Sluck</a></td>
                                <td class="hidden-phone-landscape">December 5, 2012</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td><i class="fa fa-search-plus fa-2x"></i></td>
                                <td><strong>Pham</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; MAIL
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; -
                                    </small>
                                </td>
                                <td><a href="#">Tokyo</a></td>
                                <td class="hidden-phone-landscape">December 8, 2012</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td><i class="fa fa-chevron-right fa-2x"></i></td>
                                <td><strong>Peter</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; PNG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 8320x6400
                                    </small>
                                </td>
                                <td><a href="#">Cape Town</a></td>
                                <td class="hidden-phone-landscape">December 29, 2012</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td><i class="fa fa-volume-down fa-2x"></i></td>
                                <td><strong>Uladz'</strong></td>
                                <td class="hidden-phone-landscape">
                                    <small>
                                        <strong>Type:</strong>
                                        &nbsp; JPEG
                                    </small>
                                    <br>
                                    <small>
                                        <strong>Dimensions:</strong>
                                        &nbsp; 2200x1600
                                    </small>
                                </td>
                                <td><a href="#">Mahileu</a></td>
                                <td class="hidden-phone-landscape">December 7, 2013</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
</div>

<!-- jquery and friends -->
<?php echo '<script'; ?>
 src="lib/jquery/jquery-2.0.3.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/jquery-pjax/jquery.pjax.js"><?php echo '</script'; ?>
>


<!-- jquery plugins -->
<?php echo '<script'; ?>
 src="lib/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/parsley/parsley.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/icheck.js/jquery.icheck.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

<!--backbone and friends -->
<?php echo '<script'; ?>
 src="lib/backbone/underscore-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/backbone/backbone-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/backbone/backbone-pageable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/backgrid/backgrid.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/backgrid/backgrid-paginator.js"><?php echo '</script'; ?>
>

<!-- bootstrap default plugins -->
<?php echo '<script'; ?>
 src="lib/bootstrap/transition.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/collapse.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/alert.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/popover.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/button.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/dropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/modal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/bootstrap/tab.js"> <?php echo '</script'; ?>
>

<!-- basic application js-->
<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/settings.js"><?php echo '</script'; ?>
>

<!-- page-specific js -->
<?php echo '<script'; ?>
 src="js/tables-dynamic.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <?php echo '<%';?> dark = background == 'dark'; light = background == 'light';<?php echo '%>';?>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <?php echo '<%';?>= dark? 'active' : '' <?php echo '%>';?>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <?php echo '<%';?>= light? 'active' : '' <?php echo '%>';?>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <?php echo '<%';?> onRight = sidebar == 'right'<?php echo '%>';?>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <?php echo '<%';?>= onRight? '' : 'active' <?php echo '%>';?>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <?php echo '<%';?>= onRight? 'active' : '' <?php echo '%>';?>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <?php echo '<%';?> display = displaySidebar<?php echo '%>';?>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <?php echo '<%';?>= display? 'active' : '' <?php echo '%>';?>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <?php echo '<%';?>= display? '' : 'active' <?php echo '%>';?>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="white/" class="btn btn-sm btn-transparent">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/template" id="sidebar-settings-template">
        <?php echo '<%'; ?>
 auto = sidebarState == 'auto'<?php echo '%>'; ?>

        <?php echo '<%'; ?>
 if (auto) {<?php echo '%>'; ?>

            <button type="button"
                    data-value="icons"
                    class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
        <?php echo '<%'; ?>
} else {<?php echo '%>'; ?>

            <button type="button"
                    data-value="auto"
                    class="btn btn-transparent btn-sm">Auto</button>
        <?php echo '<%'; ?>
 } <?php echo '%>'; ?>

<?php echo '</script'; ?>
>




</body>
<?php }
}
