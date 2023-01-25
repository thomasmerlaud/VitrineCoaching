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
		
			
			$requete="SELECT * FROM commande";//La requere SQL
			$resultat = mysqli_query($connexion,$requete ); //Executer la requete
			
			if ( $resultat == FALSE ){
				echo "<p >Erreur d'exécution de la requete :".mysqli_error($connexion)."</p>" ;
				die();
			}
			else
			{
				$nbreLignes = mysqli_num_rows($resultat); //Nombre de ligne du retour de la requete
                echo "<p class= 'blanc'>Vous avez accès ici aux informations des $nbreLignes commandes passées sur votre site.<p><br></br>";
				echo"<a class= 'blanc'href='../inc/supprimer_commande.php?id_commande=-1'>Supprimer tout l'historique ?</a></br></br>";
				
				//lire le tableau des resulats ligne par ligne
				if($nbreLignes>0){
					echo "<table class= 'blanc'border='1'>";
					echo '<tr>
					<th> Id_commande </th>
					<th> Id_membre  </th>
					<th> Montant </th>
					<th> Date enregistrement </th>
					<th> Suppression </th>
					
					</tr>';
					while ($row=mysqli_fetch_assoc ($resultat)){
						echo "
						<tr>
						
						<td>".$row['id_commande']."</td>
						<td>".$row['id_membre']."</td>
						<td>".$row['montant']."</td>
						<td>".$row['date_enregistrement']."</td›
						<td>"."</td>
						<td><a class= 'blanc'href='../inc/supprimer_commande.php?id_commande=".$row['id_commande']."'>Supprimer</a></td>
						</tr>";		
					}
					
					echo "</table>";
					
				}
				else{
					echo "<p class= 'blanc'>Il n'y a plus aucune ligne</p>";
				}
				mysqli_close($connexion);//Fermer la connexion
			}
		?>