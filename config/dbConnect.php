<?php

class dbConnect {
	
	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function connect() {

		include_once 'env.php';

		try {
			$dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
			$pdo = new PDO($dsn, $this->username, $this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

	}

}



?>