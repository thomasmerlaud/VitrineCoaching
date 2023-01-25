

<?php
	require_once("init.inc.php");
	
	if(isset($_GET["id_membre"])){
		
		$id = $_GET['id_membre'];
		$requete = "DELETE from membre where id_membre = $id";

		$resultat = mysqli_query($connexion,$requete ); //Executer la requete de suppression

		if ( $resultat == FALSE ){echo "<p>Erreur d'exécution de la requete :".mysqli_error($connexion)."</p>" ;}
		
		mysqli_close($connexion); //Fermer la connexion
		
		header("Location:../admin/gestion_membre.php");
	}
?>
