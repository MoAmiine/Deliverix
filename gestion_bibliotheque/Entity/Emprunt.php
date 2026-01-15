<?php 

class Emprunt{
    private int $id;
    private int $id_livre;
    private DateTime $date_reservation;
    private int $id_membre;

    public function __construct($id, $id_livre, $date_reservation, $id_membre)
    {
        $this->id = $id;
        $this->id_livre = $id_livre;
        $this->date_reservation = $date_reservation;
        $this->id_membre = $id_membre;
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

    public function getIdLivre(): int
    {
        return $this->id_livre;
    }

    public function setIdLivre(int $id_livre): self
    {
        $this->id_livre = $id_livre;

        return $this;
    }

    public function getDateReservation(): DateTime
    {
        return $this->date_reservation;
    }

    public function setDateReservation(DateTime $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getIdMembre(): int
    {
        return $this->id_membre;
    }

    public function setIdMembre(int $id_membre): self
    {
        $this->id_membre = $id_membre;

        return $this;
    }
}