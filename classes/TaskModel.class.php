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

    public function select($user_id)
    {
        $sql = "SELECT * FROM tasks WHERE user_id = ?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$user_id]);
        $result = $statement->fetch();

        return $result;
    }

    public function update($user_id, $task)
    {
        $sql = "UPDATE tasks SET task=? WHERE user_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$task, $user_id]);
    }

    public function delete($user_id)
    {
        $sql = "DELETE FROM tasks WHERE user_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$user_id]);
    }

    public function completed($user_id)
    {
        $sql = "UPDATE tasks SET completed=1 WHERE user_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$user_id]);
    }
}
