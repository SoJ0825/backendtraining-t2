<?php
ini_set("display_errors", "On");
include_once '../config/task.php';

	$taskDB = new TaskDB();  
	if (isset($_GET['msg'])) {
    	$taskID = $_GET['tID'];
    	if ($_GET['msg'] == "completed") {
    		$taskDB -> isCompleted($taskID);
    		// header ("location: ../index.php");
	    } else if ($_GET['msg'] == "edit") {
	    	$taskname = $_POST['name'];
	    	$taskDB -> editTask($taskID, $taskname);
			// header ("location: ../index.php");
	    } else if ($_GET['msg'] == "delete") {
	    	$taskDB -> deleteTask($taskID);
	    	// header ("location: ../index.php");
	    }
	} else if (isset($_POST['submit'])) {
        $taskname = $_POST['name'];
        $taskDB -> addTask($taskname);
        // header ("location: ../index.php");
    }
    header ("location: ../index");


