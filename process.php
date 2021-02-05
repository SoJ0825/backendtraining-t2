<?php
include('./includes/class-autoload.inc.php');

$taskModel = new TaskModel();
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $taskModel->create($task);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'delete') {
    $id = $_GET['id'];
    $taskModel->delete($id);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'update') {
    $id = $_GET['id'];
    $task = $_POST['task'];
    $taskModel->update($id, $task);

    header("location: index.php");
} else if ($_GET['send'] === 'completed') {
    $id = $_GET['id'];
    $taskModel->completed($id);

    header("location:{$_SERVER['HTTP_REFERER']}");
}
