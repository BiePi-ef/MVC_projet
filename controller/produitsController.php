<?php
include_once 'model/produitsModel.php';


class ProduitsController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProduitsModel;
    }

    public function getLastProduct()
    {
        $product = $this->model->getLastProduct();
        include_once 'view/accueil.php';
    }

<<<<<<< HEAD
    public function getProductById($id)
    {
        $product = $this->model->getProductById($id);
        include_once 'view/commande.php';
    }

    // public function getProduits()
    // {
    //     $produits = $this->model->getArticles();
    //     include_once 'view/articles.php';
    // }
=======
    public function getProduits()
    {
        $produits = $this->model->getProduits();
        include_once 'view/produits.php';
>>>>>>> 53746163460c0cac9be2257eb02436e1e109a243

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


