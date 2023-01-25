

<?php
	require_once("init.inc.php");
	
	if(isset($_GET["id_commande"])){
		
		$id = $_GET['id_commande'];
		
		if ($id == -1) {// Si on supprime tout 
		
			$requete = "DELETE from commande";
		}
		else{
			$requete = "DELETE from commande where id_commande = $id";
		}
		$resultat = mysqli_query($connexion,$requete ); //Executer la requete de suppression

		if ( $resultat == FALSE ){echo "<p>Erreur d'exécution de la requete :".mysqli_error($connexion)."</p>" ;}
		
		mysqli_close($connexion); //Fermer la connexion
		header("Location:../admin/gestion_commande.php");
		
	}
?>
