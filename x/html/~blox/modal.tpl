<div
  id="{$id}"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="myModalLabel"
  aria-hidden="true"
  style="display: none;"
>
  <div class="modal-dialog modal-{$size}">
    <div class="modal-content">
      {include "./modal-body.tpl" buttons=$buttons}
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
