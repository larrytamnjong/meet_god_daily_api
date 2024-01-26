<!-- Description -->
<div class="modal fade" id="platform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullName"></span></b></h4>
      </div>
      <div class="modal-body">
        <p><b>Transaction Reference</b></p>
        <p id="txRef"></p>
        <hr>
        <p><b>Transaction Start Date</b></p>
        <p id="creationDate"></p>
        <hr>
        <p><b>Transaction Completion Date</b></p>
        <p id="completionDate"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Payment Status</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="payments_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_status" class="col-sm-3 control-label">Payment Status</label>
            <div class="col-sm-9">
              <select class="form-control" id="edit_status" name="status" required>
                <option value="pending">Pending</option>
                <option value="complete">Complete</option>
              </select>
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


