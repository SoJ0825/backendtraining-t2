<?php
    ini_set("display_errors", "On");
    include 'header.html';
    include_once '../config/task.php';
?>

<!DOCTYPE html>
<html lang="en">
<body id="app-layout">
        <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Task
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="../controllers/taskController.php?msg=edit&tID=<?php echo $_GET['tID'] ?>" method="POST" class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <?php
                                    $taskDB = new TaskDB();
                                    $taskItem = $taskDB -> selectTask($_GET['tID']); 
                                    $taskname = $taskItem['taskname'];
                                    echo '<input type="text" name="name" id="task-name" class="form-control" value="'. $taskname .'">';
                                
                                ?>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" name="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>