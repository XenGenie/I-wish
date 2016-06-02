<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 05:35:37
         compiled from "/home/xopher/www/superdomx.com/x/X/xAccess/front_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1415009491565a8099de6039-97818425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b7c5366b7a4a0a645983ffd8a256bf0c1a2388' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/front_404.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1415009491565a8099de6039-97818425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'l' => 0,
    'masterKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a8099e03ac9_05171239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a8099e03ac9_05171239')) {function content_565a8099e03ac9_05171239($_smarty_tpl) {?><!-- 
    <link href="/x/html/layout/watchtower/css/white.application.min.css" rel="stylesheet"> 
-->
<link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="/bin/css/font-awesome.css">
<section id="content" class="container">      

<?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value['XACCESS'], null, 0);?>

<div class="error-page text-center" id="xAccess-404">
    <section class="widget transparent">
        <div class="row">
                <div class="col-md-12"> 
                    <h1 class="text-align-center">
                        <?php echo $_smarty_tpl->tpl_vars['l']->value['HEAD'];?>

                    </h1>
                    <h4>
                        <?php echo $_smarty_tpl->tpl_vars['l']->value['MSG'];?>

                    </h4>
                    <div class="btn-group">

                        <button class="btn btn-alt btn-lg btn-info action<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>active disabled<?php }?>"><i class="fa fa-key"></i></button>
                        <button class="btn btn-alt btn-lg btn-warning action<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>active disabled<?php }?>"><i class="fa fa-key"></i></button>
                        <button class="btn btn-alt btn-lg btn-success action<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>active disabled<?php }?>"><i class="fa fa-key"></i></button>
                        <button class="btn btn-alt btn-lg btn-primary action<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>active disabled<?php }?>"><i class="fa fa-key"></i></button>
                        <button class="btn btn-alt btn-lg btn-danger action<?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>active disabled<?php }?>"><i class="fa fa-key"></i></button>

                    </div>  
                   
                    
                </div>
            </div>
    </section>
    <!-- <section class="widget widget-404-search">
        <div class="body no-margin">
            <h3>Page Not Found</h3>
            <form class="form-inline form-search no-margin text-align-center" method="get" action="special_search.html" role="form">
                <div class="input-group">
                    
                    <input type="search" class="form-control" placeholder="Pages: Posts, Tags">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            &nbsp; Search &nbsp;
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </section>  -->
    </div>
</section><?php }} ?>
