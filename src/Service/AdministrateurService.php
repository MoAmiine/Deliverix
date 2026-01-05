<?php 

class AdministrateurService extends Administrateur{

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
    }
    
    public function gererUtilisateur($utilisateurId, $action) {
        
    }

}