<?php
include_once 'model/produitsModel.php';



class ArticlesController
{
    private $model;

    public function __construct()
    {
        $this->model = new PorduitsModel;
    }




    public function getProduits()
    {
        $produits = $this->model->getArticles();
        include_once 'view/articles.php';
    }

    public function getProduitsByCategorie()
    {
        $produits = $this->model->getArticlesByCategorie($_GET['id']);
        include_once 'view/articles.php';
    }

    public function getProduitById()
    {
        $produit = $this->model->getArticleById($_GET['id']);
        include_once 'view/article.php';
    }

}


