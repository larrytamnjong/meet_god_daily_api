<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New Devotion</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="devotions_add.php">
          <div class="form-group">
            <label for="devotionTitle" class="col-sm-3 control-label">Devotion Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="devotionTitle" name="devotionTitle" required>
            </div>
          </div>
          <div class="form-group">
            <label for="bibleVerse" class="col-sm-3 control-label">Bible Verse</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="bibleVerse" name="bibleVerse" required>
            </div>
          </div>
            <div class="form-group">
              <label for="bibleVerseMessage" class="col-sm-3 control-label">Bible Verse Message</label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="4" id="bibleVerseMessage" name="bibleVerseMessage" required></textarea>
              </div>
            </div>
          <div class="form-group">
            <label for="devotionMessage" class="col-sm-3 control-label">Devotion Message</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" id="devotionMessage" name="devotionMessage" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="devotionPrayer" class="col-sm-3 control-label">Devotion Prayer</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" id="devotionPrayer" name="devotionPrayer" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="messageDate" class="col-sm-3 control-label">Message Date</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" id="messageDate" name="messageDate" required>
            </div>
          </div>
          <div class="form-group">
            <label for="devotionWriter" class="col-sm-3 control-label">Devotion Writer</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="devotionWriter" name="devotionWriter" required>
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
        <h4 class="modal-title"><b>Edit Devotion</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="devotions_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_devotionTitle" class="col-sm-3 control-label">Devotion Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_devotionTitle" name="devotionTitle" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_bibleVerse" class="col-sm-3 control-label">Bible Verse</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_bibleVerse" name="bibleVerse" required>
            </div>
          </div>
            <div class="form-group">
              <label for="edit_bibleVerseMessage" class="col-sm-3 control-label">Bible Verse Message</label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="4" id="edit_bibleVerseMessage" name="bibleVerseMessage" required></textarea>
              </div>
            </div>
          <div class="form-group">
            <label for="edit_devotionMessage" class="col-sm-3 control-label">Devotion Message</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" id="edit_devotionMessage" name="devotionMessage" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_devotionPrayer" class="col-sm-3 control-label">Devotion Prayer</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" id="edit_devotionPrayer" name="devotionPrayer" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_messageDate" class="col-sm-3 control-label">Message Date</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" id="edit_messageDate" name="messageDate" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_devotionWriter" class="col-sm-3 control-label">Devotion Writer</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_devotionWriter" name="devotionWriter" required>
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
        <h4 class="modal-title"><b>Are you sure you want to delete this devotion?</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="devotions_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>Delete Devotion</p>
            <h2 class="bold description"></h2>
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