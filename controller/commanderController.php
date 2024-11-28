
<?php
include_once 'model/commandeModel.php';

class commandeController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel;
    }

    public function getFromCommande()
    {
        include_once 'view/commande.php';
    }

    public function commande()
    {
        if(isset($_POST['email']))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $message = $_POST['message']


            if($this->model->commande($nom,$prenom,$email, $message))
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
