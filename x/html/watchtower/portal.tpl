<div class="row widget-container">
    <div class="col-md-12 ">
      <!-- <h2 class="page-title">{$user.username}, Welcome to SuperdomX <small>Oxygen</small></h2> -->
      <section class="widget locked">
          <div class="widget-controls">
              {if $portal}
                  <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a>
                  <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
                  <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a>
                  <a data-widgster="close" title="Close" href="#"
                  onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"
                  ><i class="glyphicon glyphicon-remove"></i></a>
                  <a data-widgster="watchtower" title="{if $portal}Stop Watching{else}Add to Watchtower{/if}"
                  href="javascript:" onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"><i class="fa fa-eye{if $portal}-slash{/if}"></i></a>
              {else}
                  <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a>
                  <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
                  <a data-widgster="close" title="Close" href="#"
                  onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"
                  ><i class="glyphicon glyphicon-remove"></i></a>
              {/if}
          </div>
          <div class="jumbotron handle">
            <div class="container">
              <div id="carousel-watchtower" class="carousel slide">
                <ol class="carousel-indicators outer">
                    <li data-target="#carousel-watchtower" data-slide-to="{counter start=0}" class="{if $anchor == 'index'}active{/if}">
                    </li>
                    {foreach $admin_menu as $key => $item}
                      {if $key}
                    <li data-target="#carousel-watchtower" data-slide-to="{counter}" class="{if $anchor == $key}active{/if}"></li>
                      {/if}
                    {/foreach}
                </ol>
                <div class="carousel-inner text-align-center">
                    <div class="item {if $anchor == 'index'}active{/if}">
                      <h1>
                        <!-- <img src="/users/avatar" style="max-height: 200px; border-radius: 1000px;" class="pull-left"/> -->
                          Welcome
                      </h1>
                      <p>
                        This area is your's to do with what ever you'd like.
                                      <br/>
                                      <br/>
                          <a class="btn btn-success btn-lg"  data-widgster="fullscreen" >
                              <i class="fa fa-mouse-pointer"></i> <u>Click Here</u> to Learn More
                          </a>
                          <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                          <a class="btn btn-info btn-lg btn-xs-block" href="/{$toBackDoor}/login/profile" data-widgster="restore">
                              <i class="fa fa-arrow-left"></i> Back
                          </a>

                          <p data-widgster="restore">
                              Normally, there would be some more content here to describe what was just said above. Coming soon...
                          </p>
                      </p>
                    </div>
                    {foreach $admin_menu as $key => $item}
                        {if $key} 
                          <div class="item {if $anchor == $key}active{/if}">
                              <h1>
                                {$item.area|ucfirst}
                                <i class="fa fa-{$key}"></i>
                              </h1>
                              <p>
                                  {$item.desc|ucfirst}
                                      <br/><br/>
                                    {foreach $xtras as $x => $xtra}
                                      {if $xtra.icon && $key == $xtra.see}
                                          <a 
                                            href="/x/{$xtra.link}" 
                                            title="{$xtra.desc}"  
                                            data-placement="top" 
                                            data-original-title="{$xtra.desc}" 
                                            class="btn btn-lg  btn-xs-block
                                              {if $xtra.alpha}
                                                btn-danger
                                              {elseif $xtra.beta}
                                                btn-warning
                                              {elseif $xtra.delta}
                                                btn-success
                                              {elseif $xtra.omega}
                                                btn-primary
                                              {else}
                                                btn-default" disabled="disabled
                                              {/if}
                                            ">
                                              <i class="fa fa-{$xtra.mini}  "></i> {$xtra.name}
                                          </a>
                                      {/if}
                                  {/foreach}
                              </p>
                          </div> 
                        {/if}
                    {/foreach} 
                </div>
              </div>
            </div>
                <a class="left carousel-control" href="#carousel-watchtower" data-slide="prev">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                </a>
                <a class="right carousel-control" href="#carousel-watchtower" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </a>
          </div>
      </section>
    </div>
    {$portal = true}
    {foreach $watchtower.data as $r => $t}
        {if $t.path} 
            {include file="~widgets/col.tpl" col=$t.col xPHP=$t.path title=$t.title}
        {/if}
    {/foreach}
</div>
<!-- page specific -->
<script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>
