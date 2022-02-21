<?php

if(isset($_GET['id'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $Id = $_GET['id'];
    $stmt = $db->prepare("UPDATE Task SET Completed = 1 WHERE id = ?");
    $stmt->execute([$Id]);
    header("Location: index.php");
}