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
				<button>S'inscrire</button>
				<button>Connexion</button>
			</div>
			
			
			</div>
			<div class="contenu">
			<?php
			 
			
			$db = mysqli_connect('localhost', 'jeux-videos', 'IsImA_ZZ2/%', 'jeux-videos', 3307)
			or die('Erreur SQL'.mysqli_error($db));
			$db -> query ('SET NAMES UTF8');
			$cate = $_GET['famille'];
			$sql = "SELECT libelle, detail, prix_ttc FROM article WHERE id_categorie=$cate";
			$res = $db -> query($sql);

			while($data = mysqli_fetch_array($res))
			{
				?>

				
				 <img src="<?php echo 'images_articles/'.htmlspecialchars($data['image']); ?>" alt="Image de  <?php echo htmlspecialchars($data['libelle']); ?>">
				


				<?php
					echo $data['libelle'].' ';
					echo $data['detail'].' ';				
					echo $data['prix_ttc'];				
					echo ' - ';
				?>
				
			<?php
			}
			?>
			
			<?php
				mysqli_close($db);
			?>
			</div>
			<div class="panier">
			PANIER
		</div>
    </body>
</html>