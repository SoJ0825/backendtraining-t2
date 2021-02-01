<?php 
    require("../classes/dbh.class.php");
    require("../classes/types.class.php");

  $types = new Types();
  
  if(isset($_POST['submit'])) {
    $typeName = $_POST['typeName'];
    $typeContent = $_POST['typeContent'];
    $typeAuthor = $_POST['typeAuthor'];
  
    $types->addType($typeName, $typeContent, $typeAuthor);
  
    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=added");
  
  } else if($_GET['send'] === 'del') {
    $typeID = $_GET['typeID'];
    $types->delType($typeID);

    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=deleted");
  } else if($_GET['send'] === 'update') {
    $id = $_GET['typeID'];

    $typeName = $_POST['typeName'];
    $typeContent = $_POST['typeContent'];
    $typeAuthor = $_POST['typeAuthor'];

    $types->updateType($id, $typeName, $typeContent, $typeAuthor);

    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=updated");
  }
