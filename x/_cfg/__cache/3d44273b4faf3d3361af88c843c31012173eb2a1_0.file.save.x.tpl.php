<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:52:24
  from "/home/xopher/www/superdomx.com/x/html/~blox/ajax/save.x.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820cc8b985b6_85008316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d44273b4faf3d3361af88c843c31012173eb2a1' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/ajax/save.x.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57820cc8b985b6_85008316 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript"> 
	window.x = {
		requestSent : false,
		save        : function(f,e,call,b4) { 
			e.preventDefault(); 
			var data = $(f).serializeObject(); 
			 act = $(f).attr('action');


			if(!window.x.requestSent){
				window.x.requestSent = true; 

				if(typeof(b4) == 'function')
					b4(f,e);

				$.ajax({ 
					url      : (act) ?  act : location.pathname+'/.json',
					dataType : 'json',
					type     : 'POST',
					data     : data,
					success : function(data){
						window.x.requestSent = false 
						Messenger().post((data.error) ? {
							showCloseButton : true,
							type            : 'danger',
							message         : '<i class="fa fa-ban"></i> '+data.error
						} : {
							showCloseButton : true,
							type            : 'success',
							message         : '<i class="fa fa-check"></i> '+ (typeof(data.msg) != 'undefined') ? data.msg : 'Saved'
						});
						if(typeof(call) == 'function')
							call(f,e);
		        	}
		        });
			} 
		}
	};
<?php echo '</script'; ?>
><?php }
}
