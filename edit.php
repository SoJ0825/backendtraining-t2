<?php
require 'database.php';
include 'templates/header.php';

$database = new Database();
$db = $database->connect();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM task WHERE id = ?");
    $stmt->execute([$id]);
    $taskName = $stmt->fetch()['task_name'];
}

if(isset($_POST['task_name'])){
    $id = $_GET['id'];
    $taskName = htmlentities($_POST['task_name']);

    $stmt = $db->prepare("UPDATE task SET task_name = :task_name WHERE id = :id");
    $stmt->execute(array('task_name' => $taskName, 'id' => $id));
    header("Location: index.php");
}

?>
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Task
            </div>

            <div class="panel-body">
                <!-- New Task Form -->
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form-horizontal">
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task_name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="task_name" id="task_name" class="form-control" value="<?php echo $task_name?>">
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>