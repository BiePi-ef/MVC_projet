
<?php
include_once 'model/commandeModel.php';

class commandeController
{
    private $produitModel;
    private $commandeModel;

    public function __construct()
    {
        $this->produitModel = new ProduitsModel;
        $this->commandeModel = new commandeController;
    }

    public function getFromCommande()
    {
        include_once 'view/commande.php';
    }

    public function commande()
    {
        if(isset($_POST['email']))
        {   
            $id_velo = $_POST['id_velo'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['message'];
            $message = $_POST['message'];


            if($this->commandeModel->commande($id_velo,$nom,$prenom,$email,$tel,$message))
            {
                echo "commande ok";
            }
            else
            {
                echo "erreur d'commande";
                $this->getFromCommande();

            }

        }
        else{
            $this->getFromCommande();
        }

    }



}
