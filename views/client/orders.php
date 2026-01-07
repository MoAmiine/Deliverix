<?php 

class Orders extends CommandeService{

    public function __construct($id, $description, $etat, $date, $adresse)
    {
        return parent::__construct($id, $description, $etat, $date, $adresse);
    }

    
}