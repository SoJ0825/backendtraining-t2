<?php 
        $servername = "localhost";
        $username = "localuser";
				$password = "Password123#@!";
				$dbname = 'todolist';
        
        // Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM Task ORDER BY reg_date DESC;";
				$result = $conn->query($sql);

    ?>