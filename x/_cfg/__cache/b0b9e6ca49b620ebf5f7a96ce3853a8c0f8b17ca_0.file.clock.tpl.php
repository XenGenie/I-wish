<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 11:38:54
  from "/home/xopher/www/superdomx.com/x/html/~blox/clock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578217ae89d987_22079383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b9e6ca49b620ebf5f7a96ce3853a8c0f8b17ca' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/clock.tpl',
      1 => 1464645069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578217ae89d987_22079383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="clock" align="center" style="display: inline-block">
	<!-- <img title="<?php echo $_smarty_tpl->tpl_vars['SUPERDOMX']->value['version'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=15&q=100&f=png" align="absmiddle"/> -->
	<div id="time"></div>  
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	
	var BLINK_CLOCK = false;

	var clock = {
		setClock : function (time) {
			clock.time = new Date(time);
		},
		time : function () {
			return new Date();
		}
	};

	function updateClock ( )
	{
	  var currentTime = clock.time();
	
	  var currentHours = currentTime.getHours ( );
	  var currentMinutes = currentTime.getMinutes ( );
	  var currentSeconds = currentTime.getSeconds ( );
	
	  // Pad the minutes and seconds with leading zeros, if required
	  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
	  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
	
	  // Choose either "AM" or "PM" as appropriate
	  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
	
	  // Convert the hours component to 12-hour format if needed
	  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
	
	  // Convert an hours component of "0" to "12"
	  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

	  var blink = (BLINK_CLOCK) ? ':' : ':';
	  BLINK_CLOCK = (BLINK_CLOCK) ? false : true;
		var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
		var month = ['January','February','March','April','May','June','July','August','September','October','November','December'];


		var d = clock.time();
		// var month=new Array(12);
		// month[0]="January";
		// month[1]="February";
		// month[2]="March";
		// month[3]="April";
		// month[4]="May";
		// month[5]="June";
		// month[6]="July";
		// month[7]="August";
		// month[8]="September";
		// month[9]="October";
		// month[10]="November";
		// month[11]="December";
	
		var zodiac = clock.zodiac = ['♑','♒','♓','♈','♉','♊','♋','♌','♍','♎','♏','♐'];
		var trans = ['20','19','20','20','21','21','23','23','23','23','22','21'];
	  
	  // Compose the string for display - 
	  // var currentTimeString = (currentTime.format) ? 
	  // 	currentTime.format('F jS h:i(s) A') :
	  // 	month[d.getMonth()] + " "+ d.getDay() + " | hi | " + currentHours + blink + currentMinutes + " " + timeOfDay ; 
		var point = '<span class="point">:</span>';
	  
	  var currentTimeString = (typeof currentTime.format != 'undefined') ? 
	  	currentTime.format('F jS' + ' h:i(s) A') :
	  	 days[ d.getDay() ] +", "+ month[d.getMonth()] + " "+ d.getDate() + " Z " + currentHours + ":" + currentMinutes + point + currentSeconds+ timeOfDay ; 

 

	  	var next = ( d.getDate() > trans[d.getMonth()] ) ? 1 : 0;

	  	next = ( d.getMonth() == 11 && next ) ? -11 : next

	  	currentTimeString = currentTimeString.replace('Z','<span class="zo">'+zodiac[d.getMonth()+next]+'</span>');

	

	  
	  //x4.theTimeIs = currentTime.format('h') + point + currentTime.format('i');// + point + currentTime.format('s');
	  
	  // Update the time display
	   
	  var digitalClock =  document.getElementById("digitalClock");
	  
	  if(digitalClock){
		  digitalClock.innerHTML = x4.theTimeIs;
	  }

	  document.getElementById("time").innerHTML = currentTimeString;
		
	  setTimeout(updateClock,500);
	}
	updateClock();	
<?php echo '</script'; ?>
>
<?php }
}
