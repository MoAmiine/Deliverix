<?php 

class  CommandeRepository extends Commandes{

    public function __construct($id, $description, $etat, $date) {
        parent::__construct($id, $description, $etat, $date);
    }
    
    
}
