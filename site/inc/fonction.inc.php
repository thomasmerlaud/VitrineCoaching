<?php

function executeRequete($req)
{
	$hostname= 'localhost'; //nom du serveur (localhost)
	$username='root';//nom d'utilisateur pour accéder au serveur (root)
	$password='root'; //mot de passe pour accéder au serveur (root)
	$dbname='site'; //nom de la base de données
	
	$connexion = mysqli_connect($hostname, $username, $password, $dbname); //Connexion
	if (!$connexion) {
		echo "Erreur de connexion".mysqli_connect_errno();
		die();
	}
	
    global $mysqli;
	$resultat = mysqli_query($connexion,$req ); //Executer la requete
	if ( $resultat == FALSE ){
		echo "<p>Erreur d'exécution de la requete :".mysqli_error($connexion)."</p>" ;die();
	}
    return $resultat; // 
}
function internauteEstConnecte()
{ 
    if(!isset($_SESSION['membre'])) return false;
    else return true;
}
//------------------------------------
function internauteEstConnecteEtEstAdmin()
{
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) return true;
    return false;
}
function creationDuPanier()
{
   if(!isset($_SESSION['panier']))
   {
      $_SESSION['panier'] = array();
      $_SESSION['panier']['titre'] = array();
      $_SESSION['panier']['id_produit'] = array();
      $_SESSION['panier']['quantite'] = array();
      $_SESSION['panier']['prix'] = array();
   }
}
//------------------------------------
function ajouterProduitDansPanier($titre, $id_produit, $quantite, $prix)
{
    creationDuPanier(); 
    $position_produit = array_search($id_produit,  $_SESSION['panier']['id_produit']);
    if($position_produit !== false)
    {
         $_SESSION['panier']['quantite'][$position_produit] += $quantite ;
    }
    else
    {
        $_SESSION['panier']['titre'][] = $titre;
        $_SESSION['panier']['id_produit'][] = $id_produit;
        $_SESSION['panier']['quantite'][] = $quantite;
        $_SESSION['panier']['prix'][] = $prix;
    }
}
//------------------------------------
function montantTotal()
{
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
   {
      $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return round($total,2); 
}
//------------------------------------
function retirerProduitDuPanier($id_produit_a_supprimer)
{
    $position_produit = array_search($id_produit_a_supprimer,  $_SESSION['panier']['id_produit']);
    if ($position_produit !== false)
    {
        array_splice($_SESSION['panier']['titre'], $position_produit, 1);
        array_splice($_SESSION['panier']['id_produit'], $position_produit, 1);
        array_splice($_SESSION['panier']['quantite'], $position_produit, 1);
        array_splice($_SESSION['panier']['prix'], $position_produit, 1);
    }
}
?>