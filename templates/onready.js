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
  {google_sheet read=$cfg.fallen.value var="fallen" full_sheet=true}
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    googleCalendarApiKey: '{$cfg.apikey.value}',
    eventClick : function(event){
      if('#' == event.url){
        populate_and_open_modal(event, 'modal-content-fallen'+event.id);
        return false;
      }
    },
    events : [
      {foreach $fallen as $k => $v}
        {
          title: '{$v.kitkia} {$v.name}',
          start: new Date('{$v.dday}'),
          repeat: 'annually',
          id   : '{$v.id}',
          url  : '#', 
          allDay: true
        },
      {/foreach}
    ]
    // events: {
    //   googleCalendarId: '',
    //   className: 'gcal-event' // an option!
    // }
  });
  $('#calendar').fullCalendar('addEventSource', '{$cfg.calendarid.value}');

  $('.stripe-button-el').addClass(' btn btn-outline-inverse btn-lg ').removeClass('stripe-button-el');

});
