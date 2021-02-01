<!--show post-->
<div class="row">
    <?php $posts = new Posts(); ?>
    <?php if($posts->getPost()) : ?>
        
            <?php foreach($posts->getPost() as $post) : ?>
                <?php if ($post['postType']==$type['typeName']) : ?>
                <div class="col-md-6 mt-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class='card-title'><?= $post['postName'] ?></h5>
                        <p class='card-text'><?= $post['postContent'] ?></p>
                        <h6 class='card-subtitle text-muted text-right'>Author: <?= $post['postAuthor'] ?></h6>
                        <a  href='editForm.php?id=<?= $post['postID'] ?>' class='btn btn-warning'>Edit</a>
                        <a href='processes/post.process.php?send=del&id=<?=$post['postID']?>' class='btn btn-danger'>Delete</a>
                    </div>
                    </div>
                <?php endif?>
            <?php endforeach ?>
        
    <?php endif?>  
</div>