<?php
class taskModel extends databaseHandle
{

    public function create($t_task)
    {
        $sql = "INSERT INTO tasks(t_task) VALUES (?)";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$t_task]);
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

    public function select($t_id)
    {
        $sql = "SELECT * FROM tasks WHERE t_id = ?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$t_id]);
        $result = $statement->fetch();

        return $result;
    }

    public function update($t_id, $t_task)
    {
        $sql = "UPDATE tasks SET t_task=? WHERE t_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$t_task, $t_id]);
    }

    public function delete($t_id)
    {
        $sql = "DELETE FROM tasks WHERE t_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$t_id]);
    }

    public function completed($t_id)
    {
        $sql = "UPDATE tasks SET t_completed=1 WHERE t_id=?";
        $statement = $this->pdo()->prepare($sql);
        $statement->execute([$t_id]);
    }
}
