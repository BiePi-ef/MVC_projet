<?php
include_once 'bdd.php';

class CommandeModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function commande($id_velo,$nom,$prenom,$tel,$email,$message)
    {
        $user = $this->bdd->prepare("INSERT INTO commandes(id_velo,nom,prenom,tel,email,message) VALUE(?,?,?,?,?)");
        return $user->execute([$id_velo,$nom,$prenom,$tel,$email,$message]);
    }


}
?>