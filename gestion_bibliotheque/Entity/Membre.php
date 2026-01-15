<?php 
include __DIR__ . '/Livre.php';

class Membre extends Person{

    private int $id;
    private string $email;
    private string $password;
    private $livres_reserve = [];

    public function __construct($nom, $prenom, $id , $email, $password, $livres_reserve)
    {
        parent::__construct($nom, $prenom);
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->livres_reserve = $livres_reserve;
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

    public function getLivresReserve()
    {
        return $this->livres_reserve;
    }

    public function setLivresReserve($livres_reserve): self
    {
        $this->livres_reserve = $livres_reserve;

        return $this;
    }
public function rechercherLivre($conn){
    $stmt = $conn->query('SELECT * FROM Livres WHERE nom_livre = ?');
    $stmt->execute();
}
public function reserverLivre($conn){
    $reservation = $conn->query('SELECT * FROM livre WHERE id = ?');
    $reservation->execute();
    fo
}
}