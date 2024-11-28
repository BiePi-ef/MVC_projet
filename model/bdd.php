<?php

class Bdd{

    public static function connexion()
    {
        try
        {
            $bdd = new PDO("mysql:host=localhost;port=3306;dbname=smartbike","root","");
            //echo "connexion BDD OK";
            return $bdd;
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }
}



// test bdd
// $bdd = new Bdd; 
// $bdd->connexion();
// $bdd new Bdd::connexion();