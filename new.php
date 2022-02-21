<?php

if(isset($_POST['task-name'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $task_name = $_POST['task-name'];
    $stmt = $db->prepare("INSERT INTO Task(Task_name, Completed) VALUES(?, 0)");
    $stmt->execute([$task_name]);
    header("Location: index.php");
}