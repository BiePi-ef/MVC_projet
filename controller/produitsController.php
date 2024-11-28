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

    // public function getProduits()
    // {
    //     $produits = $this->model->getArticles();
    //     include_once 'view/articles.php';
    // }

    // public function getProduitsByCategorie()
    // {
    //     $produits = $this->model->getArticlesByCategorie($_GET['id']);
    //     include_once 'view/articles.php';
    // }

    // public function getProduitById()
    // {
    //     $produit = $this->model->getArticleById($_GET['id']);
    //     include_once 'view/article.php';
    // }

}


