<?php
require 'database.php';
include 'templates/header.php';

$database = new Database();
$db = $database->connect();

if(isset($_GET['id'])){
    $Id = $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM Task WHERE Id = ?");
    $stmt->execute([$Id]);
    $task_name = $stmt->fetch()['Task_name'];
}

if(isset($_POST['task-name'])){
    $Id = $_GET['id'];
    $task_name = $_POST['task-name'];

    $stmt = $db->prepare("UPDATE Task SET Task_name = :Task_name WHERE Id = :Id");
    $stmt->execute(array('Task_name' => $task_name, 'Id' => $Id));
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
                        <label for="task-name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="task-name" id="task-name" class="form-control" value="<?php echo $task_name?>">
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