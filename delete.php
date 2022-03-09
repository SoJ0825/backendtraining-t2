<?php

if(isset($_GET['id'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM task WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
}