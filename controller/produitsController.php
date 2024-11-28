<?php
include_once 'model/produitsModel.php';


class ProduitsController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProduitsModel;
    }

    public function getLastArticle()
    {
        $article = $this->model->getLastArticle();
        include_once 'view/accueil.php';
    }

    public function getProduits()
    {
        $produits = $this->model->getProduits();
        include_once 'view/produits.php';

    }

    public function getProduitsByCategorie()
    {
        $produits = $this->model->getProduitsByCategorie($_GET['id']);
        include_once 'view/produits.php';
    }

    public function getProduitById()
    {
        $produit = $this->model->getProduitById($_GET['id']);
        include_once 'view/produit.php';
    }

}


