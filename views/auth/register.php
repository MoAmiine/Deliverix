<?php

include __DIR__ . '/../../src/Database/DatabaseConnection.php';
include __DIR__ . '/../../src/Repository/UtilisateurRepository.php';
include __DIR__ . '/../../src/Service/UtilisateurService.php';
session_start();

$userRepo = new UtilisateurRepository('', '', null, '', '', '', []);
$authService = new UtilisateurService($userRepo, '', '', null, '', '', '', []);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ($userRepo->Signup([
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['password'],
        $_POST['role']
    ])) {
        header('Location: /frontend/pages/auth/login.html');
        exit;
    } else {
        $error = "Registration failed. Please try again.";
    }
}
