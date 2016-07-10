<ol class="breadcrumb">
  <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
  <li ><a href="/{$toBackDoor}" class="btn btn-sm btn-transparent"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  {foreach $xtras as $x => $xtra}
      {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
        <li class="btn btn-sm btn-transparent"><a href="/{$toBackDoor}?anchor={$xtra.see}"><i class="fa fa-{$xtra.see}"></i>
        {$admin_menu[$xtra.see].area|ucfirst}</a> 
        </li>
        <li class="
          {if $method == 'index'} 
            active
          {/if} 
          btn btn-sm btn-transparent"><a href="/{$toBackDoor}/{$xtra.link}"><i class="fa fa-{$xtra.mini}"></i>
        {$xtra.name} 
        </a> 
        {if $method == 'index'} 
          </li>
        {else}
          <!-- <li class="active btn btn-sm btn-transparent"> -->
          <!--   <a href="/{$toBackDoor}/{$Xtra}/{$method}" class=""> -->
          <!--     <i class="fa fa-{$Xtra}-{$method}"> {$method|ucfirst}</i> -->
          <!--   </a> -->
          <!-- </li> -->
        {/if}
        <li class="label label-transparent pull-right">
          <label class="badge 
            badge{if $xtra.alpha}-danger{elseif $xtra.beta}-warning{elseif $xtra.delta}-success{elseif $xtra.omega}-primary{else}-transparent{/if}">
            {$xtra.version} 
          </label>
         {* {$xtra.desc}  *}
        </li>
      {/if}
  {/foreach}
</ol>
