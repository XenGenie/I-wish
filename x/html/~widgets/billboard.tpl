<div class="row">
  <div class="col-md-{if $size}{$size}{else}12{/if}"> 
    <section class="widget">
      <div class="jumbotron text-center">
        <h1>
          {assign var=XTRA value="X{$Xtra|strtoupper}"}
          {if $method == 'index'}
            <!-- <i class="fa {$LANG.$XTRA.ICON} fa-3x pull-right"></i>  -->
            {$LANG.$XTRA.JUMBO.HEAD}
          {else}
            <!-- <i class="fa {$LANG.$XTRA.$method.ICON} fa-3x pull-right"></i>  -->
            {$LANG.$XTRA.$method.JUMBO.HEAD}
          {/if}
        </h1>
        <p>
          {if $method == 'index'}
            {$LANG.$XTRA.JUMBO.QUOTE}
          {else}
            {$LANG.$XTRA.$method.JUMBO.QUOTE}
          {/if} 
        </p>
        {foreach $LANG.$XTRA.JUMBO.BTN as $b => $btn}
            <a
              class="btn btn-lg {$btn.class} {if $method == $b}active{/if} btn-xs-block"
              {if isset($btn.modal) && $btn.modal == true}
                data-toggle="modal" data-target="#modal-{$b}"
              {else}
                href="/{$toBackDoor}/{$Xtra}/{$b}"
              {/if}
              >
                {$btn.a}
            </a>
            {include "~blox/modal.tpl" id="modal-{$b}" ajax="{$Xtra}/{$b}" title="{$btn.a}"}
        {/foreach}
      </div>
    </section>
  </div>

  {foreach $qBlox as $q => $blox} 
    {if $q == "x{$Xtra|ucfirst}"}
      {foreach $blox as $b => $x}
        {if $x.backdoor}
          {if !$x.col}
            {$col = 6}
          {else}
            {$col = $x.col}
          {/if}
          {if $method != 'index' && $x.filter == $method}
            {include file="~widgets/col.tpl"   method="$b" title=$x.blox}
          {elseif $method == 'index'}
            {include file="~widgets/col.tpl"  method="$b" title=$x.blox}
          {/if}
        {/if}
      {/foreach}
    {/if}
  {/foreach}
</div>

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
