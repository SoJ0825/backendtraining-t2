<!-- Add New Post Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- form input -->
        <form method="POST" action="processes/post.process.php">
          <div class="form-group">
            <label>Title: </label>
            <input class="form-control" name="postName" type="text" required>
            <label>Content: </label>
            <textarea class="form-control"  name="postContent" required></textarea>
            <label>Author: </label>
            <input class="form-control" name="postAuthor" type="text" required>
            <label>Type: </label>
            <input class="form-control" name="postType" type="text" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Add post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>