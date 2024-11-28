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
        include_once "controller/produitsController.php";
        $produit = new ProduitsController;
        $produit->getLastArticle();
        break;
    
    case 'produits':
        include_once "controller/produitsController.php";
        $produits = new ProduitsController;
        $produits->getProduits();
        break;

    case 'commander':
        include_once "controller/commanderController.php";
        break;

    case 'contact':
        include_once "view/contact.php";
        break;

    default :
    include './view/404.php';
}