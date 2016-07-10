{$XTRA = "X{$Xtra|strtoupper}"}
<div class="row">
  <div class="col-md-12">
      <section class="widget widget-tabs">
          <header>
              <ul class="nav nav-tabs">
                {foreach $LANG.$XTRA.$method.tabs as $t => $tab name=foo}
                  <li
                    {if $smarty.foreach.foo.first}
                      class="active"
                    {/if}
                  >
                      <a href="#{$t}" data-toggle="tab">
                        <i class="fa {$tab.icon}"></i>
                        {$t|ucwords}
                      </a>
                  </li>
                {/foreach}
              </ul>
          </header>
          <div class="body tab-content">
            {foreach $LANG.$XTRA.$method.tabs as $t => $tab name=foo}
              <div id="{$t}" class="tab-pane
                {if $smarty.foreach.foo.first}
                  active
                {/if}
              ">
                {include "{$t}.tpl"}
              </div>
            {/foreach}
          </div>
      </section>
  </div>
</div>
