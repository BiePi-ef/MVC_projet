<?php
include_once 'bdd.php';

class UsersModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function inscription($nom,$prenom,$tel,$email,$mdp) 
    {
        $user = $this->bdd->prepare("INSERT INTO users(nom,prenom,tel,email,mdp) VALUE(?,?,?,?,?)");
        return $user->execute([$nom,$prenom,$tel,$email,$mdp]);
    }


}
?>