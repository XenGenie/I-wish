<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-02 07:15:04
         compiled from "x/html/~blox/ajax/input.x.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783711818574bf434a156a0-84718260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee1d7bcd84266ee06085e510c6e95b8aa351ed0' => 
    array (
      0 => 'x/html/~blox/ajax/input.x.tpl',
      1 => 1464844499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783711818574bf434a156a0-84718260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574bf434bf88b9_39565426',
  'variables' => 
  array (
    'i' => 0,
    'Xtra' => 0,
    'name' => 0,
    '($_smarty_tpl->tpl_vars[\'Xtra\']->value).\'_\'.($_smarty_tpl->tpl_vars[\'name\']->value)' => 0,
    'txt' => 0,
    'cols' => 0,
    '_id' => 0,
    '($_smarty_tpl->tpl_vars[\'name\']->value)' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574bf434bf88b9_39565426')) {function content_574bf434bf88b9_39565426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?><div class="<?php if (!$_smarty_tpl->tpl_vars['i']->value['col']) {?>col-sm-12<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value['col'];?>
<?php }?>">
  <!-- 
  <?php ob_start();?><?php echo substr(md5($_smarty_tpl->tpl_vars['Xtra']->value),0,2);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo substr(md5($_smarty_tpl->tpl_vars['name']->value),0,5);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable($_tmp1."-".$_tmp2, null, 0);?>

  <?php if (!$_smarty_tpl->tpl_vars['i']->value['txt']) {?>
    <?php ob_start();?><?php echo ucwords(smarty_modifier_replace($_smarty_tpl->tpl_vars['name']->value,'_',' '));?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['txt'] = new Smarty_variable($_tmp3, null, 0);?>
  <?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['txt'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value['txt'], null, 0);?>
  <?php }?> 

  <?php if (!$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {?>
    <?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['name']->value,((string)$_smarty_tpl->tpl_vars['Xtra']->value)."_",'');?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_tmp4, null, 0);?>
  <?php }?>
  -->
  <div class="input-group col-sm-12" style="margin: 5px">  
      <span <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>class="input-group-btn popover-test" data-content="<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
" data-original-title="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"<?php }?>
        class="input-group-btn" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"  style="width: 35px;">
          <a class="btn btn-alt btn-default btn-transparent pull-left" <?php if ($_smarty_tpl->tpl_vars['i']->value['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['i']->value['href'];?>
" target="_blank" <?php }?> type="button"  style="width: 100%">
              <?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
 
              <i class="fa fa-question"  ></i> 
          </a>
      </span>
      <?php if ($_smarty_tpl->tpl_vars['i']->value['type']=='radio') {?>
  	  <div class="btn-group pull-right col-sm-12 no-margin no-padding" data-toggle="buttons">
          <?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(intval(count($_smarty_tpl->tpl_vars['i']->value['labels'])), null, 0);?>
          <?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['cols']->value, null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['labels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
  	        <label id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" class="btn btn-transparent col-sm-<?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
 <?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['name']->value)]->value==$_smarty_tpl->tpl_vars['l']->value['value']) {?>active<?php }?>"  onclick="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : '<?php echo $_smarty_tpl->tpl_vars['l']->value['value'];?>
' })">
  	            <input  name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['value'];?>
" type="radio" > <?php echo $_smarty_tpl->tpl_vars['l']->value['txt'];?>

  	        </label> 
          <?php } ?> 
      </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['type']=='textarea') {?>
        <textarea 
             id           ="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"
             data-trigger ="change" 
             required     ="required"
             class        ="form-control <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
"
             name         ="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" 
             value        ="<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {?><?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['name']->value)]->value;?>
<?php }?>" 
             placeholder  ="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
             onblur       ="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : this.value })" 
             style        ="width: 100%"
             placeholder  ="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
        ></textarea>
      <?php } else { ?>
      <input id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" type="<?php if (!$_smarty_tpl->tpl_vars['i']->value['type']) {?>text<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
<?php }?>"
             data-trigger="change" required="required"
             name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value) {?><?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['Xtra']->value).'_'.($_smarty_tpl->tpl_vars['name']->value)]->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['name']->value)]->value;?>
<?php }?>" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
"
             onblur="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : this.value })" style="width: 100%"
             class="form-control <?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>tooltips underline<?php }?>" 
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['desc']) {?>
                        data-toggle="tooltip" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
"
                         data-placement="top"
                    <?php }?> 
             >
      <?php }?>
      <span class="input-group-btn" style="width: 35px">
          <a id="btn-<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" class="btn btn-alt btn-success btn-block" type="button" onclick="window.config.save(this,{ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 : $('#<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
').val() })">
               <i class="<?php echo $_smarty_tpl->tpl_vars['i']->value['icon'];?>
" id="i-<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i>
          </a>
      </span>
  </div>
</div>
<?php }} ?>
