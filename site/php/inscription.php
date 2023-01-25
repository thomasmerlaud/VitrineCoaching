<?php 

require_once("../inc/init.inc.php"); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/formulaires.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>

<?php 
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if($_POST)
{
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); 
    if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) // 
    {
        $contenu .= "<div class='blanc'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='blanc'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]')");
            $contenu .= "<div class='blanc'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
        }
    }
}

//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
<?php require_once("../inc/haut.inc.php"); ?>
<?php echo $contenu; ?>
 

<div class="formulaire-droite">
    <div class="droite">
        <h2> Vous n'êtes pas encore inscrit ?</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <fieldset>
            <label for="pseudo">Pseudo</label><br>
            <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
                
            <label for="mdp">Mot de passe</label><br>
            <input type="password" id="mdp" name="mdp" required="required"><br><br>
                
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
                
            <label for="prenom">Prénom</label><br>
            <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br><br>
        
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
                
            <label for="civilite">Civilité</label><br>
            <input name="civilite" value="m" checked="" type="radio">Homme
            <input name="civilite" value="f" type="radio">Femme<br><br>
                        
            <label for="ville">Ville</label><br>
            <input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>
                
            <label for="cp">Code Postal</label><br>
            <input type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
                
            <label for="adresse">Adresse</label><br>
            <textarea id="adresse" name="adresse" placeholder="votre adresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea><br><br>

            <input type="submit" name="inscription" value="S'inscrire">
        </fieldset>
        </form>
    </div>
	<div class="gauche">
        <img src="<?php echo RACINE_SITE; ?>img/aventure.png" alt=""></div>
    </div>
    
</div>

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