<?php

class Administrateur extends Utilisateur
{
    private array $utilisateurs;

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
    }

    public function getUtilisateurs(): array
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(array $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }
}