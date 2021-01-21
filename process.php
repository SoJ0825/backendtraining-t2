<?php
include('./includes/class-autoload.inc.php');

$taskModel = new taskModel();
if (isset($_POST['submit'])) {
    $t_task = $_POST['task'];

    $taskModel->create($t_task);

    header("location:{$_SERVER['HTTP_REFERER']}");
    // header("location:{$_SERVER['HTTP_ORIGIN']}/todolist/index.php");
    // header("Location: index.php");
} else if ($_GET['send'] === 'delete') {
    $t_id = $_GET['id'];
    $taskModel->delete($t_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'update') {
    $t_id = $_GET['id'];
    $t_task = $_POST['task'];

    $taskModel->update($t_id, $t_task);

    header("location: index.php");
} else if ($_GET['send'] === 'completed') {
    $t_id = $_GET['id'];
    $taskModel->completed($t_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
}
