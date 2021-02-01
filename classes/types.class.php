<?php 

class Types extends Dbh {
  public function getType() {
    $sql = "SELECT * FROM types";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function addType($typeName, $typeContent, $typeAuthor) {
    $sql = "INSERT INTO types(typeName, typeContent, typeAuthor) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$typeName, $typeContent, $typeAuthor]);
  }

  public function editType($typeID) {
    $sql = "SELECT * FROM types WHERE typeID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$typeID]);
    $result = $stmt->fetch();

    return $result;
  }

  public function updateType($id, $typeName, $typeContent, $typeAuthor) {
    $sql = "UPDATE types SET typeName = ?, typeContent = ?, typeAuthor = ? WHERE typeID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$typeName, $typeContent, $typeAuthor, $typeID]);
  }

  public function delType($typeID) {
    $sql = "DELETE FROM types WHERE typeID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$typeID]);
  }
}