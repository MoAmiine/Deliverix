<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    include __DIR__ . '../../src/Entity/commande.php';
    include __DIR__ . '/../../src/Service/CommandeService.php';
    include __DIR__ . '/../../src/Repository/CommandeRepository.php';

    $description = $_POST['description'];
    $etat = 'En attente';
    $date = date('Y-m-d H:i:s');
    $adresse = $_POST['adresse'];

    $CommandeService = new CommandeService(null, $description, $etat, $date, $adresse);
}