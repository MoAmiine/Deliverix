<?php 

class CommandeService extends Commandes{

    public function __construct($id, $description, $etat, $date, $adresse, $user) {
        parent::__construct($id, $description, $etat, $date, $adresse, $user);
    }

    public function createCommande($description, $etat, $date, $adresse, $user) {
        $commandeRepository = new CommandeRepository(null, $description, $etat, $date, $adresse, $user);
        $commandeRepository->insertCommande();

    }
    public function listAllCommandes() {
        $commandeRepository = new CommandeRepository(null, null, null, null, null, null);
        return $commandeRepository->getAllCommandes();
    }
}