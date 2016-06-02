<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-02 06:55:02
         compiled from "x/html/~widgets/ajax.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191946530574bf4349d1323-59232843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42888df46ca958b69baf356b3defb2c9597c9267' => 
    array (
      0 => 'x/html/~widgets/ajax.form.tpl',
      1 => 1464842508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191946530574bf4349d1323-59232843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574bf434a0fa51_68102377',
  'variables' => 
  array (
    'input' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574bf434a0fa51_68102377')) {function content_574bf434a0fa51_68102377($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
  <?php echo $_smarty_tpl->getSubTemplate ("~blox/ajax/input.x.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } ?>
<script type="text/javascript">
  $(".popover-test").popover();
  window.config = {
    requestSent : false,
    save : function(input,config) {
      var i = $(input);
      var icon = $('#i-'+i.attr('id'));
      var btn = $('#btn-'+i.attr('id'));
      var c = icon.attr('class');
      if(!window.config.requestSent){
        window.config.requestSent = true;
        btn.toggleClass('btn-info');
        btn.toggleClass('btn-success');
        icon.toggleClass(c);
        icon.toggleClass('fa fa-spinner fa-spin');

        $.ajax({
          url      : '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/.json',
          dataType : 'json',
          type     : 'POST',
          data     : {
            config : config
          },
          success : function(data){
            window.config.requestSent = false
            icon.attr('class',c);
            btn.toggleClass('btn-success');
            btn.toggleClass('btn-info');
            var msg = (typeof(data.msg)) ? data.msg : 'else';

            m = (data.error) ? {
              showCloseButton : true,
              type            : 'danger',
              message         : '<i class="fa fa-ban"></i> '+data.error
            } : {
              showCloseButton : true,
              type            : 'success',
              message         : '<i class="fa fa-check"></i> '+(data.msg)
            };

            Messenger().post(m);
          }
        });
      }
    }
  };
</script>
<?php }} ?>
