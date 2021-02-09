<?php
include('./includes/class-autoload.inc.php');

$taskModel = new TaskModel();
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $taskModel->create($task);

    header("location: http://localhost/backendtraining-t2/");
} else if ($_GET['send'] === 'delete') {
    $id = $_GET['id'];
    $taskModel->delete($id);

    header("location: http://localhost/backendtraining-t2/");
} else if ($_GET['send'] === 'update') {
    $id = $_GET['id'];
    $task = $_POST['task'];
    $taskModel->update($id, $task);

    header("location: http://localhost/backendtraining-t2/");
} else if ($_GET['send'] === 'completed') {
    $id = $_GET['id'];
    $taskModel->completed($id);

    header("location: http://localhost/backendtraining-t2/");
}
