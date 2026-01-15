<?php 

class Livre {

    private int $id;
    private string $nom_livre;
    private int $auteur_id;
    private bool $reservation;

    public function __construct($id, $nom_livre, $auteur_id, $reservation)
    {
        $this->id = $id;
        $this->nom_livre = $nom_livre;
        $this->auteur_id = $auteur_id;
        $this->reservation = $reservation;
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

    public function getNomLivre(): string
    {
        return $this->nom_livre;
    }

    public function setNomLivre(string $nom_livre): self
    {
        $this->nom_livre = $nom_livre;

        return $this;
    }

    public function getAuteurId(): int
    {
        return $this->auteur_id;
    }

    public function setAuteurId(int $auteur_id): self
    {
        $this->auteur_id = $auteur_id;

        return $this;
    }

    public function isReservation(): bool
    {
        return $this->reservation;
    }

    public function setReservation(bool $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}