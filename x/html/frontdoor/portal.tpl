  {foreach $oBlox as $b => $o}
    {assign var=go value={$o.blox|substr:1|strtolower|replace:'-':'/'}}
    {if $masterKey.is.admin}
      <div id="o-blox-{$o.blox}-{$o.id}" icon="{$o.icon}" blox="{$o.blox}" bloxid="{$o.id}" class="blox-panel" style="display: none;" >
        <i class="fa fa-5x fa-spinner fa-spin"></i>
      </div> 
      <script type="text/javascript">
        $(document).ready(function() {
          $('#o-blox-{$o.blox}-{$o.id}').load('/html/{$o.blox|substr:1|strtolower|replace:'-':'/'}', function  () {
          });
          
          fadeInElements($('.blox-panel'), executeAfterFade);
        });
      </script>
    {else}
      {* include some javascript in your template *} 
      {fetch file="http://$HTTP_HOST/html/{$o.blox|substr:1|lcfirst|replace:'-':'/'}/{$o.id}"} 
    {/if}
  {/foreach}

  {if $masterKey.is.admin}
  {/if}
