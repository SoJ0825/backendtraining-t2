<?php 
  require_once("./templates/header.php");
  require("./classes/dbh.class.php");
  require("./classes/posts.class.php");
  require("./classes/types.class.php");
?>
<div class="text-left">
  <button class="my-5 btn btn-warning" data-toggle="modal" data-target="#addTypeModal">Create Type</button>
  <button class="my-5 btn btn-primary" data-toggle="modal" data-target="#addPostModal">Create Post</button>
</div>
<!-- Add New Type Modal-->
<?php include("./templates/addNewTypeModal.php"); ?>
<!-- Add New Post-->
<?php include("./templates/addNewPostModal.php"); ?>
<!--show Types Template-->
<?php include("./templates/showTypesTemplate.php"); ?>

<?php 
  require_once("./templates/footer.php");
?>