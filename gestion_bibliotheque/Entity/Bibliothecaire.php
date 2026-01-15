<?php 
include __DIR__ . '/gestion_bibliotheque/Entity/Livre.php';
include __DIR__ . '/../Database/DatabaseConnection.php';

class Bibliothecaire extends Person{
    private int $id;
    private string $email;
    private string $password;
    
    public function __construct($nom, $prenom, $id, $email, $password){
        parent::__construct($nom, $prenom);
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function ajouterLivre($conn){
        $livre = new Livre(null, 'Livre 1','1', 'false');
        $stmt = $conn->prepare('INSERT INTO livres(id, nom_livre, auteur_id, reservation) VALUES(?,?,?,?)');
        $stmt->execute();
    }
    public function afficherLivres($conn){
        $stmt = $conn->query('SELECT * FROM livres');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }
    
    public function supprimerLivre($conn){
        $stmt = $conn->query('DELETE * FROM LIVRE WHERE id = ?');
        $stmt->execute();
    }
    public function rechercherMembre($conn){
        $stmt = $conn->query('SELECT * FROM Membre WHERE id = ?');
        $stmt->execute();
    }

}