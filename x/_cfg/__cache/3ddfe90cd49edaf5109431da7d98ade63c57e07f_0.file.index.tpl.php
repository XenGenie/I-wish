<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-06 17:20:56
  from "/home/xopher/www/superdomx.com/x/X/xBanner/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577d21d8168aa2_58801052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ddfe90cd49edaf5109431da7d98ade63c57e07f' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBanner/index.tpl',
      1 => 1448770330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d21d8168aa2_58801052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style> 
 
.x-form-file-wrap {
    position: relative;
    height: 22px;
}
.x-form-file-wrap .x-form-file {
	position: absolute;
	right: 0;
	-moz-opacity: 0;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
    height: 22px;
}
.x-form-file-wrap .x-form-file-btn {
	position: absolute;
	right: 0;
	z-index: 1;
}
.x-form-file-wrap .x-form-file-text {
    position: absolute;
    left: 0;
    z-index: 3;
    color: #777;
}
</style>

<table width="100%" align="center" id="admin-zone-panel">
	<tr>
		<th>Banners | <a href="#" onclick="javascript: newLink();">Add New</a></th>
	</tr>
	<tr>
		<td id="banners">
			
		</td>
	</tr>
</table>

<?php echo '<script'; ?>
 type="text/javascript">

	view = new Ext.DataView({
    itemSelector: 'div.thumb-wrap',
    style:'overflow:auto',
    multiSelect: true,
    id: 'banner-dv',
    store: new Ext.data.JsonStore({
        url: '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/index/?returnJson',
        autoLoad: true,
        root: 'banners',
        id:'id',
        fields:[
            'id', 'url','title','target_path'
        ]
    }),
    
    tpl: new Ext.XTemplate(
        '<tpl for=".">',
        '<div class="thumb-wrap" id="{title}">',
        '<div class="thumb"><img src="/{$toBackDoor}/xphp/xBanner/{target_path}" class="thumb-img"></div>',
        '<span>{url} | <a href="<?php echo $_smarty_tpl->tpl_vars['ME']->value;?>
/delete/{id}">Delete</a></span></div>',
        '</tpl>'
    )
    
});
	
	var images = new Ext.Panel({
	    title:'Banners',
	    region:'center',
	    margins: '5 5 5 0',
	    layout:'fit',
	    renderTo: 'banners',
	    items: view
	});


	function newLink(){
		var win = new Ext.Window({
			title	 : 'Add a New Banner',
			id		: 'banner-win',
			width	: 500,
			autoHeight: true,
			items: new Ext.form.FormPanel({
				id		: 'banner-form',
				frame	: true,
				labelWidth: 50,
				layout	: 'form',
				method	: 'POST',
				 fileUpload: true,
				defaultType	: 'textfield',
				defaults	: {
					anchor	: '95%',
					allowBlank: false
				},
				items	: [{
		            xtype: 'fileuploadfield',
		            id: 'form-file',
		            emptyText: 'Select an image',
		            fieldLabel: 'Photo',
		            name: 'banner-photo',
		            buttonText: '',
		            buttonCfg: {
		                iconCls: 'x-icon-16x16-photo'
		            }
		        },{
					fieldLabel	: 'Title',
					name		: 'banner[title]'
				},{
					fieldLabel	: 'URL',
					name		: 'banner[url]',
					emptyText	: '<?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>
/'
				}],
				buttons	: [{
					text	: 'Save',
					bindForm: true,
					iconCls	: 'x-icon-16x16-disk',
					handler	: function(){
						Ext.Msg.wait('Saving banner','Please Wait...');
						Ext.getCmp('banner-form').getForm().submit({
							url		: '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/add/?returnJson',
							success	: function(){
								Ext.Msg.alert('Success!','Banner Saved!');
								Ext.getCmp('banner-form').getForm().reset();
								// Reload Store, Close Window.
								Ext.getCmp('banner-win').close();
								view.getStore().load();
							},
							failure	: function(f,a){
								Ext.Msg.alert('Banner Did NOT Save!!',a.result.error);
							}
						});
					},
				}]
			})
		});
		win.show();
	}
<?php echo '</script'; ?>
><?php }
}
