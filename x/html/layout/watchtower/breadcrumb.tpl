<ol class="breadcrumb">
  <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
  <li><a href="/{$toBackDoor}"><i class="fa fa-eye"></i> Master Tower</a></li>
  {foreach $xtras as $x => $xtra}
      {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
        <li><a href="/{$toBackDoor}/{$xtra.see}/"><i class="fa fa-{$xtra.see}"></i>
        {$admin_menu[$xtra.see].area|ucfirst}</a> 
        </li>
        <li class="active"><a href="/{$toBackDoor}/{$xtra.link}"><i class="fa fa-{$xtra.mini}"></i>
        {$xtra.name} 
        <!-- <label class="badge  -->
        <!--   badge{if $xtra.alpha}-danger{elseif $xtra.beta}-warning{elseif $xtra.delta}-success{elseif $xtra.omega}-primary{else}-default{/if}"> -->
        <!--   {$xtra.version}  -->
        <!-- </label> -->
        <!-- : {$xtra.desc}  -->
        </a> 
        {if $method == 'index'} 
        </li>
        {else}
            <li class="active">
                <a href="/{$toBackDoor}/{$Xtra}/{$method}"><i class="fa fa-{$Xtra}-{$method}"> {$method|ucfirst}</i>
            </a>
        {/if}
      {/if}
  {/foreach}
</ol>
