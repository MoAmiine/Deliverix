<?php 



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST['role'] = $role;
    $_POST['prenom'] = $prenom;
    $_POST['nom'] = $nom;
    $_POST['email'] = $email;
    $_POST['mot_de_passe'] = $motdepasse;
}

