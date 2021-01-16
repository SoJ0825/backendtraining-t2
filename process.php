<?php
include('./includes/class-autoload.inc.php');

$tasks = new crud();
if (isset($_POST['submit'])) {
    $t_task = $_POST['t_task'];

    $tasks->create($t_task);

    header("location:{$_SERVER['HTTP_REFERER']}");
    // header("location:{$_SERVER['HTTP_ORIGIN']}/todolist/index.php");
    // header("Location: index.php");
} else if ($_GET['send'] === 'delete') {
    $t_id = $_GET['t_id'];
    $tasks->delete($t_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
} else if ($_GET['send'] === 'update') {
    $t_id = $_GET['t_id'];
    $t_task = $_POST['t_task'];

    $tasks->update($t_id, $t_task);

    header("location: index.php");
} else if ($_GET['send'] === 'fulfil') {
    $t_id = $_GET['t_id'];
    $tasks->fulfil($t_id);

    header("location:{$_SERVER['HTTP_REFERER']}");
}
