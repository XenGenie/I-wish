<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:54:37
  from "/home/xopher/www/superdomx.com/x/X/xMembership/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c41d920626_40255342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '878930bff336003c5ee70146079567a6ed32c968' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xMembership/index.tpl',
      1 => 1448770345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5782c41d920626_40255342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="admin-zone-panel" align="center" width="50%">
	<tr>
		<th>
		<button onclick="newPlan(this);" style="float: right; " >
			<img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[16];?>
/hcards_add.png" align="absmiddle"/>
			<br/>Create Membership Subscription
		</button>
		<img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];?>
/<?php echo $_smarty_tpl->tpl_vars['xphp_files']->value['xMembership.php']['icon'];?>
" align="absmiddle"/>
		Memberships 
		<form>
		
		</form>
		</th>
	</tr>
	<tr>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['memberships']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['memberships']->value, 'membership');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['membership']->value) {
?>
				<fieldset>
					<legend><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/permit/<?php echo $_smarty_tpl->tpl_vars['membership']->value['id'];?>
">Manage Permissions</a> | <?php echo $_smarty_tpl->tpl_vars['membership']->value['profileDesc'];?>
 | <?php echo $_smarty_tpl->tpl_vars['membership']->value['amount'];?>
 - Every <?php echo $_smarty_tpl->tpl_vars['membership']->value['billingFrequency'];?>
 <?php echo $_smarty_tpl->tpl_vars['membership']->value['billingPeriod'];?>
 for <?php echo $_smarty_tpl->tpl_vars['membership']->value['totalBillingCycles'];?>
 Cycles </legend>
					<a href="#edit" onclick="newPlan(this,<?php echo $_smarty_tpl->tpl_vars['membership']->value['id'];?>
)">Edit</a> | <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/remove/<?php echo $_smarty_tpl->tpl_vars['membership']->value['id'];?>
">Remove</a> 
				</fieldset>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
		</td>
	</tr>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
function newPlan(el,id){
	var win = x4.Window({
		title	: 'Membership Subscription Plan',
		id		: 'membership-win',
		iconCls	: 'x-icon-16x16-hcards_edit',
		width	: 500,
		modal	: true,
		autoHeight: true,
		layout	: 'fit',
		items: new Ext.form.FormPanel({
			id		: 'plan-form',
			frame	: true,
			labelWidth: 75,
			autoHeight: true,
			layout	: 'form',
			url		: '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/add/?returnJson',
			method	: 'POST',
			defaultType	: 'textfield',
			defaults	: {
				anchor	: '100%',
				allowBlank: false
			},
			items	: [{
				name	: 'id',
				xtype	: 'hidden'
			},{
				fieldLabel	: 'Plan Title',
				blankText	: 'Enter a Title for This Subscription Plan',
				emptyText	: 'Gold Package',
				msgTarget	: 'side',
				anchor		: '-20',
				name		: 'profileTitle'
			},{
				fieldLabel	: 'Describe',
				hideLabel	: true,
				blankText	: 'Give a Brief Explanation of this Subscription Plan',
				emptyText	: 'Access to Exclusive Content',
				name		: 'profileDesc',
				xtype		: 'textarea'
			},{
				xtype	: 'fieldset',
				title	: 'Subscription Plan',
				iconCls	: 'x-icon-16x16-money',
				items	: [{
					xtype: 'radiogroup',
		            fieldLabel	: 'Period',
		            hideLabel	: true,
		            itemCls: 'x-check-group-alt',
		            columns: 3,
		            vertical: true,
		            anchor	: '100%',
		            name: 'billingPeriod',
		            items: [
						{ boxLabel: 'Day(s)', 		name: 'billingPeriod', inputValue: 'day'},
						{ boxLabel: 'Once (None)', 	name: 'billingPeriod', inputValue: 'none'},
						{ boxLabel: 'Week(s)', 		name: 'billingPeriod', inputValue: 'week'},
						{ boxLabel: 'SemiMonth(s)',	name: 'billingPeriod', inputValue: 'semimonth'},
						{ boxLabel: 'Month(s)', 	name: 'billingPeriod', inputValue: 'month'},
						{ boxLabel: 'Year(s)', 		name: 'billingPeriod', inputValue: 'year'}

		            ]
				},{
					layout	: 'column',
					defaults: {
						layout	: 'form',
						labelAlign	: 'top',
						columnWidth	: .33,
					},
					items	: [{
						items	: [{
							fieldLabel	: 'Bill Amount',
							xtype		: 'numberfield',
							name		: 'amount',
							emptyText	: '0.00',
							allowBlank	: false,
							anchor		: '-5',
							blankText	: 'Please Enter an Amount'
							//value: '$' 
						}]
					},{
						items	: [{
							fieldLabel	: 'Every',
							name		: 'billingFrequency',
							xtype		: 'spinnerfield',
			            	minValue	: 1,
			            	maxValue	: 31,
			            	allowDecimals: false,
			            	decimalPrecision: 1,
			            	incrementValue: 1,
			            	value	: 30,
			            	alternateIncrementValue: 2,
			            	accelerate: true,
							allowBlank: false,
							anchor	: '-5'
							
						}]
					},{
						
						items	: [{
							fieldLabel	: 'Total # of Cycles',
							anchor	: '100%',
							name		: 'totalBillingCycles',
							xtype: 'spinnerfield',
							value	: 12,
			            	minValue: 0,
			            	allowDecimals: false,
			            	incrementValue: 1,
			            	alternateIncrementValue: 2,
			            	accelerate: true,
							allowBlank: false
						}]
					}]
				}],
				
			}],
			buttonAlign	: 'center',
			buttons	: [{
				text	: 'Add Membership Plan',
				iconAlign	: 'top',
				bindForm: true,
				iconCls	: 'x-icon-16x16-hcards_add',
				handler	: function(){
					Ext.getCmp('plan-form').getForm().submit({
						waitMsg	: 'Saving Link',
						waitTitle: 'Please Wait...',
						success	: function(){
							Ext.Msg.alert('Success!','Plan Saved!');
							Ext.getCmp('plan-form').getForm().reset();
							// Reload Store, Close Window.
							Ext.getCmp('membership-win').close();
							window.location='<?php echo $_smarty_tpl->tpl_vars['ME']->value;?>
';
						},
						failure	: function(f,a){
							//Ext.Msg.alert('Plan Did NOT Save!!',a.result.error);
						},
					});
				},
			}]
		})
	});
	win.show(el,function(){
		if(id){
			Ext.getCmp('plan-form').getForm().load({
				url		: '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/load/'+id
			}); 
		}
	});
	
}
<?php echo '</script'; ?>
>
  
<link rel="stylesheet" type="text/css" href="http://bin.xtiv.net/js/ext/examples/ux/css/Spinner.css" />     <?php }
}
