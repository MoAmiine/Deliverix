<?php
include __DIR__ . '/../../src/Database/DatabaseConnection.php';
include __DIR__ . '/../../src/Repository/UtilisateurRepository.php';
include __DIR__ . '/../../src/Service/UtilisateurService.php';
session_start();

$userRepo = new UtilisateurRepository('', '', null, '', '', '', []);
$authService = new UtilisateurService($userRepo, '', '', null, '', '', '', []);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ($authService->Login($_POST['email'], $_POST['password'])) {
        $role = $_SESSION['user']['role'];
        if ($role == 'Administrateur') {
            header('Location: /frontend/pages/admin/dashboard.php');
            
        } 
        echo 'khmh';
         if ($role === 'Livreur') {
            header(header: 'Location: /frontend/pages/livreur/my-offers.php');
            
        } 
        else if ($role === 'Client') {
            header('Location: /frontend/pages/client/orders.php');
            
        } else {
            $error = "Invalid role.";

        }
    } else {

        $error = "Invalid email or password.";
    }
}
