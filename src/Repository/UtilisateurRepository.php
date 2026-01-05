<?php 
include '../Database/DatabaseConnection.php';

class UtilisateurRepository extends Utilisateur{
    private $pdo;

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes, PDO $pdo) {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
        $this->pdo = $pdo;
    }

    public function findByEmail(string $email){ 
        $stmt = $this->pdo->prepare('SELECT * FROM Utilisateurs WHERE email = ?');
        $stmt->execute(['email' => $email]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $data){
        $stmt = $this->pdo->prepare("INSERT INTO Utilisateurs (nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute($data);
    }

    }
