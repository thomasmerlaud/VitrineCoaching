<?php require_once("../inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre objectif</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/obj.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>

<?php require_once("../inc/haut.inc.php"); ?>

    <header>
        <img src="<?php echo RACINE_SITE; ?>img/log3.png" alt="logo">
    </header>
    <div class="contenu">
        
        <div class="masse">
            <h2>Qu'est-ce qu'une prise de masse ?</h2>
            <p>
                Si on veut faire une définition très simple de la prise de masse, il s'agit comme son nom l'indique, d'augmenter votre masse, c'est-à-dire le poids de votre corps. Maintenant, si on en reste à cette définition, on pourrait penser qu'il suffit de manger chips et de cookies pour y arriver. 
                <br>
                <br>
                En réalité, c'est un peu plus complexe que cela : on ne cherche pas simplement à prendre du poids, mais à prendre en priorité de la masse musculaire. Et pour cela, il faudra mettre en place un entraînement adapté, une nutrition spécifique, mais aussi ne pas négliger le repos et la récupération. 
                <br>
                <br>
                Vous allez devoir monter ces trois paramètres à leur maximum : monter vos calories pour prendre du poids et optimiser votre récupération, vous entraîner encore plus dur pour profiter de ces calories excédentaires, et optimiser votre récupération et votre sommeil pour que les efforts réalisés à la salle de sport portent leurs fruits. 
            </p>
        </div>

        <div class="seche">
            <h2>Qu'est-ce qu'une sèche ?</h2>
            <p>Une sèche, en musculation, est un régime alimentaire où l’on va essayer de perdre du gras sans perdre de muscle (voire en gagner, mais ceci est presque impossible !). 
                <br>
                <br>
                Il s’agit d’apporter un maximum de protéines en minimisant les apports en glucides et les lipides doivent toujours être présents dans votre alimentation.
            </p>
        </div>

        <h1>Choisissez maintenant votre objectif</h1>
        <div class="boutons">
            <a href="masse.php">Prise de masse</a>
            <a href="seche.php">Sèche</a>
        </div>
        
    </div>

    <footer>
        <h2>Suivez-moi sur les réseaux sociaux</h2>
        <div class="content">

            <i class='footer bx bxl-facebook-circle' ></i>
            <i class='footer bx bxl-twitter' ></i>
            <i class='footer bx bxl-instagram-alt' ></i>
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
    </footer>
</body>