<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New User</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="fullName" class="col-sm-3 control-label">Full Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="userType" class="col-sm-3 control-label">User Type</label>
            <div class="col-sm-9">
              <select class="form-control" id="userType" name="userType" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
        </form>
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
        <h4 class="modal-title"><b>Edit User</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_fullName" class="col-sm-3 control-label">Full Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_fullName" name="fullName" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_phone" class="col-sm-3 control-label">Phone</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_phone" name="phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
              <input type="email" class="form-control" id="edit_email" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_password" class="col-sm-3 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" class="form-control" id="edit_password" name="password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_userType" class="col-sm-3 control-label">User Type</label>
            <div class="col-sm-9">
              <select class="form-control" id="edit_userType" name="userType" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
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

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Delete User</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE USER</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>