
<!-- Add New Type Modal Start-->
<div class="modal fade" id="addTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <!-- form input -->
        <form method="POST" action="processes/type.process.php">
          <div class="form-group">
            <label>Type Name: </label>
            <input class="form-control" name="typeName" type="text" required>
          </div>
          <div class="form-group">
            <label>Type Content: </label>
            <textarea class="form-control"  name="typeContent" required></textarea>
          </div>
          <!--
          <div class="form-group">
            <label>Author: </label>
            <input class="form-control" name="typeAuthor" type="text" required>
          </div>
          -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Add Type</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>