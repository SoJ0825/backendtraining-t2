<?php 
    require("../classes/dbh.class.php");
    require("../classes/posts.class.php");

  $posts = new Posts();
  
  if(isset($_POST['submit'])) {
    $postName = $_POST['postName'];
    $postContent = $_POST['postContent'];
    $postAuthor = $_POST['postAuthor'];
    $postType = $_POST['postType'];
  
    $posts->addPost($postName, $postContent, $postAuthor,$postType);
  
    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=added");
  
  } else if($_GET['send'] === 'del') {
    $postID = $_GET['postID'];
    $posts->delPost($postID);

    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=deleted");
  } else if($_GET['send'] === 'update') {
    $postID = $_GET['postID'];

    $postName = $_POST['postName'];
    $postContent = $_POST['postContent'];
    $postAuthor = $_POST['postAuthor'];
    $postType = $_POST['postType'];

    $posts->updatePost($postID, $postName, $postContent, $postAuthor,$postType);

    header("location: {$_SERVER['HTTP_ORIGIN']}/workspace/index.php?status=updated");
  }
