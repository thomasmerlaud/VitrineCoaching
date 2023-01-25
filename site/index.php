<?php require_once("inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMA Coaching</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>
	
	<?php require_once("inc/haut.inc.php");?>
    <header>
        <img src="<?php echo RACINE_SITE; ?>img/nomablanc.png" alt="">
        <h3>Bienvenue sur NOMA Coaching </h3>
        <h4>Trouvez le programme sportif et nutritionnel adapté à votre morphologie.</h4>
    </header>

    <div class="presentation">
        <div class="qui">
            <div class="left">
                <img src="<?php echo RACINE_SITE; ?>img/pp.JPG"alt="Thomas"></div>
            <div class="right">
               <h1>Qui sommes-nous ?</h1> 
               <p>Thomas Merlaud - Nolan Cacheux  : Titulaire du BAC et étudiant en première année à l'ISEN. <br><br>Passionnés de musculation, c'est à travers notre site web que nous partageons cette passion. Ayant appris de nos propres erreurs et cotoyé des professionnels dans le milieu, nous avons décidé de vous partager les clés pour atteindre vos objectifs.</p>
            
            </div>
        </div>

        <div class="pourqui">
            <div class="left">
                <img src="<?php echo RACINE_SITE; ?>img/nolan.jpg" alt="Nolan"></div>
            <div class="right">
               <h1>Pour qui ?</h1> 
               <p>Envie d'une remise en forme ? Ce site est fait pour vous ! Peu importe votre âge, votre cadre de vie, votre activité professionnelle ou vos pré-requis dans le milieu, ce site est fait pour vous. Apprenez pas à pas et en toute serénité grâce à TCP. Ensemble, atteignons vos objectifs !</p>
            
            </div>
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
                <br /><a href="php/accept_cookie.php">OK</a>
            </div>
        <?php } ?>
    </footer>
</body>
</html>

