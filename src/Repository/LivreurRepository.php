<?php 

class LivreurRepository extends Livreur{
    public function __construct($nom, $prenom, $id, $email, $password, $role, $commandes, $notifications, $offres)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes, $notifications, $offres);
    }
}