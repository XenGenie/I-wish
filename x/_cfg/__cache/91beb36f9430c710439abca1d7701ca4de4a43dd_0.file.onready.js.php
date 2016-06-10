<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:56
  from "/home/xopher/www/superdomx.com/templates/onready.js" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc4af7a66_96686872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91beb36f9430c710439abca1d7701ca4de4a43dd' => 
    array (
      0 => '/home/xopher/www/superdomx.com/templates/onready.js',
      1 => 1457941755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc4af7a66_96686872 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_google_sheet')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.google_sheet.php';
?>
function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
$(function() { // document ready
  <?php echo smarty_function_google_sheet(array('read'=>$_smarty_tpl->tpl_vars['cfg']->value['fallen']['value'],'var'=>"fallen",'full_sheet'=>true),$_smarty_tpl);?>

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    googleCalendarApiKey: '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['apikey']['value'];?>
',
    eventClick : function(event){
      if('#' == event.url){
        populate_and_open_modal(event, 'modal-content-fallen'+event.id);
        return false;
      }
    },
    events : [
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fallen']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        {
          title: '<?php echo $_smarty_tpl->tpl_vars['v']->value['kitkia'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
',
          start: new Date('<?php echo $_smarty_tpl->tpl_vars['v']->value['dday'];?>
'),
          repeat: 'annually',
          id   : '<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',
          url  : '#', 
          allDay: true
        },
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    ]
    // events: {
    //   googleCalendarId: '',
    //   className: 'gcal-event' // an option!
    // }
  });
  $('#calendar').fullCalendar('addEventSource', '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['calendarid']['value'];?>
');

  $('.stripe-button-el').addClass(' btn btn-outline-inverse btn-lg ').removeClass('stripe-button-el');

});
<?php }
}
