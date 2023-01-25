<?php
//--------- BDD

    $hostname= 'localhost'; //nom du serveur (localhost)
    $username='root';//nom d'utilisateur pour accéder au serveur (root)
    $password='root'; //mot de passe pour accéder au serveur (root)
    $dbname='site'; //nom de la base de données
    
    $connexion = mysqli_connect($hostname, $username, $password, $dbname); //connexion à la BDD
    if (!$connexion) {    //la connexion n'a pas pu être établie
        echo "Erreur de connexion".mysqli_connect_errno();
        die();
    }

 
//--------- SESSION
session_start();
 
//--------- CHEMIN
define("RACINE_SITE","/site/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");