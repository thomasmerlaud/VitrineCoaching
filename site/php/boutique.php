

<?php
require_once("../inc/init.inc.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMA Shop</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/boutique.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>

<?php
require_once("../inc/haut.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
//--- AFFICHAGE DES CATEGORIES ---//
$categories_des_produits = executeRequete("SELECT DISTINCT categorie FROM produit");
$contenu .= '<div class="boutique-gauche">';
$contenu .= "<ul>";
$contenu .= "<h1 test </h1>";
while($cat = $categories_des_produits->fetch_assoc())
{
    $contenu .= "<li class= 'barre'><a  href='?categorie=" . $cat['categorie'] . "'>" . $cat['categorie'] . "</a></li>";
}
$contenu .= "</ul>";
$contenu .= "</div>";


//--- AFFICHAGE DES PRODUITS ---//
$contenu .= '<div class="boutique-droite">';
if(isset($_GET['categorie']))
{
    $donnees = executeRequete("SELECT * FROM produit WHERE categorie='$_GET[categorie]'");  
    while($produit = $donnees->fetch_assoc())
    {
        $contenu .= '<div class="boutique-produit">';
        $contenu .= "<h2 class= 'barre'>$produit[titre]</h2>";
		$chemin =substr($produit['photo'],11);
        $contenu .= "<a class= 'barre'href=\"fiche_produit.php?id_produit=$produit[id_produit]\"><img src=\"/site/img$chemin\" =\"130\" height=\"250\"></a>";
        $contenu .= "<p class= 'barre'style=font-weight: bold;color : white;>$produit[prix]€</p>";
        $contenu .= '<a class= "barre"href="fiche_produit.php?id_produit=' . $produit['id_produit'] . '">Voir la fiche</a>';
        $contenu .= '</div>';
    }
}

else{
    ?><img src="<?php echo RACINE_SITE; ?>img/shop.png" alt=""><?php
}
$contenu .= '</div>';
//--------------------------------- AFFICHAGE HTML ---------------------------------//

echo $contenu; ?>
		<?php
            if(isset($_COOKIE['accept_cookie'])) {
                $showcookie = false;
            } 
            else {
                $showcookie = true;
            }
        ?>
        <?php if($showcookie) { ?>
            <div class="cookie-alert">
                En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies 
                pour vous proposer des contenus et services adaptés à vos centres d’intérêts.
                <br /><a href="accept_cookie.php">OK</a>
            </div>
        <?php } ?>