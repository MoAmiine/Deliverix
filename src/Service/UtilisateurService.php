<?php 

class UtilisateurService extends Utilisateur{

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
    }
}