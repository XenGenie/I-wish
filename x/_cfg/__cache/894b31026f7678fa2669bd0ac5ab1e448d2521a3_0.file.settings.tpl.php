<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 11:00:56
  from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820ec8a87218_04157083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '894b31026f7678fa2669bd0ac5ab1e448d2521a3' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/settings.tpl',
      1 => 1467627409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/ajax.form.tpl' => 2,
  ),
),false)) {
function content_57820ec8a87218_04157083 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable1);
?>
<section class="">
    <div class="body">
      <div id="wizard" class="form-wizard">
        <div id="bar" class="progress progress-large">
            <div class="progress-bar progress-bar-success">
            </div>
        </div>
        <ul class="wizard-navigation nav-justified hidden-xs">
            <li>
              <a href="#tab1" data-toggle="tab"><b>1.</b> 
                <strong> 
                  <i class="fa fa-globe"></i> 
                  Title <?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>

                </strong>
              </a>
            </li>
            <!-- <li><a href="#tab2" data-toggle="tab"><b>2.</b> <strong><i class="fa fa-globe"></i> Super Sub Domains</strong></a></li> -->
            <li>
              <a href="#tab2" data-toggle="tab">
                <small>2.</small> 
                <strong>
                  <i class="fa fa-anchor"></i> 
                  Addresses
                </strong>
              </a>
            </li>
            <li>
              <a href="#tab4" data-toggle="tab">
                <b>3.</b> 
                <strong>
                  <i class="fa fa-magic"></i> Abracadabra!
                </strong>
              </a>
            </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane text-center col-md-12" id="tab1">
              <h2>
                Title Your Super Domain
                <br/>
                <small>
                  This is most likely the first thing anyone will read.
                </small>
              </h2>
              <hr/>
              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['wizard']['step_1']);
?>
              <?php $_smarty_tpl->_subTemplateRender("file:~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0, false);
?>

          </div>
          <div class="tab-pane text-center col-md-12" id="tab2">
              <h2>
                Make sure your address is correct.
                <br/>
                <small>
                  Use https:// to force your site load behind your Secure Socket Layer.
                </small>
              </h2>
              <hr/>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['wizard']['step_2']);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:~widgets/ajax.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>$_smarty_tpl->tpl_vars['i']->value), 0, true);
?>

          </div>
          <div class="tab-pane text-center col-md-12" id="tab4">
              <h1>Thank you!
              <br/>
              <small>Your submission has been received.</small>

              </h1>
          </div>
          <div class="description">
          </div>
          <ul class="pager wizard">
            <li class="previous col-xs-6">
                <button class="btn btn-warning btn-block btn-lg pull-left"><i class="fa fa-caret-left"></i> Previous</button>
            </li>
            <li class="next col-xs-6 ">
                <button class="btn btn-info btn-block btn-lg pull-right" >Next <i class="fa fa-caret-right"></i></button>
            </li>
            <li class="finish col-xs-6" style="display: none">
                <button class="btn btn-success btn-block btn-lg pull-right" data-dismiss="modal" >Finish <i class="fa fa-check"></i></button>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>
<?php echo '<script'; ?>
>
  $('#modal-<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
').on('hidden.bs.modal', function () {
    $($('.nav-pills li a')[0]).click()
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/wizard.js"> <?php echo '</script'; ?>
>
<?php }
}
