<body>
    <nav>
        <h1><a href="<?php echo RACINE_SITE; ?>index.php">NOMA Coaching</a></h1>
        <div class="menu">
            
			<?php
			if(internauteEstConnecteEtEstAdmin())
			{
				echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
				echo '<a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>';
				echo '<a href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>';
				echo '<a href="' . RACINE_SITE . 'php/boutique.php">Accès à la boutique</a>';
				echo '<a href="' . RACINE_SITE . 'php/connexion.php?action=deconnexion">Se déconnecter</a>';
			}
			else {
				
				if(internauteEstConnecte())
				{
					echo '<a href="' . RACINE_SITE . 'php/connexion.php?action=deconnexion">Se déconnecter</a>';
					echo '<a href="' . RACINE_SITE . 'php/profil.php">Voir votre profil</a>';
					
					echo '<a href="' . RACINE_SITE . 'php/objectifs.php">Objectifs</a>';
					echo '<a href="' . RACINE_SITE . 'php/nutrition.php">Nutrition</a>';
					echo '<a href="' . RACINE_SITE . 'php/contact.php">Contact</a>';
					
					echo '<a href="' . RACINE_SITE . 'php/boutique.php">Accès à la boutique</a>';
					echo '<a href="' . RACINE_SITE . 'php/panier.php">Voir votre panier</a>';
					
				}
				else
				{
					echo '<a href="' . RACINE_SITE . 'php/inscription.php">Inscription</a>';
					//<i class='bx bxs-shopping-bags' style='color:#f5b11f'  ></i>
					echo '<a href="' . RACINE_SITE . 'php/connexion.php">Connexion</a>';
					echo '<a href="' . RACINE_SITE . 'php/objectifs.php">Objectifs</a>';
					echo '<a href="' . RACINE_SITE . 'php/nutrition.php">Nutrition</a>';
					echo '<a href="' . RACINE_SITE . 'php/carte.php">Où s'."'".'entraîner ?</a>';
					echo '<a href="' . RACINE_SITE . 'php/contact.php">Contact</a>';
					echo '<a href="' . RACINE_SITE . 'php/boutique.php">Accès à la boutique</a>';
					echo '<a href="' . RACINE_SITE . 'php/panier.php">Voir votre panier</a>';
				}
			}
			?>
			
            
        </div>
    </nav>

	