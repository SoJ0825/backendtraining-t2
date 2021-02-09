<?php
class TaskModel extends DatabaseHandle
{

    public function create($task)
    {
        $sql = "INSERT INTO tasks(task) VALUES (?)";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$task]);
    }

    public function read()
    {
        $sql = "SELECT * FROM tasks";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute();

        while ($result = $statement->fetchAll()) {
            return $result;
        }
    }

    public function select($id)
    {
        $sql = "SELECT * FROM tasks WHERE id = ?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$id]);
        $result = $statement->fetch();

        return $result;
    }

    public function update($id, $task)
    {
        $sql = "UPDATE tasks SET task=? WHERE id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$task, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tasks WHERE id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$id]);
    }

    public function completed($id)
    {
        $sql = "UPDATE tasks SET completed=1 WHERE id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$id]);
    }
}
