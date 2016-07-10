<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 03:41:39
  from "/home/xopher/www/superdomx.com/x/html/~blox/ajax/input.x.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5781a7d35be7a7_00551837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd86d4fbc91f7346f14de0bddf1c2d877b5d66ab7' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/ajax/input.x.tpl',
      1 => 1468114894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5781a7d35be7a7_00551837 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?>
<div class=" form-group">
  <div class="row">
    <div class="<?php if (!$_smarty_tpl->tpl_vars['i']->value['col']) {?>col-sm-12<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['col'];
}?>">
      <!-- 
      <?php ob_start();
echo substr(md5($_smarty_tpl->tpl_vars['Xtra']->value),0,2);
$_prefixVariable1=ob_get_clean();
ob_start();
echo substr(md5($_smarty_tpl->tpl_vars['name']->value),0,5);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('_id', $_prefixVariable1."-".$_prefixVariable2);
?>

      <?php if (!$_smarty_tpl->tpl_vars['i']->value['txt']) {?>
        <?php ob_start();
echo ucwords(smarty_modifier_replace($_smarty_tpl->tpl_vars['name']->value,'_',' '));
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('txt', $_prefixVariable3);
?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('txt', $_smarty_tpl->tpl_vars['i']->value['txt']);
?>
      <?php }?> 

      <?php if (!$_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {?>
        <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['name']->value,((string)$_smarty_tpl->tpl_vars['Xtra']->value)."_",'');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('name', $_prefixVariable4);
?>
      <?php }?>
      -->
      <div class="input-group col-sm-12">
          <span class="input-group-btn" >
              <a 
                id="btn-<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" 
                class="btn btn-alt btn-success btn-block text-left" 
                type="button" onclick="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : $('#<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
').val() })"
              >
                <i class="<?php echo $_smarty_tpl->tpl_vars['i']->value['icon'];?>
" id="i-<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i>
                <?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
 
              </a>
          </span>
          <?php if ($_smarty_tpl->tpl_vars['i']->value['type'] == 'radio') {?>
            <div class="btn-group pull-right col-sm-12 no-margin no-padding" data-toggle="buttons">
              <?php $_smarty_tpl->_assignInScope('cols', intval(count($_smarty_tpl->tpl_vars['i']->value['labels'])));
?>
              <?php $_smarty_tpl->_assignInScope('cols', 12/$_smarty_tpl->tpl_vars['cols']->value);
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value['labels'], 'l', false, 'label');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['l']->value) {
?>
                <label id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" class="btn btn-transparent col-sm-<?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
 <?php if ($_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['name']->value)]->value == $_smarty_tpl->tpl_vars['l']->value['value']) {?>active<?php }?>"  onclick="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : '<?php echo $_smarty_tpl->tpl_vars['l']->value['value'];?>
' })">
                    <input  name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['value'];?>
" type="radio" > <?php echo $_smarty_tpl->tpl_vars['l']->value['txt'];?>

                </label> 
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['type'] == 'textarea') {?>
            <textarea
              id           = "<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"
              data-trigger = "change"
              required     = "required"
              class        = "form-control <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
"
              name         = "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
              value        = "<?php if ($_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {
echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value;
} else {
echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['name']->value)]->value;
}?>"
              placeholder  = "<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
              onblur       = "window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : this.value })"
              style        = "width: 100%"
              placeholder  = "<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
            ></textarea>
          <?php } else { ?>
          <input id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" type="<?php if (!$_smarty_tpl->tpl_vars['i']->value['type']) {?>text<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['type'];
}?>"
                data-trigger="change" required="required"
                name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {
echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value;
} else {
echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['name']->value)]->value;
}?>" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
                onblur="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : this.value })" style="width: 100%"
                class="form-control <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>tooltips underline<?php }?>" 
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>
                            data-toggle="tooltip" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
"
                            data-placement="left"
                        <?php }?> 
                >
          <?php }?>
          <span 
            <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>
              class="input-group-btn popover-test"
              data-placement="left"
              data-content="<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
" 
              data-original-title="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
            <?php }?>
              class="input-group-btn" 
              title="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"  
              style="width: 35px;"
            >
              <a class="btn btn-alt btn-info " <?php if ($_smarty_tpl->tpl_vars['i']->value['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['i']->value['href'];?>
" target="_blank" <?php }?> type="button"  style="width: 100%">
                <i class="fa fa-question"  ></i> 
              </a>
          </span>
      </div>
    </div>
  </div>
</div>
<?php }
}
