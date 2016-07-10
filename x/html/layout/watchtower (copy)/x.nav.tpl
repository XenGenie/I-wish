{if $masterKey.is.user}
    {assign var="php" value="x{$Xtra|ucfirst}.php"}
    <head><title>{$xtras.$php.name} : {$xtras.$php.desc} | Super Dom</title></head>
    <div class="row">
        <div class="col-md-12">
          <!--
            <h2 class="page-title">
              {$Xtra}
              <span class="fw-semi-bold">{$method}</span>
            </h2>
          -->
          {include "./breadcrumb.tpl"}
        </div>
    </div>
{/if}
