<?php require_once("../inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'entraîner</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/carte.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>
<?php require_once("../inc/haut.inc.php"); ?>

    <header>
        <img src="<?php echo RACINE_SITE; ?>img/nomanoir.png" alt="">
    </header>

    <div class="hautdepage">
        <h1>Où s'entraîner ?</h1>
        <p>Ces derniers temps, les salles de sport deviennent de plus en plus
            nombreuses dans nos villes. Les grandes chaînes comme Basic Fit ou Fitness Park
            sont nombreuses et il arrive souvent qu'il y en ait plusieurs dans une même ville. 
            Il n'y a plus d'excuss pour ne pas s'entaîner ! Il existe également de nombreuses 
            salles privées comme des salles réservées aux étudiants avec des budgets plus abordables
            comme par exemple celle de l'<a href="https://www.all-lacatho.fr/fr/content/category/5-sport">université catholique</a> de lille. 
            Vous n'avez vraiment aucune salle de sport autour de chez vous ? Ne paniquez pas. Nombreuses sont les personnes qui se 
            débarassent de leur matériel de musculation sur des sites de vente comme Le Bon Coin.
            Vous trouverez forcément à un moment !
        </p>
    </div>
    <div class="carte">
        <h1>Trouvez une salle de sport proche de chez vous</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d40492.60621475228!2d3.047160413682387!3d50.631057055434944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbasic-fit!5e0!3m2!1sfr!2sfr!4v1637259801020!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="carte"></iframe>
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
</html>