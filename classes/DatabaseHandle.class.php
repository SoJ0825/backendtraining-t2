<?php
require  "./env.php";
class DatabaseHandle
{
    private $host = DATABASE_HOST;
    private $dbname = DATABASE_NAME;
    private $charset = "utf8";
    private $user = DATABASE_USERNAME;
    private $pwd = DATABASE_PASSWORD;

    public function pdo()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
        try {
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            return $pdo;
        } catch (PDOException $e) {
            echo "資料庫連結失敗，" . $e->getMessage() . "<hr>";
            die();
        }
    }

    function __destruct()
    {
        $this->pdo = NULL;
    }
}
