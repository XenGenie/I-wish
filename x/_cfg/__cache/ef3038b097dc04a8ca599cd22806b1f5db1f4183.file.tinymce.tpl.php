<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:08:02
         compiled from "/home/xopher/www/superdomx.com/x/X/xBlox/tinymce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2071090876574cc7d2ba6814-47562682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3038b097dc04a8ca599cd22806b1f5db1f4183' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlox/tinymce.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2071090876574cc7d2ba6814-47562682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bloxid' => 0,
    'blox_cfg' => 0,
    'masterKey' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'method' => 0,
    'jumbotron' => 0,
    '3col' => 0,
    'cover' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc7d2ca8892_80779213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc7d2ca8892_80779213')) {function content_574cc7d2ca8892_80779213($_smarty_tpl) {?><div>
	
<div id="tinymce-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
" class="content tinymce_editor">
	<?php echo $_smarty_tpl->tpl_vars['blox_cfg']->value['cfg_params'];?>

</div>
<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>   
	
 	<script src="/bin/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector : ".tinymce_editor",
			inline   : true,
			
		    save_enablewhendirty: true,
		    save_onsavecallback: function() { 
		    	console.log("Saving");
		    	$.ajax({
		    		url 	 : "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
/.json",
		    		type     : "POST",	
					data     : {
						blox : {
							quest_id : <?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
,
							cfg_option : 'tinymce-source',
							cfg_params : tinymce.get('tinymce-source-<?php echo $_smarty_tpl->tpl_vars['bloxid']->value;?>
').save()
						} 
					},
					dataType : "json",
				    success: function(data){ 
						if(data.success){
							console.log("Saved");
						}else{
							alert(data.error);
						}
				    }
		    	}); 
		    },
			plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor colorpicker textpattern save"
		    ],
			toolbar: "save | insertfile undo redo | styleselect |  alignleft aligncenter alignright alignjustify  | forecolor backcolor  |  bold italic | bullist numlist outdent indent | link image media | charmap table insertdatetime  | template print code",
		    
		     
		    image_advtab: true,
		    apply_source_formatting : true,
		    content_css : "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css,//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css",
			templates: [
				<?php $_smarty_tpl->tpl_vars['jumbotron'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

		        { title: 'Jumbotron', content: '<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['jumbotron']->value);?>
' },

		        <?php $_smarty_tpl->tpl_vars['3col'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/3-col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

		        { title: '3 Columns', content: '<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['3col']->value);?>
' },

		        <?php $_smarty_tpl->tpl_vars['cover'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/cover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

		        { title: 'Cover', content: '<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['cover']->value);?>
' }
			]
		}); 
	</script> 
<?php }?>

</div><?php }} ?>
