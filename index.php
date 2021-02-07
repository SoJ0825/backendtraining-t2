<?php
    ini_set("display_errors", "On");
    include 'views/header.html';
?>

<!DOCTYPE html>
<html lang="en">
<body id="app-layout">
        <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="./controllers/taskController.php" method="POST" class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" name="submit" class="btn btn-default">
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
                            <tr>
                                <?php
                                    include 'views/currentTasks.php';
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>