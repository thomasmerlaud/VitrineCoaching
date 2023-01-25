<?php
require_once("../inc/init.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/panier.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>
<?php
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte()) header("location:connexion.php");
$contenu .= '<p class="blanc2">Bonjour <strong>' . $_SESSION['membre']['pseudo'] . '</strong> ! Bienvenue dans votre espace membre</p>';
$contenu .= '<br><p class="dom"> <strong> Vos informations personnelles :</strong></p>';
$contenu .= '<p class= "blanc2">Adresse mail: ' . $_SESSION['membre']['email'] . '</p>';
$contenu .= '<p class= "blanc2">Ville: ' . $_SESSION['membre']['ville'] . '</p>';
$contenu .= '<p class= "blanc2">Code postal: ' . $_SESSION['membre']['code_postal'] . '</p>';
$contenu .= '<p class= "blanc2">Adresse: ' . $_SESSION['membre']['adresse'] . '</p></div><br>';
if(!empty($photo_dossier)){ ?>

    <img src="<?php echo RACINE_SITE; ?>img/$photo_dossier" alt="logo">;
<?php
}?>

<?php
//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("../inc/haut.inc.php"); 
echo $contenu;
?>