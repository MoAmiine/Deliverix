<?php 

class Orders extends CommandeService{

    public function __construct($id, $description, $etat, $date, $adresse, $user)
    {
        return parent::__construct($id, $description, $etat, $date, $adresse, $user);
    }
    
    
}