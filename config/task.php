<?php
include_once 'dbConnect.php';


class TaskDB extends dbConnect {

	public function getAllTasks() {
		$statement = $this->connect()->query("SELECT * FROM task order by time desc");
		while ($row = $statement->fetchAll()) {
			return $row;
		}
	}

	public function selectTask($tID) {
		$statement = $this->connect()->prepare("SELECT * FROM task WHERE tID=?");
		$statement->execute([$tID]);
		$row = $statement->fetch();
		return $row;
	}

	public function addTask($taskname) {
		$statement = $this->connect()->prepare("INSERT INTO task (taskname, time) VALUES (?, now())");
		$statement->execute([$taskname]);
	}

	public function editTask($tID, $taskname) {
        $statement = $this->connect()->prepare("UPDATE task SET taskname=? WHERE tID=?");
        $statement->execute([$taskname, $tID]);
    }

    public function deleteTask($tID)
    {
        $statement = $this->connect()->prepare("DELETE FROM task WHERE tID=?");
        $statement->execute([$tID]);
    }

    public function isCompleted($tID)
    {
        $statement = $this->connect()->prepare("UPDATE task SET flag=1 WHERE tID=?");
        $statement->execute([$tID]);
    }

}
