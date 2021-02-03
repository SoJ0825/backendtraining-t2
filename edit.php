<?php
include "./includes/class-autoload.inc.php";
require_once("./templates/header.php");


$taskModel = new TaskModel();

$taskData = $taskModel->select($_GET['id']);
$taskId = $taskData['user_id'];
$task = $taskData['task'];


?>
<div class="container-fluid  border-bottom bg-dark text-white">
    <div class="p-2 my-0 text-center">
        <h2 class="m-0">
            Edit
        </h2>
    </div>
</div>

<div class="row">
    <div class="col-md-7 mx-auto">
        <!-- form input -->
        <form method="POST" action="process.php?send=update&id=<?php echo $taskId ?>">

            <div class="form-group">
                <h3>Content </h3>
                <textarea class="form-control" name="task" rows="3" required><?php echo $task ?></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <a href="index.php" class="btn btn-secondary mx-2">Close</a>
                <button type="submit" class="btn btn-primary mx-2">Update Task</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once("./templates/footer.php");
?>