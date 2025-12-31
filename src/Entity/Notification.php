<?php 

class Notifications 
{
    private int $id;
    private string $contenu;
    private  DateTime $date_notification;
    private Utilisateur $utilisateur;

    public function __construct($id, $contenu, $date_notification, $utilisateur){
        $this->id = $id;
        $this->contenu = $contenu;
        $this->date_notification = $date_notification;
        $this->utilisateur = $utilisateur;
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

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateNotification()
    {
        return $this->date_notification;
    }

    public function setDateNotification($date_notification): self
    {
        $this->date_notification = $date_notification;

        return $this;
    }

    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}