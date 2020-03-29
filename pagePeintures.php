<section class="peintures">
	<?php
	// On récupère tout le contenu de la table peintures
	$reponse = mysqli_query($bdd, "SELECT * FROM peintures ORDER BY annee DESC");
	while ($donnees = mysqli_fetch_array($reponse)){
	?>
		<section class="sectionPrincipale">
			<article class ="imageDeLaPeinture">
				<!-- <a href= "<?php echo $donnees['imageGrande'];?>"> -->
				<a href="index.php?page=peintures/presentationDeLaPeinture&amp;indiceDeLaPeinture=<?php echo $donnees['indice']; ?> ">
					<img src=' <?php echo $donnees['imagePetite'];?> '>
				</a>
			</article>
			<div class="titreDeLaPeinture"><?php echo $donnees['titre']; ?></div>
		</section>		
	<?php		
	}
	//$reponse->closeCursor(); // Termine le traitement de la requête
	?>
</section>