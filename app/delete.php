<?php

  if ($_GET['del_task']) {
    require '../db_conn.php';

    $id = $_GET['del_task'];
    $sql = "DELETE FROM Task WHERE id=$id;";

    if ($conn->query($sql) === TRUE) {
      echo "New record deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../frontend.php");
  }else {
    header("Location: ../frontend.php?mess=error");
  }

?>