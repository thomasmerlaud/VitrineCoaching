<?php require_once("../inc/init.inc.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/cookie.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/prog.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
    <title>Prise de masse</title>
</head>
<?php require_once("../inc/haut.inc.php"); ?>
    <header>
        <img src="<?php echo RACINE_SITE; ?>img/log3.png" alt="logo">
        <h2>Votre entraînement prise de masse</h2>
    </header>

    <div class="push">
        <h1>Séance 1 - Dos & Pectoraux</h1>
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
            <td>Rowing à 1 bras</td>
            <td>5</td>
            <td>10</td>
            <td>1 min</td>
            </tr>
            <tr>
            <td>Développé couché avec barre</td>
            <td>5</td>
            <td>8</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Tirage vertical prise supination</td>
            <td>4</td>
            <td>8</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Développé incliné aux haltères</td>
            <td>5</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Rowing buste penché pronation</td>
            <td>4</td>
            <td>10</td>
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
        <h1>Séance 2 - Bas du corps</h1>
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
            <td>Presse à cuisses</td>
            <td>6</td>
            <td>6</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Fentes arrières</td>
            <td>4</td>
            <td>10</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Leg extentions</td>
            <td>8</td>
            <td>8</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Leg curl</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Mollet debout</td>
            <td>8</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Soulevé de terre/td>
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
        <h1>Séance 3 - Épaules & Bras</h1>
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
            <td>Développé militaire debout avec barre</td>
            <td>6</td>
            <td>10</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Élévation latérale à un bras</td>
            <td>4</td>
            <td>12</td>
            <td>2 min</td>
            </tr>
            <tr>
            <td>Oiseau buste penché</td>
            <td>4</td>
            <td>12</td>
            <td>2min</td>
            </tr>
            <tr>
            <td>Curl incliné</td>
            <td>5</td>
            <td>8</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Barre au front</td>
            <td>5</td>
            <td>10</td>
            <td>1 min 30</td>
            </tr>
            <tr>
            <td>Pompes serrées</td>
            <td>5</td>
            <td>Maximum</td>
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