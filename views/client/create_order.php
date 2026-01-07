<?php 


     include __DIR__ . '/../../src/Entity/commande.php';
    include __DIR__ . '/../../src/Repository/CommandeRepository.php';
    include __DIR__ . '/../../src/Service/CommandeService.php';

session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $description = $_POST['description'] ?? '';
        $etat = "En attente doffres";
        $date = new DateTime();
        $adresse = $_POST['adresse'] ?? '';
        $CommandeService = new CommandeService(null, $description, $etat, $date, $adresse, $_SESSION['user']['id']);
        $CommandeService->createCommande($description, $etat, $date, $adresse, $_SESSION['user']['id']);
        header('location: /frontend/pages/client/orders.php');
    
}