<?php
class dbh
{
    private $host = "localhost";
    private $dbname = "todolist";
    private $charset = "utf8";
    private $user = "root";
    private $pwd = "";

    public function pdo()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        return $pdo;
    }

    function __destruct()
    {
        $this->pdo = NULL;
        // echo "資料庫結束連線<hr>";
    }
}

// try{
//     $pdo = new dbh();
//     echo "資料庫連結成功<hr>";
// }catch(PDOException $e){
//     echo "資料庫連結失敗，" . $e->getMessage() . "<hr>";
// }
