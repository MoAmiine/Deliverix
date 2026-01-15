<?php 

class DatabaseConnection {
    private string $username = 'root';
    private string $password = '';
    private PDO $conn;

    public function __construct($username, $password, $conn)
    {
        $this->username = $username;
        $this->password = $password;
        $this->conn = $conn;
    }
    public function ConnectDb($username, $password){
       $conn = new PDO('mysql:host=localhost;dbname=db_name',$username, $password);
    }
}