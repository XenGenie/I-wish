<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:36:11
         compiled from "x/html/~blox/ajax/save.x.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1676998863565a80bb0d92e9-29914267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227118bbbac3c6d853ea3894d74d706ed9e1def3' => 
    array (
      0 => 'x/html/~blox/ajax/save.x.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1676998863565a80bb0d92e9-29914267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a80bb0de775_01505307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a80bb0de775_01505307')) {function content_565a80bb0de775_01505307($_smarty_tpl) {?><script type="text/javascript"> 
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
</script><?php }} ?>
