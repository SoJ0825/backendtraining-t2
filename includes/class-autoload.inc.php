<?php 
  require("./classes/dbh.class.php");
  require("./classes/posts.class.php");

function autoload($className) {
  $path = 'classes/';
  $extension = '.class.php';
  $fileName = $path . $className . $extension;

  if(!file_exists($fileName)) {
    return false;
  }

  include_once $fileName;
}