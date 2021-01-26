<?php

if($_POST['name']){
    require '../db_conn.php';
    
    $task = $_POST['name'];
    $sql = "INSERT INTO Task (task) VALUES ('$task');";
  
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../frontend.php");
}else {
    header("Location: ../frontend.php?mess=error");
}