<?php 
include __DIR__ . '../Entity/Utilisateur.php';
include __DIR__ . '../Database/DatabaseConnection.php';

class  CommandeRepository extends Commandes{
    
    private $conn;

    public function __construct($id, $description, $etat, $date, $adresse) {
        parent::__construct($id, $description, $etat, $date, $adresse);
        $this->conn = DatabaseConnection::connectDatabase();
    }
    
    public function insertCommande(){
        $stmt = $this->conn->prepare('INSERT INTO Commandes (description, etat, date_creation, Adresse)');
        $stmt->execute([
            $this->getDescription(),
            $this->getEtat(),
            $this->getDate(),
            $this->getAdresse()
        ]);
    }

}
