<?php 
require_once __DIR__ . '/../Entity/Utilisateur.php';
require_once __DIR__ . '/../Database/DatabaseConnection.php';

class UtilisateurRepository extends Utilisateur{
    private $conn;

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes,) {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
        $this->conn = DatabaseConnection::connectDatabase();
    }

    public function findByEmail(string $email){ 
        $stmt = $this->conn->prepare('SELECT * FROM Utilisateurs WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Signup(array $data){
        $data[3] = password_hash($data[3], PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO Utilisateurs (nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute($data);
    }

    }
