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
        };

				$sql = "CREATE TABLE Task (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				task VARCHAR(30) NOT NULL,
        is_checked BOOLEAN NOT NULL DEFAULT 0,
				reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql) === TRUE) {
					echo "Table Task created successfully";
				} else {
					echo "Error creating table: " . $conn->error;
				};


?>