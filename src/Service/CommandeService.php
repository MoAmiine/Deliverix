<?php 

class CommandeService extends Commandes{

    public function __construct($id, $description, $etat, $date) {
        parent::__construct($id, $description, $etat, $date);
    }
    
    
}