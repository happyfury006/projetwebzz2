<!doctype html/>
<html>
  <head>
    <!-- titre de la fenêtre -->
		<title>Accueil</title>
		<!-- précise l'encodage au navigateur (gestion des accents, ...) -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Feuille de style -->
		<link rel="stylesheet" type="text/css" href="css/styleAccueil.css">
		<!-- Inibe la grande largeur sur mobile : évite que le mobile présente un écran large et qu'il faille zoomer -->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0" />
		<!-- icône de la page -->
		<!-- <link rel="icon" href="img/icone-site.gif" /> -->
  </head>
  <body>
		<div class="titre">
			<img src="img/icone-site.gif"></img> 
			<!-- Jeux Vidéos -->
			<p>Jeux Vidéos</p> 
		</div>
		<div class="authentification">
			<!-- AUTHENTIFICATION -->
			<div class="connexion">
				<label for="adresse_mail">adresse mail</label>
				<input type="mail" name="mail">
				<label for="mot_de_passe">mot de passe</label>
				<input type="password" name="mail">
			</div>
			<div class="inscription" type="hidden">
				<label for="nom">nom</label>
				<input type="text" name="nom">
				<label for="prenom">prenom</label>
				<input type="text" name="prenom">
				<label for="adresse_mail">adresse mail</label>
				<input type="mail" name="mail">
				<label for="mot_de_passe">mot de passe</label>
				<input type="password" name="mail">
			</div>
			<div class="buttons">
				<button class="bouton">S'inscrire</button>
				<button class="bouton">Connexion</button>
			</div>
		</div>
		<div class="liste">	
			<?php
			$db = mysqli_connect('localhost', 'jeux-videos', 'IsImA_ZZ2/%', 'jeux-videos', 3307)
			or die('Erreur SQL'.mysqli_error($db));
			$db->query('SET NAMES UTF8');

			if (isset($_GET['famille'])){
				$cate = $_GET['famille'];
				$sql = "SELECT id,libelle, detail, prix_ttc, image FROM article WHERE id_categorie=$cate";
				$res = $db->query($sql);
				?>
				<div class="contenu">
    <?php
    while ($data = mysqli_fetch_array($res)) {
    ?>
        <div class="game-card">
            <img src="<?php echo 'images_articles/' . htmlspecialchars($data['image']); ?>" alt="Image de <?php echo htmlspecialchars($data['libelle']); ?>" class="game-image">
            <div class="game-info">
                <h3 class="game-title"><?php echo htmlspecialchars($data['libelle']); ?></h3>
                <p class="game-description"><?php echo htmlspecialchars($data['detail']); ?></p>
                <p class="game-price"><?php echo htmlspecialchars($data['prix_ttc']); ?> €</p>
                <!-- Formulaire pour ajouter un article au panier -->
                <form action="ajouter-panier.php" method="POST">
                    <input type="hidden" name="id_article" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="quantite" value="1"> <!-- Quantité fixe à 1 -->
                    <button type="submit" class="bouton">Commander</button>
                </form>
            </div>
        </div>
    <?php
    }
    ?>
</div>

			<?php
			}else{
				$sql2 = "SELECT image, libelle FROM categorie";
				$res2 = $db -> query($sql2);
				?>
				<div class="categorie">
					<?php
						$i=1;
						while($data1 = mysqli_fetch_array($res2)){
							switch ($i){
								case 1:
									?>
									<div class="unecate">
										<a href="http://projetwebzz2local/index.php?famille=1">
											<img class="imgcate" src="<?php echo 'images_categorie/'.htmlspecialchars($data1['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data1['libelle']); ?>">
										</a>
										<div class="nomcate">
											<?php
												echo 'Jeux de '.$data1['libelle'];
											?>	
										</div>
									</div>
									<?php	
									break;
								case 2:
									?>
									<div class="unecate">
										<a href="http://projetwebzz2local/index.php?famille=2">
											<img class="imgcate" src="<?php echo 'images_categorie/'.htmlspecialchars($data1['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data1['libelle']); ?>">
										</a>
									<div class="nomcate">
										<?php
											echo 'Jeux de '.$data1['libelle'];
										?>
										</div>
									</div>
									<?php
									break;
								case 3:
									?>
									<div class="unecate">
										<a href="http://projetwebzz2local/index.php?famille=3">
											<img class="imgcate" src="<?php echo 'images_categorie/'.htmlspecialchars($data1['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data1['libelle']); ?>">
										</a>
									<div class="nomcate">
										<?php
											echo 'Jeux d '.$data1['libelle'];
										?>
										</div>
									</div>
									<?php
									break;
								case 4:
									?>
									<div class="unecate">
										<a href="http://projetwebzz2local/index.php?famille=4">
											<img class="imgcate" src="<?php echo 'images_categorie/'.htmlspecialchars($data1['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data1['libelle']); ?>">
										</a>
									<div class="nomcate">
										<?php
											echo 'Jeux de '.$data1['libelle'];
										?>
										</div>
									</div>
									<?php
									break;
								case 5:
									?>
									<div class="unecate">
										<a href="http://projetwebzz2local/index.php?famille=5">
											<img class="imgcate" src="<?php echo 'images_categorie/'.htmlspecialchars($data1['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data1['libelle']); ?>">
										</a>
									<div class="nomcate">
										<?php
											echo 'Jeux d '.$data1['libelle'];
										?>
										</div>
									</div>
									<?php	
									break;
							}	
							$i++;
							?>
							<?php
						}
						?>
				</div>
				<?php
			}
			
			?>
			</div>
		</div>
		<div class="panier">
			<div class="panier-header">
				<img src="img/caddie.gif" alt="Panier Icon" class="panier-icon">
				<p>Votre Panier</p>
			</div>
			<hr>
			<div class="panier-items">
			<?php
				$sql3 = "SELECT a.libelle, pa.quantite, pa.prix_ttc, (pa.quantite * pa.prix_ttc) AS total FROM panier_article AS pa JOIN article AS a ON pa.id_article = a.id WHERE pa.id_panier = 1;";
				$res3 = $db->query($sql3);
				
        if ($res3->num_rows > 0) {
            while ($data = $res3->fetch_assoc()) {
                ?>
                <div class="panier-item">
                    <!-- <img src="<?php echo 'images_articles/' . htmlspecialchars($data['image']); ?>" alt="Image de <?php echo htmlspecialchars($data['libelle']); ?>" width="100"> -->
                    <h3 class="panier-item-title"><?php echo htmlspecialchars($data['libelle']); ?></h3>
                    <p class="panier-item-prix"><?php echo $data['quantite']; ?> x <?php echo $data['prix_ttc']; ?> = <?php echo $data['total']; ?> €</p>
                </div>
                <hr>
                <?php
            }
        } else {
            echo "<p>Votre panier est vide.</p>";
        }
        ?>
			</div>
			<div class="panier-total">
				<!-- mettre le total -->
				 <?php
				 $sql4 = "SELECT SUM(quantite * prix_ttc) AS somme_total FROM panier_article WHERE id_panier = 1;";
				 $res4 = $db->query($sql4);
				 $data4 = $res4->fetch_assoc();
				 if ($data4 >0) {
					
					?>
					<p class="panier-total-prix">TOTAL : <?php echo $data4['somme_total']; ?>€</p>
				 <?php
				 }
				 ?>
				<button class="bouton" onclick="window.location.href='vider-panier.php'">Vider le Panier</button>
			</div>
			</div>
			<?php
			mysqli_close($db);
			?>
  </body>
</html>