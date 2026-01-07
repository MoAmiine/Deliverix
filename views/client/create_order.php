<?php 

     include __DIR__ . '/../../src/Entity/commande.php';
    include __DIR__ . '/../../src/Repository/CommandeRepository.php';
    include __DIR__ . '/../../src/Service/CommandeService.php';

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $description = $_POST['description'] ?? '';
        $etat = "En attente doffres";
        $date = new DateTime();
        $adresse = $_POST['adresse'] ?? '';
        $CommandeService = new CommandeService(null, $description, $etat, $date, $adresse);
        $CommandeService->createCommande($description, $etat, $date, $adresse);
        header('location: /frontend/pages/client/orders.php');
    
}