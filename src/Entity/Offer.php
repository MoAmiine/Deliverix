<?php 

class Offre {
    private int $id;
    private string $description;
    private string $duree_estimee;
    private float $prix;
    private string $commande;
    private string $livreur;

    public function __construct($id, $description, $duree_estimee, $prix, $commande, $livreur){
        $this->id = $id;
        $this->description = $description;
        $this->duree_estimee = $duree_estimee;
        $this->prix = $prix;
        $this->commande = $commande;
        $this->livreur = $livreur;
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

    public function getDureeEstimee(): string
    {
        return $this->duree_estimee;
    }

    public function setDureeEstimee(string $duree_estimee): self
    {
        $this->duree_estimee = $duree_estimee;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCommande(): string
    {
        return $this->commande;
    }

    public function setCommande(string $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getLivreur(): string
    {
        return $this->livreur;
    }

    public function setLivreur(string $livreur): self
    {
        $this->livreur = $livreur;

        return $this;
    }
}