<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:57
  from "/home/xopher/www/superdomx.com/x/X/xAccess/front_404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc5958d67_03758004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc6e441a174cf4cce7a24e79fafcbcda8f06f5b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xAccess/front_404.tpl',
      1 => 1448770326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc5958d67_03758004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 
    <link href="/x/html/layout/watchtower/css/white.application.min.css" rel="stylesheet"> 
-->
<link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="/bin/css/font-awesome.css">
<section id="content" class="container">      

<?php $_smarty_tpl->_assignInScope('l', $_smarty_tpl->tpl_vars['LANG']->value['XACCESS']);
?>

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
</section><?php }
}
