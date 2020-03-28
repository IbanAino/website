<section class="peintures">
<?php
	// on récupère l'indice de la peinture
	$indiceDeLaPeinture = $_GET['indiceDeLaPeinture'] ;
	//$indiceDeLaPeinture = "caissiere" ;
	//echo $indiceDeLaPeinture;
	// On récupère tout le contenu de la table peintures avec l'entrée (l'indice) récupérée précédamment
	$reponse = mysqli_query($bdd, "SELECT * FROM peintures WHERE indice='$indiceDeLaPeinture'");
	// On affiche une entrée
	$donnees = mysqli_fetch_assoc($reponse)
?>
    <section class="sectionPrincipale">		
		<article class ="imageDeLaPeinture">
					<a href= "<?php echo $donnees['imageGrande'];?>">
						<img src=' <?php echo $donnees['imageMoyenne'];?> '>
					</a>
		</article>
		<aside class ="descriptifDeLaPeinture">
				<div class="titreDeLaPeinture02"><?php echo $donnees['titre']; ?></div></br>
				<div class ="descriptifDeLaPeinture">
					<?php echo $donnees['technique']; ?></br>
					<?php echo $donnees['taille']; ?></br>
					<?php echo $donnees['annee']; ?>
				</div>
		</aside>
				
		<a class="navigateurRetour" href="index.php?page=peintures/pagePeintures">retour aux peintures</a>	
	</section>
</section>