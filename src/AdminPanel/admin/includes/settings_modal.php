
<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Settings Value</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="settings_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_value" class="col-sm-3 control-label">Setting Value</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_value" name="value" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

