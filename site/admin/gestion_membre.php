<?php 
require_once("../inc/init.inc.php");
require_once("../inc/haut.inc.php"); 


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMC Accueil</title>
	<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>css/panier.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>img/boxicons/css/boxicons.min.css">
</head>

<?php
		
			
			$requete="SELECT * FROM membre";//La requere SQL
			$resultat = mysqli_query($connexion,$requete ); //Executer la requete
			
			if ( $resultat == FALSE ){
				echo "<p>Erreur d'exécution de la requete :".mysqli_error($connexion)."</p>" ;
				die();
			}
			else
			{
				$nbreLignes = mysqli_num_rows($resultat); //Nombre de ligne du retour de la requete
                echo "<p class= 'blanc2'>Vous avez accès ici aux informations des $nbreLignes adhérents à votre site.<br>(Vous pouvez aussi supprimer des adhérents.)</p>";
				//lire le tableau des resulats ligne par ligne
				if($nbreLignes>0){
					echo "<table class= 'blanc' border='1'>";
					echo '<tr>
					<th> Id_membre </th>
					<th> Pseudo  </th>
					<th> Mot de passe</th>
					<th> Nom</th>
					<th> Prenom</th>
					<th> Email</th>
					<th> Civilite </th>
					<th> Ville </th>
					<th> Code postal</th>
					<th> Adresse</th>
					<th> Statut</th>
					
					<th colspan ="2">Action</th>
					</tr>';
					while ($row=mysqli_fetch_assoc ($resultat)){
						echo "
						<tr>
						
						<td>".$row['id_membre']."</td>
						<td>".$row['pseudo']."</td>
						<td>".$row['mdp']."</td>
						<td>".$row['nom']."</td›
						<td>"."</td>
						<td>".$row['prenom']."</td>
						<td>".$row['email']."</td>
						<td>".$row['civilite']."</td>
						<td>".$row['ville']."</td>
						<td>".$row['code_postal']."</td›
						<td>"."</td>
						<td>".$row['adresse']."</td>
						<td>".$row['statut']."</td›
						<td>"."</td>
						
						<td><a class= 'blanc' href='../inc/supprimer.php?id_membre=".$row['id_membre']."'>Supprimer</a></td>
						
						</tr>";		
					}
					echo "</table>";
				}
				else{
					echo "aucune ligne";
				}
				mysqli_close($connexion);//Fermer la connexion
			}
		?>