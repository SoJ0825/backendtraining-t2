<?php

if(isset($_GET['id'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $id = $_GET['id'];
    $stmt = $db->prepare("UPDATE task SET completed = 1 WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
}