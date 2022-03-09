<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
require 'database.php';
include 'templates/header.php';

$database = new Database();
$db = $database->connect();
?>
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>

            <div class="panel-body">
                <!-- New Task Form -->
                <form action="new.php" method="POST" class="form-horizontal">
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task_name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="task_name" id="task_name" class="form-control" value="">
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
        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        <?php
                        $todos = $db->query("SELECT * FROM task");
                        while ($todo = $todos->fetch(PDO::FETCH_ASSOC)) {
                            if ($todo['completed'] == 1) {
                        ?>
                                <tr>
                                    <td class="col-sm-6">
                                        <del><?php echo $todo['task_name'] ?></del>
                                    </td>
                                    <!-- Task Buttons -->
                                    <td class="col-sm-6">
                                        <a href="" class='btn btn-success' disabled><i class="fa fa-btn fa-thumbs-o-up"></i>completed</a>
                                        <a href="edit.php?id=<?php echo $todo['id'] ?>" class='btn btn-primary'><i class="fa fa-btn fa-pencil"></i>edit</a>
                                        <a href="delete.php?id=<?php echo $todo['id'] ?>" class='btn btn-danger'><i class="fa fa-btn fa-trash"></i>delete</a>
                                    </td>
                                </tr>
                            <?php
                            } else {

                            ?>
                                <tr>
                                    <td class="col-sm-6">
                                        <?php echo $todo['task_name'] ?>
                                    </td>
                                    <!-- Task Buttons -->
                                    <td class="col-sm-6">
                                        <a href="completed.php?id=<?php echo $todo['id'] ?>" class='btn btn-success'><i class="fa fa-btn fa-thumbs-o-up"></i>completed</a>
                                        <a href="edit.php?id=<?php echo $todo['id'] ?>" class='btn btn-primary'><i class="fa fa-btn fa-pencil"></i>edit</a>
                                        <a href="delete.php?id=<?php echo $todo['id'] ?>" class='btn btn-danger'><i class="fa fa-btn fa-trash"></i>delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>