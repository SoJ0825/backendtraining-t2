<?php
$taskModel = new TaskModel();
if ($send == 'submit') {
    $task = $_POST['task'];
    $taskModel->create($task);

    header("location: http://localhost/backendtraining-t2/");
} else if ($send == 'delete') {
    $taskModel->delete($id);

    header("location: http://localhost/backendtraining-t2/");
} else if ($send == 'update') {
    $task = $_POST['task'];
    $taskModel->update($id, $task);

    header("location: http://localhost/backendtraining-t2/");
} else if ($send == 'completed') {
    $taskModel->completed($id);

    header("location: http://localhost/backendtraining-t2/");
}
