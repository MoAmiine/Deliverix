<?php 
include_once 'Offer.php';

class Commandes{
    private ?int $id;
    private ?string $description;
    private ?string $etat;
    private ?DateTime $date;
    private ?string $adresse;
    private ?string $user;
    private array $offres = [];

    public function __construct($id, $description, $etat, $date, $adresse, $user, $offres = []){
        $this->id = $id;
        $this->description = $description;
        $this->etat = $etat;
        $this->date = $date;
        $this->adresse = $adresse;
        $this->user = $user;
        $this->offres = $offres;
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
    
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getOffres(): array
    {
        return $this->offres;
    }

    public function setOffres(array $offres): self
    {
        $this->offres = $offres;

        return $this;
    }
}
