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
			<div class="buttons">
				<button class="boutton">S'inscrire</button>
				<button class="boutton">Connexion</button>
			</div>
			
			
			</div>
			<div class="liste">

			
			<div class="contenu">
    <?php
    $db = mysqli_connect('localhost', 'jeux-videos', 'IsImA_ZZ2/%', 'jeux-videos', 3307)
    or die('Erreur SQL'.mysqli_error($db));
    $db->query('SET NAMES UTF8');
	$sql2 = "SELECT image, libelle FROM categorie";
	$res2 = $db -> query($sql2);

	if (isset($_GET['famille'])){
		$cate = $_GET['famille'];
    	$sql = "SELECT libelle, detail, prix_ttc, image FROM article WHERE id_categorie=$cate";
    	$res = $db->query($sql);
		while ($data = mysqli_fetch_array($res)) {
			?>
				<div class="game-card">
					<img src="<?php echo 'images_articles/' . htmlspecialchars($data['image']); ?>" alt="Image de <?php echo htmlspecialchars($data['libelle']); ?>" class="game-image">
					<div class="game-info">
						<h3 class="game-title"><?php echo $data['libelle']; ?></h3>
						<p class="game-description"><?php echo $data['detail']; ?></p>
						<p class="game-price"><?php echo $data['prix_ttc']; ?> €</p>
						<button class="game-button">Commander</button>
					</div>
				</div>
				<?php
		}
	}else{
		?>

		<div class="categorie">
						<?php
							$i=1;
							while($data1 = mysqli_fetch_array($res2)){
								

								switch ($i){
									case 1:
										?>
										<div class="unecate">
										<a href="http://projetwebzz2/index.php?famille=1">
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
										<a href="http://projetwebzz2/index.php?famille=2">
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
										<a href="http://projetwebzz2/index.php?famille=3">
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
										
									case 4:
										?>
										<div class="unecate">
										<a href="http://projetwebzz2/index.php?famille=4">
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
										<a href="http://projetwebzz2/index.php?famille=5">
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
    mysqli_close($db);
    ?>
</div>
</div>
			<div class="panier">
			PANIER
		</div>
    </body>
</html>