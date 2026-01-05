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

        if (!$user || !password_verify($password, $user['password'])){
            return false;
        }

        session_start();
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'role' => $user['role']
        ];
        return true;
    }


    public function logout(){
        session_start();
        session_destroy();
    }
}