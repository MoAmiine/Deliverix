<?php
include '../Abstract/Person.php';

class Utilisateur extends Person
{

    private int $id;
    private string $email;
    private string $password;
    private string $role;
    private array $commandes;

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom);
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->commandes = $commandes;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
    public function getCommandes(): array
    {
        return $this->commandes;
    }

    public function setCommandes(array $commandes): self
    {
        $this->commandes = $commandes;

        return $this;
    }

    
}