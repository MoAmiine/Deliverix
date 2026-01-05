<?php
include '../Deliverix/src/Service/UtilisateurService.php';

if ($authService->login($_POST['email'], $_POST['password'])) {
    $role = $_SESSION['role'];

    if ($role === 'admin') {
        header('Location: pages/admin/dashboard.php');
    } 
    elseif ($role === 'livreur') {
        header('Location: pages/livreur/my-offers.php');
    } 
    else {
        header('Location: pages/client/orders.php');
    }
    exit(); 
}
