<?php
require_once("../inc/init.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Produit</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/boutique.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>
<?php
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(isset($_GET['id_produit']))  { $resultat = executeRequete("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'"); }
if($resultat->num_rows <= 0) { header("location:boutique.php"); exit(); }
 
$produit = $resultat->fetch_assoc();
$contenu .= "<h2 class= 'blanc'>Titre : $produit[titre]</h2><hr><br>";
$contenu .= "<p class= 'blanc'>Categorie: $produit[categorie]</p>";
$contenu .= "<p class= 'blanc'>Couleur: $produit[couleur]</p>";
$contenu .= "<p class= 'blanc'>Taille: $produit[taille]</p>";
$chemin =substr($produit['photo'],11);
$contenu .= "<img class= 'blanc'src='/site/img$chemin' ='150' height='150'>";
$contenu .= "<p class= 'blanc'><i>Description: $produit[description]</i></p><br>";
$contenu .= "<p class= 'blanc'>Prix : $produit[prix] €</p><br>";
 
if($produit['stock'] > 0)
{
    $contenu .= "<i class= 'blanc'>Nombre d'produit(s) disponible : $produit[stock] </i><br><br>";
    $contenu .= '<form method="post" action="panier.php">';
        $contenu .= "<input type='hidden' name='id_produit' value='$produit[id_produit]'>";
        $contenu .= '<label  class= "blanc"for="quantite">Quantité : </label>';
        $contenu .= '<select id="quantite" name="quantite">';
            for($i = 1; $i <= $produit['stock'] && $i <= 5; $i++)
            {
                $contenu .= "<option class= 'blanc'>$i</option>";
            }
        $contenu .= '</select>';
        $contenu .= '<input type="submit" name="ajout_panier" value="ajout au panier">';
    $contenu .= '</form>';
}
else
{
    $contenu .= 'Rupture de stock !';
}
$contenu .= "<br><br><br><a  class= 'blanc'href='boutique.php?categorie=" . $produit['categorie'] . "'>Cliquez pour revenir à la séléction de " . $produit['categorie'] . "</a><br><br><br><br><br><br>";
//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("../inc/haut.inc.php");
echo $contenu;