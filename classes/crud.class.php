<?php
require "dbh.class.php";
class crud extends dbh
{

    public function create($t_task)
    {
        $sql = "INSERT INTO tasks(t_task) VALUES (?)";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([$t_task]);
    }

    public function read()
    {
        $sql = "SELECT * FROM tasks";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    public function edit($t_id)
    {
        $sql = "SELECT * FROM tasks WHERE t_id = ?";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([$t_id]);
        $result = $stmt->fetch();

        return $result;
    }

    public function update($t_id, $t_task)
    {
        $sql = "UPDATE tasks SET t_task=? WHERE t_id=?";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([$t_task, $t_id]);
    }

    public function delete($t_id)
    {
        $sql = "DELETE FROM tasks WHERE t_id=?";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([$t_id]);
    }

    public function fulfil($t_id)
    {
        $sql = "UPDATE tasks SET t_fulfil=1 WHERE t_id=?";
        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([$t_id]);
    }
}
