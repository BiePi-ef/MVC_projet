<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// pages :
// - accueil
// - produits
// - commander
// - contact

switch($page)
{
    case 'accueil':
        // exemple :
        // include_once 'controller/articlesController.php';
        // $articles = new ArticlesController;
        // $articles->getArticles();
        // break;

    case 'categorie':
        break;
    
    case 'produits':
        break;

    case 'commander':
        break;

    case 'contact':
        break;

    default :
    include './view/404.php';
}