<?php 

class AdministrateurRepository extends Administrateur {

    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
    }
}