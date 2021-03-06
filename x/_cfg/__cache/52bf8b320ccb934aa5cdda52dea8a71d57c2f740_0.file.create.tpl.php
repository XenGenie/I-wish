<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-13 06:51:05
  from "/home/xopher/www/superdomx.com/x/X/xBlog/create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575e3bb91e3171_07286480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52bf8b320ccb934aa5cdda52dea8a71d57c2f740' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlog/create.tpl',
      1 => 1464654207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575e3bb91e3171_07286480 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-file-alt"></i> Article <small>Create new or edit existing article</small></h4>
                    </header>
                    <div class="body">
                        <form class="form-horizontal" role="form" id="article-form" method="post" novalidate="novalidate"
                              data-parsley-priority-enabled="false">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="title">Title <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" id="title" name="title" class="form-control input-transparent"
                                               required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="content">
                                        Content
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea rows="10" class="form-control input-transparent" id="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="description" rows="3" name="text" class="form-control input-transparent"></textarea>
                                        <span class="help-block">Optional summary of your article that can be used in previews</span>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="btn-toolbar">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-cog"></i> Options <small>Publishing, categories</small></h4>
                    </header>
                    <div class="body">
                        <form id="article-options" class="form-horizontal form-label-left"
                              method="post">
                            <fieldset>
                                <legend class="section">Publishing</legend>
                                <div class="form-group">
                                    <label for="article-status" class="control-label col-sm-4">Status</label>
                                    <div class="col-sm-8">
                                        <select id="article-status" name="article-status"
                                                data-style="btn-success"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Draft</option>
                                            <option value="1">Published</option>
                                            <option value="2">Pending Review</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="publish-date" class="control-label col-sm-4">Publish at</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="publish-date" name="publish-date" class="form-control date-picker">
                                        <input type="text" id="publish-time" name="publish-time" class="form-control mt-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-language" class="control-label col-sm-4">Language</label>
                                    <div class="col-sm-8">
                                        <select id="article-language" name="article-language"
                                                data-style="btn-success"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">All Languages</option>
                                            <option value="1">English</option>
                                            <option value="2">Belarusian</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="section">Category & Tags</legend>
                                <div class="form-group">
                                    <label for="article-category" class="control-label col-sm-4">Category</label>
                                    <div class="col-sm-8">
                                        <select id="article-category" name="article-category"
                                                data-style="btn-warning"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Design</option>
                                            <option value="1">Bootstrap</option>
                                            <option value="2">ThemeForest</option>
                                            <option value="3">Personal Developement</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-tags" class="control-label col-sm-4">Tags</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="article-tags" name="article-tags"
                                               class="select-block-level">
                                        <span class="help-block">Write or select a tag and press "Enter" to add it.</span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-key"></i> Access</h4>
                    </header>
                    <div class="body">
                        <form id="article-access" class="form-horizontal form-label-left"
                              method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="article-visibility" class="control-label col-sm-4">Visibility</label>
                                    <div class="col-sm-8">
                                        <select id="article-visibility" name="article-visibility"
                                                data-style="btn-warning"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Everyone</option>
                                            <option value="1">Registered</option>
                                            <option value="2">Editors</option>
                                            <option value="3">Admins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-password" class="control-label col-sm-4">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="article-password" class="form-control" name="article-password">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>

<?php }
}
