<?php 

class CommandeService extends Commandes{

    public function __construct($id, $description, $etat, $date, $adresse) {
        parent::__construct($id, $description, $etat, $date, $adresse);
    }
    
    public function createCommande($description, $etat, $date, $adresse) {
        $commandeRepository = new CommandeRepository(null, $description, $etat, $date, $adresse);
        $commandeRepository->insertCommande();

    }
}