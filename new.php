<?php

if(isset($_POST['task_name'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $task_name = htmlentities($_POST['task_name']);
    $stmt = $db->prepare("INSERT INTO task(task_name, completed) VALUES(?, 0)");
    $stmt->execute([$task_name]);
    header("Location: index.php");
}