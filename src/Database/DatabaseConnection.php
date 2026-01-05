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
    public function connectDatabase($conn, $host, $db_name, $username, $password){
        try {
            $conn = new PDO("mysql:$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'failed'.$e->getMessage();
        }
    }
}