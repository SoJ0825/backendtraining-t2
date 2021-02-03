<?php
include('./includes/class-autoload.inc.php');

$taskModel = new TaskModel();
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $taskModel->create($task);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'delete') {
    $user_id = $_GET['id'];
    $taskModel->delete($user_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'update') {
    $user_id = $_GET['id'];
    $task = $_POST['task'];
    $taskModel->update($user_id, $task);

    header("location: index.php");
} else if ($_GET['send'] === 'completed') {
    $user_id = $_GET['id'];
    $taskModel->completed($user_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
}
