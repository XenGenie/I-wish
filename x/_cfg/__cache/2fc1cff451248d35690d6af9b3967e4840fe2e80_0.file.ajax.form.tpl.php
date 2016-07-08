<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 04:01:39
  from "/home/xopher/www/superdomx.com/x/html/~widgets/ajax.form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f0983cafd41_36703539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fc1cff451248d35690d6af9b3967e4840fe2e80' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/ajax.form.tpl',
      1 => 1464842508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~blox/ajax/input.x.tpl' => 1,
  ),
),false)) {
function content_577f0983cafd41_36703539 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value, 'i', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:~blox/ajax/input.x.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php }
}
