<?php 

class DatabaseConnection {
    private $host = "localhost";
    private $db_name = "deliverix";
    private $username = "root";
    private $password = "";

    public function __construct($host, $db_name, $username, $password)
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
    } 
    public static function connectDatabase(){
        $host = "localhost";
        $db_name = "deliverix";
        $username = "root";
        $password = "";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo 'failed'.$e->getMessage();
            return null;
        }
    }
    public function disconnectDatabase($conn){
        $conn = null;
    }
}