<?php 

class UtilisateurService extends Utilisateur{
    private $userRepo;

    public function __construct(UtilisateurRepository $userRepo, $nom, $prenom, $id, $email, $password, $role, $commandes)
    {
        parent::__construct($nom, $prenom, $id, $email, $password, $role, $commandes);
        $this->userRepo = $userRepo;
    }

    public function Login($email, $password){
        $user = $this->userRepo->findByEmail($email);
        if (!$user ){
            return false;
        } 
        // elseif(!password_verify($password, $user['password'])){
        //     die($user['password'].'  '.password_hash($user['password'], PASSWORD_DEFAULT));
        // }
    

        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['nom'] . ' ' . $user['prenom'],
            'email' => $user['email'],
            'role' => $user['role']
        ];
        $_SESSION['role'] = $user['role'];
        return true;
    }
}