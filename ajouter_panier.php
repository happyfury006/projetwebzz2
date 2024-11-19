<?php
// Connexion à la base de données
$db = mysqli_connect('localhost', 'jeux-videos', 'IsImA_ZZ2/%', 'jeux-videos', 3307)
or die('Erreur SQL'.mysqli_error($db));
$db->query('SET NAMES UTF8');

// Vérification des données reçues
if (isset($_POST['id_article'], $_POST['quantite'])) {
    $id_article = (int)$_POST['id_article'];
    $quantite = (int)$_POST['quantite'];

    // Vérification de l'article
    $article = $db->query("SELECT prix_ttc FROM article WHERE id = $id_article")->fetch_assoc();

    if ($article) {
        $prix_ttc = $article['prix_ttc'];
        $prix_tva = $article['prix_ttc'];
        // Calcul de prix_ht (par exemple avec une TVA de 20 %)
        $taux_tva = 1.20; // Ajustez ce taux si nécessaire
        $prix_ht = $prix_ttc / $taux_tva;

        // Ajout ou mise à jour dans le panier
        $query = "INSERT INTO panier_article (id_panier, id_article, quantite, prix_ttc, prix_tva,prix_ht) 
                  VALUES (1, $id_article, $quantite, $prix_ttc, $prix_tva, $prix_ht) 
                  ON DUPLICATE KEY UPDATE quantite = quantite + $quantite";
        if ($db->query($query)) {
            // Redirection vers l'accueil après ajout
            header("Location: index.php");
            exit;
        } else {
            echo "Erreur lors de l'ajout au panier : " . $db->error;
        }
    } else {
        echo "Article introuvable.";
    }
} else {
    echo "Données invalides.";
}

mysqli_close($db);
?>
