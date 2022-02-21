<?php

if(isset($_GET['id'])){
    require 'database.php';
    $database = new Database();
    $db = $database->connect();

    $Id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM Task WHERE id = ?");
    $stmt->execute([$Id]);
    header("Location: index.php");
}