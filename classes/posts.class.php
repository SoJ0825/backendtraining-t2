<?php 

class Posts extends Dbh {
  public function getPost() {
    $sql = "SELECT * FROM posts";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function addPost($postName, $postContent, $postAuthor,$postType) {
    $sql = "INSERT INTO posts(postName, postContent, postAuthor,postType) VALUES (?, ?, ?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$postName, $postContent, $postAuthor, $postType]);
  }

  public function editPost($postID) {
    $sql = "SELECT * FROM posts WHERE postID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$postID]);
    $result = $stmt->fetch();

    return $result;
  }

  public function updatePost($postID, $postName, $postContent, $postAuthor,$postType) {
    $sql = "UPDATE posts SET postName = ?, postContent = ?, postAuthor = ?, postType = ? WHERE postID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$postName, $postContent, $postAuthor,$postType, $postID]);
  }

  public function delPost($postID) {
    $sql = "DELETE FROM posts WHERE postID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$postID]);
  }
}