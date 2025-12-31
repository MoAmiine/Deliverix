<?php

class Livreur extends Utilisateur
{

    private array $notifications;
    private array $offres;
    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes, $notifications, $offres)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);

        $this->notifications = $notifications;
        $this->offres = $offres;
    }


    public function getNotifications(): array
    {
        return $this->notifications;
    }
    public function setNotifications(array $notifications): self
    {
        $this->notifications = $notifications;

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