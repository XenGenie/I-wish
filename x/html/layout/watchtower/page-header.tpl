          <section class="widget locked">
            <h2 class="page-title"> 
              {foreach $xtras as $x => $xtra} 
                  {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
                      <i class="fa fa-{$xtra.mini} fa-5x" style="
                        font-size: 500%; 
                        position: absolute; 
                        z-index: -1; 
                        top: 25px; 
                        right: 25px; 
                        color: rgba(0,0,0,0.15)"></i> 
                        {$xtra.name|ucfirst}
                      <a href="/{$toBackDoor}/nexus/git/{$xtra.class}" class="hidden-xs btn-xs btn {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default{/if}">{$xtra.version}</a>
                      <small class="hidden-xs">


                      </small>

                      <small class="hidden-xs">
                          {if $method == 'index'}
                              {$xtra.desc}
                          {else}
                              {$method|ucfirst}
                          {/if} 
                      </small>
                  {/if}
              {/foreach} 
            </h2>
          </section>

