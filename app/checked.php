<?php 

  if ($_GET['checked_id']) {
    require '../db_conn.php';
    $id = $_GET['checked_id'];

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($id === $row['id']){
        $is_checked = $row['is_checked'];
        

        if ($row['is_checked'] == 0){
          $is_checked = 1;
        }else{
          $is_checked = 0;
        }
        

        $sql = "UPDATE Task SET is_checked='$is_checked' WHERE id=$id;";
        if ($conn->query($sql) === TRUE) {
          echo "$is_checked";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: ../frontend.php");
        }
      }
    }


  }

?>