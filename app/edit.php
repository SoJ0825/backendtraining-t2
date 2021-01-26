<?php

  if ($_GET['edit_task_id']) {
    require '../db_conn.php';

    $id = $_GET['edit_task_id'];
    // $sql = "SELECT task FROM Task WHERE id=$id;";
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($id === $row['id']){
          $task = $row['task'];
          echo "    
            <html>
                <body>

                <form action=\"edit.php\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"$id\">
                Update Task: <input type=\"text\" name=\"name\"
                value=\"$task\"
                
                ><br>
                <input type=\"submit\">
                </form>

                </body>
              </html> 
            
            ";
        }
        
      }
    }   

  }elseif($_POST['id']){
    require '../db_conn.php'; 
    $id = $_POST['id'];   
    $task = $_POST['name'];

    $sql = "UPDATE Task SET task='$task' WHERE id=$id;";
    if ($conn->query($sql) === TRUE) {
      echo "hihi successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../frontend.php");

  }
  else {
    header("Location: ../frontend.php?mess=error");
  }

?>