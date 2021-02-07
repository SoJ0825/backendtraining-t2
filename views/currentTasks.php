<?php
ini_set("display_errors", "On");
include_once './config/task.php';


	$taskDB = new TaskDB();	
	foreach ($taskDB->getAllTasks() as $taskItem) {
		if ($taskItem['flag'] == 0) {
			echo '<tr><td class="col-sm-6">' . $taskItem['taskname'] .'</td>';
        	echo '<td class="col-sm-6">
                <button type="submit" class="btn btn-success" onclick="location.href=\'./controllers/taskController.php?msg=completed&tID=' . $taskItem["tID"] . '\'"><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
                <button type="submit" class="btn btn-primary" onclick="location.href=\'./edit/' . $taskItem["tID"] . '\'"><i class="fa fa-btn fa-pencil"></i>edit</button>
                <button type="submit" class="btn btn-danger" onclick="location.href=\'./controllers/taskController.php?msg=delete&tID=' . $taskItem["tID"] . '\'"><i class="fa fa-btn fa-trash"></i>delete</button>
      		    </td></tr>';
		}
		else {
			echo '<tr><td class="col-sm-6"><del>' . $taskItem['taskname'] .'</del></td>';
        	echo '<td class="col-sm-6">
                <button type="submit" class="btn btn-success" disabled><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
                <button type="submit" class="btn btn-danger" onclick="location.href=\'./controllers/taskController.php?msg=delete&tID=' . $taskItem["tID"] . '\'"><i class="fa fa-btn fa-trash"></i>delete</button>
      		    </td></tr>';
		}

    }

