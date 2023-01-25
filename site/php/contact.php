<?php require_once("../inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/contact.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>


<?php require_once("../inc/haut.inc.php"); ?>
    
    <header>
        <img src="<?php echo RACINE_SITE; ?>img/nomanoir.png" alt="">
    </header>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contactez-nous</h2>
				<input type="text" class="field" placeholder="Votre nom">
				<input type="text" class="field" placeholder="Votre mail">
				<input type="text" class="field" placeholder="Votre numéro">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="bouton">Envoyer</button>
			</div>
		</div>
	</div>

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
    
</body>



</html>