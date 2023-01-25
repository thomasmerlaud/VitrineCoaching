<?php require_once("../inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/prog.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
    <title>Sèche</title>
</head>

<?php require_once("../inc/haut.inc.php"); ?>
    <header>
        <img src="<?php echo RACINE_SITE; ?>img/log3.png" alt="logo">
        <h2>Votre entraînement perte de poids</h2>
    </header>

    <div class="push">
        <h1>Séance push</h1>
        <table class="blueTable" style="height: 296px;" width="560">
            <thead>
            <tr>
            <th style="orphans: 2; text-align: center; widows: 2;"><span style="text-align: left;">Exercices</span></th>
            <th>Séries</th>
            <th>Répétitions</th>
            <th>Récupération</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Développé couché (aux haltères)</td>
            <td>5</td>
            <td>6</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Développé militaire (assis - aux haltères)</td>
            <td>4</td>
            <td>8</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Développé incliné à la barre</td>
            <td>8</td>
            <td>8</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Développé couché prise serrée</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Élévations latérales</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Écarté à la poulis vis à vis</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Extension triceps à la poulie haute <br> (avec corde ou barre)</td>
            <td>8</td>
            <td>8</td>
            <td>1 min</td>
            </tr>
            </tbody>
            </table>

    </div>
    <br>
    <br>

    <div class="pull">
        <h1>Séance pull</h1>
        <table class="blueTable" style="height: 296px;" width="560">
            <thead>
            <tr>
            <th style="orphans: 2; text-align: center; widows: 2;"><span style="text-align: left;">Exercices</span></th>
            <th>Séries</th>
            <th>Répétitions</th>
            <th>Récupération</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Rowing à un bras</td>
            <td>5</td>
            <td>7</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Tirage vertical (pronation)</td>
            <td>4</td>
            <td>8</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Face pull</td>
            <td>8</td>
            <td>8</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Oiseau buste penché</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Pull over (poulie haute)</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Curl incliné</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            </tbody>
            </table>
    </div>
    <br>
    <br>

    <div class="Séance legs">
        <h1>Séance legs</h1>
        <table class="blueTable" style="height: 296px;" width="560">
            <thead>
            <tr>
            <th style="orphans: 2; text-align: center; widows: 2;"><span style="text-align: left;">Exercices</span></th>
            <th>Séries</th>
            <th>Répétitions</th>
            <th>Récupération</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Squat</td>
            <td>5</td>
            <td>7</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Hip thrust</td>
            <td>4</td>
            <td>86</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Leg extensions</td>
            <td>8</td>
            <td>8</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Presse inclinée</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Leg curl</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Mollets debout</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            </tbody>
            </table>
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