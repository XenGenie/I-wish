<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:48:46
  from "/home/xopher/www/superdomx.com/x/html/~blox/modal-body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f067e3597f4_67594302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a29d25fd79a03a3b1e504ddb5b318571394254b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/modal-body.tpl',
      1 => 1465273895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f067e3597f4_67594302 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_fetch')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.fetch.php';
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
</div>

<div class="modal-body" id='<?php echo md5($_smarty_tpl->tpl_vars['ajax']->value);?>
'>
    <?php if ($_smarty_tpl->tpl_vars['load']->value) {?>
        <?php echo smarty_function_fetch(array('file'=>"http://".((string)$_smarty_tpl->tpl_vars['HTTP_HOST']->value)."/".((string)$_smarty_tpl->tpl_vars['toSideDoor']->value)."/".((string)$_smarty_tpl->tpl_vars['load']->value)),$_smarty_tpl);?>
 
    <?php } elseif ($_smarty_tpl->tpl_vars['include']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
    <?php } elseif ($_smarty_tpl->tpl_vars['ajax']->value) {?>
      <?php echo '<script'; ?>
 type="text/javascript">
          $('#<?php echo md5($_smarty_tpl->tpl_vars['ajax']->value);?>
').load('/html/<?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
');
      <?php echo '</script'; ?>
>
      <style type="text/css">
          @-webkit-keyframes loaderSprite {
              from { background-position: 0px; }
              to { background-position: -2500px; }
          }

          @-moz-keyframes loaderSprite {
              from { background-position: 0px; }
              to { background-position: -2500px; }
          }

          @keyframes loaderSprite {
              from { background-position: 0px; }
              to { background-position: -2500px; }
          }

          .atom {
              width             : 100px;
              height            : 100px;  
              background-image  : url("<?php echo $_smarty_tpl->tpl_vars['_DIR']->value;?>
images/loading.png");
              -webkit-animation : loaderSprite 1s steps(25, end) infinite;
              -moz-animation    : loaderSprite 1s steps(25, end) infinite;
              animation         : loaderSprite 1s steps(25, end) infinite;
              display           : block;
              position          : relative;
              margin            : auto;
              top               : 0;
              left              : 0;
              text-align        : center;
          }

          #loader{
              background: none;
          }

      </style>
      <div id="loader">
          <div>   
              <span class="atom" /></span>
              <p id="loadtext" >
                  loading <?php echo $_smarty_tpl->tpl_vars['load']->value;?>
 &hellip;
              </p>  
          </div>
      </div>
    <?php }?>
</div>
<div class="modal-footer m-0">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'b', false, 'button');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['button']->value => $_smarty_tpl->tpl_vars['b']->value) {
?>
        <button class="btn <?php echo $_smarty_tpl->tpl_vars['b']->value['class'];?>
" <?php if ($_smarty_tpl->tpl_vars['b']->value['dismiss']) {?>data-dismiss="modal"<?php }?> <?php if ($_smarty_tpl->tpl_vars['b']->value['click']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['b']->value['click'];?>
"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['b']->value['html'];?>
</button>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!-- <button class="btn pull-right" ><i class=""></i>Cancel</button> -->
</div>
<?php }
}
