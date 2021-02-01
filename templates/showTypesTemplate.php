<!--show type-->
<div class="row">
  <?php $types = new Types(); ?>
    <?php if($types->getType()) : ?>
      <?php foreach($types->getType() as $type) : ?>
        <div class="col-md-6 mt-4">
          <div class="card">
            <div class="card-body">
            <div class="text-left">
              <h5 class='card-title'><?= $type['typeName'] ?></h5>
            </div>
              <a href='processes/type.process.php?send=del&typeID=<?=$type['typeID']?>' class='btn btn-danger'>Delete This Type</a>

              <button class="my-5 btn btn-primary" data-toggle="modal" data-target="#addPostModal">Create Post</button>
              <!--
              <p class='card-text'><?= $type['typeContent'] ?></p>
              <h6 class='card-subtitle text-muted text-right'>Author: <?= $type['typeAuthor'] ?></h6>
              -->
              
              <!--show post-->
              <?php include("showPostsTemplate.php"); ?>

              <!--<a  href='editType.php?id=<?= $type['typeID'] ?>' class='btn btn-warning'>Edit</a>-->
              
            </div>
          </div>
        </div>
      <?php endforeach ?>
    <?php else : ?>
      <p class='mt-5 mx-auto'>There is no type</p>
    <?php endif?>  
</div>